<template lang="html">
    <!--<p>Mi primer componente {{name}}</p>-->
    <section>
        <material-transition-group tag="div" class="row">
            <product-card-component :key="product.id" :data-index="index"
                                    v-bind:product="product" v-for="(product,index) in products">
            </product-card-component>
        </material-transition-group>
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
            }
        }
    }
</script>

<style scoped>

</style>