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



});
