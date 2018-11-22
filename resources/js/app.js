
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('products-component', require('./components/products/ProductsComponent.vue'));
Vue.component('product-card-component', require('./components/products/ProductCardComponent.vue'))


const app = new Vue({
    el: '#app'
});
