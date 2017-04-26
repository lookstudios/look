require('./bootstrap');
window.Vue = require('vue');

//Components
Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
