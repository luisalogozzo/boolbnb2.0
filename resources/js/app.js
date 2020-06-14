/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const Handlebars = require("handlebars");

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


$(document).ready( function() {

 $('#address').keyup(function() {

   var query = $('#address').val();

   $('#dropdown-address').removeClass('show');

   setTimeout(function() {
     var newQuery = $('#address').val();
     if (newQuery == query) {
       $.ajax({
         url: 'https://api.tomtom.com/search/2/search/' + query + '.json',
         method: 'GET',
         data: {
          'typeahead' : true,
          'countrySet': 'IT',
          'language' : 'it-IT',
          'idxSet': "Geo,Str,PAD",
          'entityType': "CountrySubdivision,Municipality",
          'key': "MWVEigyGPAZjHyTOtDdAT88VGn5lldaS"
         },
         success: function(data) {
           $('#dropdown-address').html('');
           if (data.results.length > 0) {
             var source = document.getElementById("dropdown-template").innerHTML;
             var template = Handlebars.compile(source);
             console.log(data);
             $('#dropdown-address').addClass('show');
             var Length = 5;
             if (data.results.length < 5) {
               Length = data.results.length;
             }
             for (var i = 0; i < Length; i++) {
               var Risultati = data.results[i].address;
               var context = {
                 result: (data.results[i].type == 'Street') ? Risultati.freeformAddress + ', ' + Risultati.countrySecondarySubdivision + ', ' + Risultati.countrySubdivision : Risultati.freeformAddress + ', ' + Risultati.countrySubdivision,
                 latitude: data.results[i].position.lat,
                 longitude: data.results[i].position.lon,
               };
               var html = template(context);
               $('#dropdown-address').append(html);
             }
           }
         },
         error: function(error) {
         }
       });
     }
   }, 500);
 });

 $('#dropdown-address').on('mouseenter', '.dropdown-item' ,function(e) {
   $('.dropdown-item').css("cursor", "pointer");
 });

 $(document).on('click' ,function() {
   $('#dropdown-address').removeClass('show');
 });

 $('#dropdown-address').on('click', '.dropdown-item' ,function(e) {
   var SelectedAddress = $(e.target).text();
   $('#address').val(SelectedAddress);
   $('#address-latitude').val($(e.target).attr('data-lat'));
   $('#address-longitude').val($(e.target).attr('data-lon'));


 });

  ////////////////////////////////--MAPPA--///////////////////////////////

     // Set product's id and version
    tt.setProductInfo('boolbnb2.0', '2.0');

    // Initialize the TomTom map in the element with an id set to 'map'
    var map = tt.map({
    key: 'hybTDScBzqzH9mWgKjU0mSeOf7eDO4AV',
    container: 'map',
    style: 'tomtom://vector/1/basic-main',
    center: [$('#show-address').attr('data-lon'), $('#show-address').attr('data-lat')],
    zoom: 10
    });

    map.addControl(new tt.FullscreenControl());
    map.addControl(new tt.NavigationControl());

    var SEARCH_QUERY = $('#show-address').text();
    console.log(SEARCH_QUERY);

    function findGeometry() {
    tt.services.fuzzySearch({
    key: 'hybTDScBzqzH9mWgKjU0mSeOf7eDO4AV',
    query: SEARCH_QUERY
    })
    .go()
    .then(getAdditionalData);
    }

    findGeometry();

    function getAdditionalData(fuzzySearchResults) {
    var geometryId = fuzzySearchResults.results[0].dataSources.geometry.id;
    console.log(geometryId);
    tt.services.additionalData({
    key: 'hybTDScBzqzH9mWgKjU0mSeOf7eDO4AV',
    geometries: [geometryId],
    geometriesZoom: 12
    })
    .go()
    .then(processAdditionalDataResponse);
    }

    function buildLayer(id, data) {
      var centerLat = parseFloat($('#show-address').attr('data-lat'));
    	var centerLon = parseFloat($('#show-address').attr('data-lon'));
    	var radius = 20;
    	//cal per raggio a 128 punti
    	var rad = 3.14159265359;
    	var radLat = radius / 111.1896;
    	var radLon = radius / 82.633;
    	var coordinates = [];
    	idCircleTemp = Date.now().toString();
    	idCircle = idCircleTemp;
    	for (let index = 0; index < 512; index++) {
    		coordinates.push([centerLon + radLon * Math.cos(rad * index / 256), centerLat + radLat * Math.sin(rad * index / 256)])
    	}
      console.log(data);
      return {
        'id': id,
        'type': 'fill',
        'source': {
          'type': 'geojson',
          'data': {
            'type': 'Feature',
            'geometry': {
              'type': 'Polygon',
              'coordinates': [coordinates]
            }
          }
        },
        'layout': {},
        'paint': {
          'fill-color': '#2FAAFF',
          'fill-opacity': 0.8,
          'fill-outline-color': 'black'
        }
      }
    }

    function processAdditionalDataResponse(additionalDataResponse) {
    if (additionalDataResponse.additionalData && additionalDataResponse.additionalData.length) {
    var geometryData = displayPolygonOnTheMap(additionalDataResponse.additionalData[0]);

    }
    }

    function displayPolygonOnTheMap(additionalDataResult) {
    var geometryData = additionalDataResult.geometryData.features[0].geometry.coordinates[0];
    map.addLayer(buildLayer('fill_shape_id', geometryData));
    return geometryData;
    }

});
