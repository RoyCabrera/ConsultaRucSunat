<template>
    <!--<p>Mi primer componente {{name}}</p>-->
    <section>
        <transition-group
                tag="div"
                :css="false"
                name="fadeIn"
                v-on:enter=""
                @before-enter="beforeEnterroy"
                @enter="enterroy"
                @leave="leaveroy"
                class="row">
            <product-card-component :key="product.id" :data-index="index"
                                    v-bind:product="product" v-for="(product,index) in products">
            </product-card-component>
        </transition-group>
    </section>
</template>

<script>
    export default {
        //name: "ProductsComponent"
        data(){
            return{
                name:"Productos",
                products:[],
                endpoint:"/productos"
            }
        },
        created(){
          this.fetchProducts();
        },
        methods:{
            fetchProducts(){
                axios.get(this.endpoint).then((response)=>{
                    console.log(response.data.data);
                    this.products=response.data.data;
                });
            },
            beforeEnterroy(el){
                el.style.opacity=0;
                el.style.transform="scale(0)";
                el.style.transition="all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)"
            },
            enterroy(el){
                const delay = 200 * el.dataset.index;
                setTimeout(()=>{
                    el.style.opacity=1;
                    el.style.transform="scale(1)";
                },delay)
            },
            leaveroy(el){
                el.style.opacity=0;
                el.style.transform="scale(0)";
            }
        }
    }
</script>

<style scoped>

</style>