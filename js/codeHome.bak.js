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

var pointStyle = new ol.style.Style({
    image: new ol.style.Icon({
        anchor: [0.5, 46],
        anchorXUnits: 'fraction',
        anchorYUnits: 'pixels',
        src: 'images/icons8-place-marker-64.png'
    })
});
var map;
var overlay, container, content, closer;
var vectorLayer;
var geoJSONFormat = new ol.format.GeoJSON();

function init() {
    vectorLayer = new ol.layer.Vector({
        name: 'Vector Layer',
        source: new ol.source.Vector(),
        style: pointStyle
    });
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
            attribution: false
        }),
        view: new ol.View({
            center: ol.proj.transform([4.57551, 50.81015], 'EPSG:4326', 'EPSG:3857'),
            zoom: 11
        })
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
    var features = [];
    $.getJSON('fetchData.php', function(data) {
        for (var i = 0; i < data.features.length; ++i) {
            features[i] = new ol.Feature(new ol.geom.Point([data.features[i].properties.longitude, data.features[i].properties.latitude]));
            features[i].set('fullname', data.features[i].properties.fullname);
            features[i].set('emailid', data.features[i].properties.emailid);
            features[i].set('specialisations', data.features[i].properties.specialisations);
            features[i].set('telephone', data.features[i].properties.telephone);
            features[i].set('website', data.features[i].properties.website);
            features[i].set('agenda', data.features[i].properties.agenda);
            features[i].set('address', data.features[i].properties.address);
            features[i].set('home_therapy', data.features[i].properties.home_therapy);
            features[i].set('online_therapy', data.features[i].properties.online_therapy);
            features[i].set('conventional_therapy', data.features[i].properties.conventional_therapy);
            features[i].set('description', data.features[i].properties.description);
            features[i].set('image', data.features[i].properties.image);
        }
				vectorLayer.getSource().addFeatures(features);
    });
}

function onMapClick(evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
        return feature;
    });
    if (!feature) {
        resetAll();
    } else {
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
        //$("#liAgenda").text("   " + feature.get('agenda'));
        $("#liAgenda").attr("href", feature.get('agenda'));
        //$("#liAgenda").text("   " + feature.get('agenda'));
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
                        if (features[x].get('specialisations').indexOf('Manual therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '2':
                        if (features[x].get('specialisations').indexOf('Osteopathy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '3':
                        if (features[x].get('specialisations').indexOf('Neurological therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '4':
                        if (features[x].get('specialisations').indexOf('Sports physiotherapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '5':
                        if (features[x].get('specialisations').indexOf('Gerontology') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '6':
                        if (features[x].get('specialisations').indexOf('Oro-facial | Maxillo-facial') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '7':
                        if (features[x].get('specialisations').indexOf('Respiratory therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '8':
                        if (features[x].get('specialisations').indexOf('Cardiovascular therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '9':
                        if (features[x].get('specialisations').indexOf('Aquatherapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '10':
                        if (features[x].get('specialisations').indexOf('Pediatry') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '11':
                        if (features[x].get('specialisations').indexOf('Uro-Gynecology') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '12':
                        if (features[x].get('specialisations').indexOf('Vestibular therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '13':
                        if (features[x].get('specialisations').indexOf('Electrotherapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '14':
                        if (features[x].get('specialisations').indexOf('Perinatal therapy') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '15':
                        if (features[x].get('specialisations').indexOf('Dry needling | Acupuncture') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '16':
                        if (features[x].get('specialisations').indexOf('Pelvical reeducation') !== -1)
                            features[x].set('dikhao', set);
                        break;
                    case '17':
                        if (features[x].get('specialisations').indexOf('Lymphatic drainage') !== -1)
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
                src: 'images/icons8-place-marker-64.png'
            })
        });
}

function resetAll() {
    $("#TName").text('Mr. Nobody');
    $("#TPP").attr("src", '')
    $("#liPhone").text(' Tel: ');
    $("#liEmail").text(' email:');
    $("#liWebsite").text(' website:');
    $("#liAgenda").text(' agenda:');
    $("#liAddress").text(' address:');
    $("#DescriptionBlock").text('');
    $('#homeTherapy').prop("checked", false);
    $('#onlineTherapy').prop("checked", false);
    $('#conventionTherapy').prop("checked", false);
    $("#specialisations").html("");
}

function getFilteredFeatures() {
    vectorLayer.getSource().clear();
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
    if ($("#City").val().length > 0)
        query += 'address like "%' + $('#City').val() + '%"' + " and ";
    if ($("#Address").val().length > 0)
        query += 'address like "%' + $('#Address').val() + '%"' + " and ";
    if ($("#Name").val().length > 0)
        query += 'fullname like "%' + $('#Name').val() + '%"' + " and ";


    query = query.substring(0, query.length - 4);

    $.getJSON('fetchDataFiltered.php?query=' + query, function(data) {
        $.each(data.features, function(key, val) {
            vectorLayer.getSource().addFeature(
                new ol.Feature({
                    geometry: new ol.geom.Point([val.properties.longitude, val.properties.latitude]),
                    fullname: val.properties.fullname,
                    emailid: val.properties.emailid,
                    specialisations: val.properties.specialisations,
                    telephone: val.properties.telephone,
                    website: val.properties.website,
                    agenda: val.properties.agenda,
                    address: val.properties.address,
                    home_therapy: val.properties.home_therapy,
                    online_therapy: val.properties.online_therapy,
                    conventional_therapy: val.properties.conventional_therapy,
                    description: val.properties.description,
                    image: val.properties.image
                })
            );
        });
    });
}
