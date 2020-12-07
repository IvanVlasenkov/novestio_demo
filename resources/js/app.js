/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { find } = require('lodash');

require('./bootstrap');

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

if ($('#sidebar')) {
    var current_url = window.location.href;
    var current_aside_li = document.querySelectorAll(`li[data-for-route="${current_url}"]`);
    if (current_aside_li) {
        active_li = document.createElement('div');
        $(active_li).addClass('active');
        $(active_li).appendTo(current_aside_li);
    }
}

$(document).on("click", ".js--add-start-form-row", function(e) {
    e.preventDefault();
    let max_start_row = 15;
    let current_start_form_row = document.querySelectorAll(`#start-form-tbody>.js-start-form-row`).count;
    console.log(current_start_form_row);
});