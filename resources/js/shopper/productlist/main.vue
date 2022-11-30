<template>
    <div>
        <div>
            <product-list :products="this.products"></product-list>
        </div>
    </div>
</template>
<script>
import ProductList from "./component/product-list.vue";
import axios from "axios";
export default {
    components: {
        ProductList,
    },
    data: function () {
        return {
            products: {},
        };
    },
    async mounted() {
        const response = await axios.get("/haiki/index1");
        this.products = response.data;
    },
};
</script>
