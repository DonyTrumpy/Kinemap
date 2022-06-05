$(window).on("load", function() {
    $(".loader-container").fadeOut(1000);

    $("#GoAddress").click(function() {
        getFilteredFeatures();
    });
    $("#GoCity").click(function() {
        getFilteredFeatures();
    });
    $("#GoName").click(function() {
        getFilteredFeatures();
    });
});

$(document).ready(function() {
    var prevScrollTop = $(window).scrollTop()

    $(window).on('scroll', function(e) {
        // Variable declaration for search container
        var $src = $('.Messazzz');
        var currentScrollTop = $(this).scrollTop();

        if (currentScrollTop >= prevScrollTop && currentScrollTop > 44) {
            $src.css({
                'position': 'fixed',
                'top': '0'
            });
            $src.slideDown();
        } else if (currentScrollTop == 0) {
            $src.css({
                'position': 'fixed',
                'top': '90px'
            });
            // $src.slideUp();
        }

        prevScrollTop = currentScrollTop
    });
    $("#FHomeLB, #FOnlineLB, #FConventionLB, #one, #two, #three, #four, #five, #six, #seven, #eight, #nine, #ten, #eleven, #twelve, #thirteen, #fourteen, #fifteen, #sixteen, #seventeen, #eighteen, #nineteen, #twenty, #twentyone, #twentytwo, #twentythree, #twentyfour, #twentyfive").click(function(e) {
        if ($("#questionMarkId").is(":visible")) {
            $('#questionMarkId').hide();
        }
        $('#questionMarkId').css({
            left: ($(this).offset().left + $(this).width()) + 10 + "px",
            top: $(this).offset().top - 2 + "px",
            'position': 'absolute',
            'border': '1px solid black',
            'padding': '5px',
            'background': 'white'
        });
        // if (window.screen.availWidth < 880) {
          $('#questionMarkId').show();
        // }
        // else {
        //   $('#questionMarkId').hide();
        // }
    });
    $("#GoCity, #GoAddress, #GoName").click(function(e) {
        if ($("#questionMarkId").is(":visible")) {
            $('#questionMarkId').hide();
        }
        $('#questionMarkId').css({
            left: ($(this).offset().left + $(this).width()) + 40 + "px",
            top: $(this).offset().top - 2 + "px",
            'position': 'absolute',
            'border': '1px solid black',
            'padding': '5px',
            'background': 'white'
        });
        // if (window.screen.availWidth < 880) {
          $('#questionMarkId').show();
        // }
        // else {
        //   $('#questionMarkId').hide();
        // }
    });
});


var pointStyle = new ol.style.Style({
    image: new ol.style.Icon({
        anchor: [0.5, 46],
        anchorXUnits: 'fraction',
        anchorYUnits: 'pixels',
        src: '../images/icons8-place-marker-64.png'
    })
});
var map;
var overlay, container, content, closer;
var geoJSONFormat = new ol.format.GeoJSON();

var styleCache = {};

function getStyle(feature, resolution) {
    try {
        var size = feature.get('features').length;
        var style = styleCache[size];
        if (!style) {
            if (size <= 1) {
                style = new ol.style.Style({
                    image: new ol.style.Icon({
                        anchor: [0.5, 46],
                        anchorXUnits: 'fraction',
                        anchorYUnits: 'pixels',
                        src: '../images/icons8-place-marker-64.png'
                    })
                });
            } else {
                var color = size > 25 ? "192,0,0" : size > 8 ? "255,128,0" : "0,128,0";
                var radius = Math.max(15, Math.min(size * 0.75, 20));
                var dash = 2 * Math.PI * radius / 6;
                var dash = [0, dash, dash, dash, dash, dash, dash];
                style = styleCache[size] = new ol.style.Style({
                    image: new ol.style.Circle({
                        radius: radius,
                        stroke: new ol.style.Stroke({
                            color: "rgba(" + color + ",0.5)",
                            width: 15,
                            lineDash: dash,
                            lineCap: "butt"
                        }),
                        fill: new ol.style.Fill({
                            color: "rgba(" + color + ",1)"
                        })
                    }),
                    text: new ol.style.Text({
                        text: size.toString(),
                        //font: 'bold 12px comic sans ms',
                        //textBaseline: 'top',
                        fill: new ol.style.Fill({
                            color: '#fff'
                        })
                    })
                });
            }
        }
        return style;
    } catch (e) {

    } finally {

    }
}

var source = new ol.source.Vector({
    format: geoJSONFormat
});
var clusterSource = new ol.source.Cluster({
    distance: 30,
    source: source
});
var vectorLayer = new ol.layer.Vector({
    name: 'Vector Layer',
    source: clusterSource,
    style: getStyle
});
var invisibleFill = new ol.style.Fill({
    color: 'rgba(255, 255, 255, 0.01)'
});

function selectStyleFunction(feature) {
    var styles = [new ol.style.Style({
        image: new ol.style.Circle({
            radius: feature.get('radius'),
            fill: invisibleFill
        })
    })];
    var originalFeatures = feature.get('features');
    var originalFeature;
    for (var i = originalFeatures.length - 1; i >= 0; --i) {
        originalFeature = originalFeatures[i];
        styles.push(createEarthquakeStyle(originalFeature));
    }
    return styles;
}

function createEarthquakeStyle(feature) {
    return new ol.style.Style({
        geometry: feature.getGeometry(),
        image: new ol.style.Icon({
            anchor: [0.5, 46],
            anchorXUnits: 'fraction',
            anchorYUnits: 'pixels',
            src: '../images/icons8-place-marker-64.png'
        })
    });
}

function init() {
    container = document.getElementById('popup');
    content = document.getElementById('popup-content');
    closer = document.getElementById('popup-closer');
    overlay = new ol.Overlay( /** @type {olx.OverlayOptions} */ ({
        element: container,
        autoPan: true,
        autoPanAnimation: {
            duration: 250
        }
    }));
    closer.onclick = function() {
        overlay.setPosition(undefined);
        closer.blur();
        resetAll();
        return false;
    };
    map = new ol.Map({
        target: 'map',
        overlays: [overlay],
        layers: [
            new ol.layer.Tile({
                source: new ol.source.XYZ({
                    url: 'https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZnJvemVucGluZ3VpbiIsImEiOiJjazloZm45NDYwYjRqM2VxNjJvMmViZmEzIn0.2jnWaaa631N-Nj3D9kL5Yw'
                })
            }),
            vectorLayer
        ],
        controls: ol.control.defaults({
            attribution: false,
            rotate: false
        }),
        view: new ol.View({
            center: ol.proj.transform([4.57551, 50.81015], 'EPSG:4326', 'EPSG:3857'),
            zoom: 8
        }),
        interactions: ol.interaction.defaults().extend([new ol.interaction.Select({
            condition: function(evt) {
                return evt.type == 'pointermove' ||
                    evt.type == 'singleclick';
            },
            style: selectStyleFunction
        })]),
    });

    map.on('pointermove', function(e) {
        if (e.dragging) return;
        var pixel = e.map.getEventPixel(e.originalEvent);
        var hit = map.hasFeatureAtPixel(e.pixel, {});
        e.map.getTargetElement().style.cursor = hit ? 'pointer' : '';
    });

    map.on('singleclick', onMapClick);

    getAllData();
}

function getAllData() {
    $.getJSON('../abc/fetchData.php', function(data) {
        vectorLayer.getSource().getSource().clear();
        vectorLayer.getSource().getSource().addFeatures(geoJSONFormat.readFeatures(data));
    });
}


function getWFSCluster(layerTitle, layerName, distance) {
    condition = layerTitle;

    var source = new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        loader: function(extent, resolution, projection) {
            var extent = map.getView().calculateExtent(map.getSize());
            extent = ol.extent.applyTransform(extent, ol.proj.getTransform("EPSG:3857", "EPSG:4326"));
            var url = '../geoserver/wfs?' +
                'service=WFS&request=GetFeature&' +
                'version=1.0.0&typename=Farmer:' + layerName + '&' +
                'outputFormat=application/json&';

            $.ajax({
                url: url,
                dataType: 'json',
                beforeSend: function(e) {},
                success: function(data) {
                    var features = geoJSONFormat.readFeatures(data);
                    source.addFeatures(features);
                }
            });
        },
        strategy: ol.loadingstrategy.bbox
    });

    var clusterSource = new ol.source.Cluster({
        distance: distance,
        source: source
    });

    var layer;

    if (layerName == "corn") {
        layer = new ol.layer.Vector({
            displayInLayerSwitcher: false,
            title: layerTitle,
            name: layerTitle,
            source: source,
            visible: false,
            style: getFeatureStyle
        });
    } else if (layerName == "potbellytwo") {
        layer = new ol.layer.Vector({
            displayInLayerSwitcher: false,
            title: layerTitle,
            name: layerTitle,
            source: source,
            visible: false,
            style: getFeatureStylePB
        });
    } else {
        layer = new ol.layer.AnimatedCluster({
            displayInLayerSwitcher: false,
            title: layerTitle,
            name: layerTitle,
            source: clusterSource,
            animationDuration: 700,
            visible: false,
            style: getStyleMulti
        });
    }
    return layer;
}

function onMapClick(evt) {
    try {
        $("#popup-closer").click();
    } catch (ex) {}
    var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
        return feature;
    });
    if (!feature) {
        resetAll();
    } else {
        feature = feature.S.features[0];
        try {
            coordinates = feature.getGeometry().getCoordinates();
        } catch (e) {}
        try {
            coords = ol.proj.transform(coordinates, 'EPSG:3857', 'EPSG:4326');
        } catch (e) {}


        $("#TName").text(feature.get('fullname'));
        $("#TPP").attr("src", feature.get('image'))
        $("#liPhone").text("   " + feature.get('telephone'));
        $("#liEmail").text("   " + feature.get('emailid'));
        $("#liWebsite").text("   " + feature.get('website'));
        if (feature.get('agenda') == "" || feature.get('agenda') == null) {
            $("#liAgenda").hide();
        } else {
            $("#liAgenda").prop("href", "//" + feature.get('agenda'));
            $("#liAgenda").attr("target", "_blank");
            $("#liAgenda").show();
        }

        $("#liAddress").text("   " + feature.get('address'));
        $("#DescriptionBlock").text(feature.get('description'));

        if (feature.get('home_therapy') == 1)
            $('#homeTherapy').prop("checked", true);
        else
            $('#homeTherapy').prop("checked", false);
        if (feature.get('online_therapy') == 1)
            $('#onlineTherapy').prop("checked", true);
        else
            $('#onlineTherapy').prop("checked", false);
        if (feature.get('conventional_therapy') == 1)
            $('#conventionTherapy').prop("checked", true);
        else
            $('#conventionTherapy').prop("checked", false);

        $("#specialisations").html("");
        var result = feature.get('specialisations').split(",");
        for (i = 0; i < result.length; i++) {
            $("#specialisations").append("<P>" + result[i]);
        }

        if (window.screen.availWidth < 450) {
            // content.innerHTML = "go see <a href='#TTP'>" + feature.get('fullname') + "!</a>";
            content.innerHTML = 'go see <a href="#TPP" title="Back to Middle">' + feature.get('fullname') + '</a>';
            overlay.setPosition(coordinates);
        }
    }
}

function removeAllFilters() {
    try {
        $("#popup-closer").click();
    } catch (ex) {}

    var uncheck = document.getElementsByTagName('input');
    for (var i = 0; i < uncheck.length; i++) {
        if (uncheck[i].type == 'checkbox') {
            uncheck[i].checked = false;
        }
    }
    $("#Address").val('');
    $("#City").val('');
    $("#Name").val('');

    getAllData();
}

function checkAndReset() {
    if (!$('#1').is(":checked") && !$('#2').is(":checked") && !$('#3').is(":checked") && !$('#4').is(":checked") && !$('#5').is(":checked") && !$('#6').is(":checked") && !$('#7').is(":checked") && !$('#8').is(":checked") && !$('#9').is(":checked") && !$('#10').is(":checked") && !$('#11').is(":checked") && !$('#12').is(":checked") && !$('#13').is(":checked") && !$('#14').is(":checked") && !$('#15').is(":checked") && !$('#16').is(":checked") && !$('#17').is(":checked") && !$('#18').is(":checked") && !$('#18').is(":checked") && !$('#19').is(":checked") && !$('#20').is(":checked")) {
        var features = vectorLayer.getSource().getFeatures();
        if (features != null && features.length > 0) {
            for (x in features) {
                features[x].set('dikhao', true);
            }
        }
    }
}

function getVisibleFeatures(id, set) {
    // console.log(id + " ---- " + set);
    var features = vectorLayer.getSource().getFeatures();
    if (features != null && features.length > 0) {
        for (x in features) {
            // console.log(features[x]);
            if (!features[x].get('dikhao')) {
                switch (id) {
                    case 'address':
                        if (features[x].get('address').indexOf($("#Address").val()) !== -1)
                            features[x].set('dikhao', true);
                        break;
                    case 'city':
                        if (features[x].get('address').indexOf($("#City").val()) !== -1)
                            features[x].set('dikhao', true);
                        break;
                    case 'name':
                        if (features[x].get('fullname').indexOf($("#Name").val()) !== -1)
                            features[x].set('dikhao', true);
                        break;
                    case 'FHome':
                        if (features[x].get('home_therapy') == "1")
                            features[x].set('dikhao', set);
                        break;
                    case 'FOnline':
                        if (features[x].get('online_therapy') == "1")
                            features[x].set('dikhao', set);
                        break;
                    case 'FConvention':
                        if (features[x].get('conventional_therapy') == "1")
                            features[x].set('dikhao', set);
                        break;
                    case '1':
                        if (features[x].get('specialisations').indexOf('Thérapie Manuelle') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '2':
                        if (features[x].get('specialisations').indexOf('Ostéopathie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '3':
                        if (features[x].get('specialisations').indexOf('Neurological therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '4':
                        if (features[x].get('specialisations').indexOf('Kiné du sport') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '5':
                        if (features[x].get('specialisations').indexOf('Gérontologie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '6':
                        if (features[x].get('specialisations').indexOf('Oro-facial | Maxillo-facial') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '7':
                        if (features[x].get('specialisations').indexOf('Thérapie respiratoire') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '8':
                        if (features[x].get('specialisations').indexOf('Thérapie cardiovasculaire') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '9':
                        if (features[x].get('specialisations').indexOf('Aquathérapie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '10':
                        if (features[x].get('specialisations').indexOf('Pédiatrie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '11':
                        if (features[x].get('specialisations').indexOf('Uro-Gynecologie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '12':
                        if (features[x].get('specialisations').indexOf('Thérapie vestibulaire') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '13':
                        if (features[x].get('specialisations').indexOf('Electrothérapie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '14':
                        if (features[x].get('specialisations').indexOf('Thérapie périnatale') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '15':
                        if (features[x].get('specialisations').indexOf('Dry needling | Acupuncture') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '16':
                        if (features[x].get('specialisations').indexOf('Rééducation pelvienne') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '17':
                        if (features[x].get('specialisations').indexOf('Drainage lymphatique') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '18':
                        if (features[x].get('specialisations').indexOf('Inwendige aandoeningen') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '19':
                        if (features[x].get('specialisations').indexOf('Crochetage') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '20':
                        if (features[x].get('specialisations').indexOf('Ultrasound | Shockwave') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '23':
                        if (features[x].get('specialisations').indexOf('Gériatrie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '24':
                        if (features[x].get('specialisations').indexOf('Oncologie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '25':
                        if (features[x].get('specialisations').indexOf('Fasciathérapie') !== -1)
                            features[x].set('dikhao', set);
                        break;
                }
            }
        }
    }

    vectorLayer.setStyle(styleFunction);
}

function styleFunction(feature) {
    if (feature.get('dikhao'))
        return new ol.style.Style({
            image: new ol.style.Icon({
                anchor: [0.5, 0.96],
                src: '../images/icons8-place-marker-64.png'
            })
        });
}

function resetAll() {
    $("#TName").text('Mr. Nobody');
    $("#TPP").attr("src", '../images/profile.png')
    $("#liPhone").text(' Tel: ');
    $("#liEmail").text(' email:');
    $("#liWebsite").text(' website:');
    $("#liAgenda").text('online agenda');
    $("#liAgenda").show();
    $("#liAddress").text(' address:');
    $("#DescriptionBlock").text('');
    $('#homeTherapy').prop("checked", false);
    $('#onlineTherapy').prop("checked", false);
    $('#conventionTherapy').prop("checked", false);
    $("#specialisations").html("");
}

function getFilteredFeatures() {
    // vectorLayer.getSource().getSource().clear();
    var list = [],
        query = "";
    if ($('#FHome').is(":checked"))
        query += "home_therapy='1' and ";
    if ($('#FOnline').is(":checked"))
        query += "online_therapy='1' and ";
    if ($('#FConvention').is(":checked"))
        query += "conventional_therapy='1' and ";
    if ($('#1').is(":checked"))
        query += 'specialisations like "%' + $('#1').val() + '%"' + " and ";
    if ($('#2').is(":checked"))
        query += 'specialisations like "%' + $('#2').val() + '%"' + " and ";
    if ($('#3').is(":checked"))
        query += 'specialisations like "%' + $('#3').val() + '%"' + " and ";
    if ($('#4').is(":checked"))
        query += 'specialisations like "%' + $('#4').val() + '%"' + " and ";
    if ($('#5').is(":checked"))
        query += 'specialisations like "%' + $('#5').val() + '%"' + " and ";
    if ($('#6').is(":checked"))
        query += 'specialisations like "%' + $('#6').val() + '%"' + " and ";
    if ($('#7').is(":checked"))
        query += 'specialisations like "%' + $('#7').val() + '%"' + " and ";
    if ($('#8').is(":checked"))
        query += 'specialisations like "%' + $('#8').val() + '%"' + " and ";
    if ($('#9').is(":checked"))
        query += 'specialisations like "%' + $('#9').val() + '%"' + " and ";
    if ($('#10').is(":checked"))
        query += 'specialisations like "%' + $('#10').val() + '%"' + " and ";
    if ($('#11').is(":checked"))
        query += 'specialisations like "%' + $('#11').val() + '%"' + " and ";
    if ($('#12').is(":checked"))
        query += 'specialisations like "%' + $('#12').val() + '%"' + " and ";
    if ($('#13').is(":checked"))
        query += 'specialisations like "%' + $('#13').val() + '%"' + " and ";
    if ($('#14').is(":checked"))
        query += 'specialisations like "%' + $('#14').val() + '%"' + " and ";
    if ($('#15').is(":checked"))
        query += 'specialisations like "%' + $('#15').val() + '%"' + " and ";
    if ($('#16').is(":checked"))
        query += 'specialisations like "%' + $('#16').val() + '%"' + " and ";
    if ($('#17').is(":checked"))
        query += 'specialisations like "%' + $('#17').val() + '%"' + " and ";
    if ($('#18').is(":checked"))
        query += 'specialisations like "%' + $('#18').val() + '%"' + " and ";
    if ($('#19').is(":checked"))
        query += 'specialisations like "%' + $('#19').val() + '%"' + " and ";
    if ($('#20').is(":checked"))
        query += 'specialisations like "%' + $('#20').val() + '%"' + " and ";
    if ($('#21').is(":checked"))
        query += 'specialisations like "%' + $('#21').val() + '%"' + " and ";
    if ($('#22').is(":checked"))
        query += 'specialisations like "%' + $('#22').val() + '%"' + " and ";
    if ($('#23').is(":checked"))
        query += 'specialisations like "%' + $('#23').val() + '%"' + " and ";
    if ($('#24').is(":checked"))
        query += 'specialisations like "%' + $('#24').val() + '%"' + " and ";
    if ($('#25').is(":checked"))
        query += 'specialisations like "%' + $('#25').val() + '%"' + " and ";
    if ($("#City").val().length > 0)
        query += 'address like "%' + $('#City').val() + '%"' + " and ";
    if ($("#Address").val().length > 0)
        query += 'address like "%' + $('#Address').val() + '%"' + " and ";
    if ($("#Name").val().length > 0)
        query += 'fullname like "%' + $('#Name').val() + '%"' + " and ";

    query = query.substring(0, query.length - 4);
    $.getJSON('../abc/fetchDataFiltered.php?query=' + query, function(data) {
        vectorLayer.getSource().getSource().clear();
        vectorLayer.getSource().getSource().addFeatures(geoJSONFormat.readFeatures(data));
    });
}
