
require('./bootstrap');

window.Vue = require('vue');

const Vuex=require('vuex');
window.store= new Vuex.Store({
    state:{
        productsCount:0
    },
    mutations:{
        increment(state){
            return state.productsCount++
        },
        set(state,value){
            return state.productsCount=value
        }
    }
})


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('products-component', require('./components/products/ProductsComponent.vue'));
Vue.component('product-card-component', require('./components/products/ProductCardComponent.vue'));
Vue.component('material-transition-group', require('./components/animations/MaterialCollectionComponent.vue'));
Vue.component('add-product-btn',require('./components/products/AddToCartComponent.vue'));
Vue.component('product-counter-component',require('./components/shopping_cart/CounterComponent.vue'));
Vue.component('products-shopping-component',require('./components/shopping_cart/ProductsShoppingCartComponent.vue'));


const app = new Vue({
    el: '#app'
});
