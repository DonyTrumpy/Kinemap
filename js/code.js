$(document).ready(function() {
    //$("#delProfile").hide();
    $("#password").hide();
    $.ajax({
        type: "GET",
        url: "../abc/getAllUsers.php",
        cache: false,
        success: function(data) {
            var select = $("#allusers");
            var list = [];
            var projects = JSON.parse(data);
            list.push('<option value="none" selected> Nothing</option>');
            list.push('<option value="new">-New-</option>');
            for (i = 0; i < projects.length; i++) {
                list.push('<option value="' + projects[i].id + '">' + projects[i].fullname + ' -- </option>');
            }
            select.html(list.join(''));
            $('#allusers').picker({
                search: true
            });
            var $elem = $('#allusers');
            $elem.picker();
            $elem.on('sp-change', function(e) {
                getUserDetails($elem.picker('get'));
            });
        }
    });
    $('#my-select').multiSelect({
        keepOrder: true,
        selectableHeader: "<div class='custom-header'>Specialisations</div>",
        selectionHeader: "<div class='custom-header'>Selected</div>",
    });

    $('#submit').click(function() {
        if ($("#lati").text() == "" || $("#longi").text() == "") {
            $.notify("You did not select a location, click on map", {
                className: 'error',
                globalPosition: 'top center'
            });
            return;
        }
        if ($("#TName").val() == "") {
            $.notify("Enter your name please", {
                className: 'error',
                globalPosition: 'top center'
            });
            return;
        }
        // if ($("#TPhone").val() == "") {
        //     $.notify("Enter your telephone number please", {
        //         className: 'error',
        //         globalPosition: 'top center'
        //     });
        //     $('#TName').focus();
        //     return;
        // }
        // if ($("#TEmail").val() == "") {
        //     $.notify("Enter your email address please", {
        //         className: 'error',
        //         globalPosition: 'top center'
        //     });
        //     return;
        // }
        if ($("#TStreet").val() == "") {
            $.notify("Enter your address please", {
                className: 'error',
                globalPosition: 'top center'
            });
            return;
        }
        if ($("#TZip").val() == "") {
            $.notify("Enter your zip please", {
                className: 'error',
                globalPosition: 'top center'
            });
            return;
        }
        if ($("#TCity").val() == "") {
            $.notify("Enter your city please", {
                className: 'error',
                globalPosition: 'top center'
            });
            return;
        }
        // if ($("#DescriptionScript").val() == "") {
        //     $.notify("Enter your short description please", {
        //         className: 'error',
        //         globalPosition: 'top center'
        //     });
        //     return;
        // }

        var home_therapy = 0,
            online_therapy = 0,
            conventional_therapy = 0;
        if ($('#homeTherapy').is(":checked"))
            home_therapy = 1;
        if ($('#onlineTherapy').is(":checked"))
            online_therapy = 1;
        if ($('#conventionTherapy').is(":checked"))
            conventional_therapy = 1;

        var dataString = 'fullname=' + $("#TName").val() + '&specialisations=' + getSelectValues(document.getElementById('my-select')).toString() + '&emailid=' + $("#TEmail").val() + '&telephone=' + $("#TPhone").val() + '&website=' + $("#TWebsite").val() +  '&agenda=' + $("#TAgenda").val() + '&address=' + $("#TStreet").val() + ", " + $("#TCity").val() + ", " + $("#TZip").val() + '&home_therapy=' + home_therapy + '&online_therapy=' + online_therapy + '&conventional_therapy=' + conventional_therapy + '&description=' + $("#DescriptionScript").val() + '&latitude=' + $("#lati").text().replace("Latitude: ", "") + '&longitude=' + $("#longi").text().replace("Longitude: ", "") + '&image=' + $('#img').attr('src');
        if ($("#submit").val() == "Submit") {
            $.ajax({
                type: "POST",
                url: "insertData.php",
                data: dataString + '&password=' + $("#password").val(),
                cache: false,
                success: function(data) {
                    map.removeInteraction(drawi);
                    $.notify("Data submitted successfully!", {
                        className: 'success',
                        globalPosition: 'top center'
                    });
                    $("#TName").val('');
                    $('#my-select').multiSelect('deselect_all');
                    $("#TEmail").val('');
                    $("#password").val('');
                    $("#TPhone").val('');
                    $("#TWebsite").val('');
                    $("#TAgenda").val('');
                    $("#TStreet").val('');
                    $("#TCity").val('');
                    $("#TZip").val('')
                    $('#homeTherapy').prop("checked", false);
                    $('#onlineTherapy').prop("checked", false);
                    $('#conventionTherapy').prop("checked", false);
                    $("#DescriptionScript").val('');
                    $("#lati").text('');
                    $("#longi").text('');
                    $('#img').attr('src', '../images/profile.png');
                    $('#selectBox option[value=none]').prop('selected', true);
                }
            });
        }
        if ($("#submit").val() == "Update") {
            $.ajax({
                type: "POST",
                url: "../abc/updateData.php",
                data: dataString,
                cache: false,
                success: function(data) {
                    map.removeInteraction(drawi);
                    $.notify("Data updated successfully!", {
                        className: 'success',
                        globalPosition: 'top center'
                    });
                    $("#TName").val('');
                    $('#my-select').multiSelect('deselect_all');
                    $("#TEmail").val('');
                    $("#TPhone").val('');
                    $("#TWebsite").val('');
                    $("#TAgenda").val('');
                    $("#TStreet").val('');
                    $("#TCity").val('');
                    $("#TZip").val('')
                    $('#homeTherapy').prop("checked", true);
                    $('#onlineTherapy').prop("checked", true);
                    $('#conventionTherapy').prop("checked", true);
                    $("#DescriptionScript").val('');
                    $("#lati").text('');
                    $("#longi").text('');
                    $('#img').attr('src', '../images/profile.png');
                    $('#selectBox option[value=none]').prop('selected', true);
                }
            });
        }
    });

    $('#delProfile').click(function(e) {
        e.preventDefault();

        var $elem = $('#allusers');
        var selVal = $elem.picker('get');
        if (selVal == "none") {
            $.notify("No user selected!", {
                className: 'error',
                globalPosition: 'top center'
            });
        } else {
            console.log(selVal);
            $.ajax({
                type: "GET",
                url: "../abc/deleteUser.php?id=" + selVal,
                cache: false,
                success: function(data) {
                    $.notify("User delected successfully!", {
                        className: 'success',
                        globalPosition: 'top center'
                    });
                    location.reload();
                }
            });
        }
        return false;
    });
});

function getSelectValues(select) {
    var result = [];
    var options = select && select.options;
    var opt;

    for (var i = 0, iLen = options.length; i < iLen; i++) {
        opt = options[i];

        if (opt.selected) {
            result.push(opt.value || opt.text);
        }
    }
    return result;
}

var map, drawi, modi, vectorFirst;
var pointStyle = new ol.style.Style({
    image: new ol.style.Icon({
        anchor: [0.5, 46],
        anchorXUnits: 'fraction',
        anchorYUnits: 'pixels',
        src: '../images/icons8-place-marker-64.png'
    })
})

function init() {
    vectorFirst = new ol.layer.Vector({
        name: 'Vector First',
        source: new ol.source.Vector(),
        style: pointStyle
    });
    map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.XYZ({
                    url: 'https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=wOZASeM13ieZGp1NU9gS'
                })
            }),
            vectorFirst
        ],
        controls: ol.control.defaults({
            attribution: false
        }),
        view: new ol.View({
            center: [504236.11, 6595690.93],
            zoom: 9
        })
    });

    drawi = new ol.interaction.Draw({
        source: vectorFirst.getSource(),
        type: "Point",
        style: pointStyle
    });
    map.addInteraction(drawi);

    drawi.on('drawstart',
        function(e) {});

    drawi.on('drawend', function(e) {
        map.removeInteraction(drawi);
        modi = new ol.interaction.Modify({
            source: vectorFirst.getSource()
        });
        map.addInteraction(modi);
        var modifiedFeatures = [];
        modi.on('modifyend',
            function(e) {
                var features = e.features.getArray();
                for (var i = 0; i < features.length; i++) {
                    var rev = features[i].getRevision();
                    if (rev > 1) {
                        modifiedFeatures.push(features[i]);
                    }
                }
                const coord_t = ol.proj.transform(modifiedFeatures[0].getGeometry().getCoordinates(), 'EPSG:3857', 'EPSG:4326');
                decodeCoords(coord_t);
                $("#longi").text("Longitude: " + modifiedFeatures[0].getGeometry().getCoordinates()[0].toFixed(4));
                $("#lati").text("Latitude: " + modifiedFeatures[0].getGeometry().getCoordinates()[1].toFixed(4));
            });
        vectorFirst.getSource().once('addfeature', handleAddFeature);
    });
    if ($("#longi").text() != "") {
        var olFeature = new ol.Feature({
            geometry: new ol.geom.Point([$("#longi").text().replace('Longitude: ', ''), $("#lati").text().replace('Latitude: ', '')])
        });
        vectorFirst.getSource().addFeature(olFeature);

        $("#submit").val('Update');
        map.removeInteraction(drawi);
        modi = new ol.interaction.Modify({
            source: vectorFirst.getSource()
        });
        map.addInteraction(modi);
        var modifiedFeatures = [];
        modi.on('modifyend',
            function(e) {
                var features = e.features.getArray();
                for (var i = 0; i < features.length; i++) {
                    var rev = features[i].getRevision();
                    if (rev > 1) {
                        modifiedFeatures.push(features[i]);
                    }
                }
                const coord_t = ol.proj.transform(modifiedFeatures[0].getGeometry().getCoordinates(), 'EPSG:3857', 'EPSG:4326');
                decodeCoords(coord_t);
                $("#longi").text("Longitude: " + modifiedFeatures[0].getGeometry().getCoordinates()[0].toFixed(4));
                $("#lati").text("Latitude: " + modifiedFeatures[0].getGeometry().getCoordinates()[1].toFixed(4));
            });
    }
}

function handleAddFeature(evt) {
    var feature = evt.feature;
    var coordinates = feature.getGeometry().getCoordinates();
    const coord_t = ol.proj.transform(coordinates, 'EPSG:3857', 'EPSG:4326');
    decodeCoords(coord_t);
    $("#longi").text("Longitude: " + coordinates[0].toFixed(4));
    $("#lati").text("Latitude: " + coordinates[1].toFixed(4));
}

function decodeCoords(coord_t) {
    $.ajax({
        url: "http://open.mapquestapi.com/geocoding/v1/reverse?key=FXWzYM93G6Wv75dek94PgHtg9mJPnlu2&format=json&location=" + coord_t[1].toFixed(4) + "," + coord_t[0].toFixed(4) + "&includeRoadMetadata=true&includeNearestIntersection=true",
        success: function(data) {
            var loc = data.results[0].locations[0];
            $("#TStreet").val(loc.street);
            $("#TZip").val(loc.postalCode);
            $("#TCity").val(loc.adminArea5);
        },
        error: function() {
            response([]);
        },
        dataType: 'json'
    });
}

function getUserDetails(val) {
    $("#TName").val('');
    $('#my-select').multiSelect('deselect_all');
    $("#TEmail").val('');
    $("#TPhone").val('');
    $("#TWebsite").val('');
    $("#TAgenda").val('');
    $("#TStreet").val('');
    $("#TCity").val('');
    $("#TZip").val('')
    $('#homeTherapy').prop("checked", false);
    $('#onlineTherapy').prop("checked", false);
    $('#conventionTherapy').prop("checked", false);
    $("#DescriptionScript").val('');
    $("#lati").text('');
    $("#longi").text('');
    $('#img').attr('src', '../images/profile.png');
    $('#selectBox option[value=none]').prop('selected', true);
    vectorFirst.getSource().clear();
    if (val == "none") {
        return;
    }
    if (val == "new") {
        try {
            map.addInteraction(drawi);
        } catch (e) {}
        $("#submit").val('Submit');
        $("#password").show();
        return;
    } else {
        $.ajax({
            type: "GET",
            url: "../abc/getUserDetails.php?id=" + val,
            cache: false,
            success: function(data) {
                var vals = JSON.parse(data);
                var addArr = vals[0]["address"].split(',');
                var specialArr = vals[0]["specialisations"].split(',');
                $("#TName").val(vals[0]["fullname"]);
                $("#TPhone").val(vals[0]["telephone"]);
                $("#TEmail").val(vals[0]["emailid"]);
                $("#TWebsite").val(vals[0]["website"]);
                $("#TAgenda").val(vals[0]["agenda"]);
                $("#TStreet").val(addArr[0]);
                $("#TZip").val(addArr[1]);
                $("#TCity").val(addArr[2]);
                $("#DescriptionScript").val(vals[0]["description"]);
                $("#longi").text("Longitude: " + vals[0]["longitude"]);
                $("#lati").text("Latitude: " + vals[0]["latitude"]);
                if (vals[0]["home_therapy"] == "1")
                    $('#homeTherapy').prop("checked", true);
                else
                    $('#homeTherapy').prop("checked", false);
                if (vals[0]["online_therapy"] == "1")
                    $('#onlineTherapy').prop("checked", true);
                else
                    $('#onlineTherapy').prop("checked", false);
                if (vals[0]["conventional_therapy"] == "1")
                    $('#conventionTherapy').prop("checked", true);
                else
                    $('#conventionTherapy').prop("checked", false);
                $('#my-select').multiSelect('select', specialArr);
                $('#img').attr('src', vals[0]["image"]);
                var olFeature = new ol.Feature({
                    geometry: new ol.geom.Point([$("#longi").text().replace('Longitude: ', ''), $("#lati").text().replace('Latitude: ', '')])
                });
                vectorFirst.getSource().addFeature(olFeature);

                $("#submit").val('Update');
                map.removeInteraction(drawi);
                modi = new ol.interaction.Modify({
                    source: vectorFirst.getSource()
                });
                map.addInteraction(modi);
                var modifiedFeatures = [];
                modi.on('modifyend',
                    function(e) {
                        var features = e.features.getArray();
                        for (var i = 0; i < features.length; i++) {
                            var rev = features[i].getRevision();
                            if (rev > 1) {
                                modifiedFeatures.push(features[i]);
                            }
                        }
                        const coord_t = ol.proj.transform(modifiedFeatures[0].getGeometry().getCoordinates(), 'EPSG:3857', 'EPSG:4326');
                        decodeCoords(coord_t);
                        $("#longi").text("Longitude: " + modifiedFeatures[0].getGeometry().getCoordinates()[0].toFixed(4));
                        $("#lati").text("Latitude: " + modifiedFeatures[0].getGeometry().getCoordinates()[1].toFixed(4));
                    });
            }
        });
    }
}
