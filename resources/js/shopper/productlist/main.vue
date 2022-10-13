<template>
    <div>
        <div>
            {{ kakuto() }}
            <product-list
                :products="this.products"
                :days="this.days"
                :kakuto="kakuto"
            ></product-list>
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
            products: {}, //axiosから取得してきたデータを格納する
        };
    },

    methods: {
        days: function () {
            const date = new Date();
            const Date = date.toLocaleDateString();
            return Date;
        },

        kakuto: function () {
            const c = new Date();
            const z = c.toLocaleDateString();
            return z;
        },
    },

    mounted() {
        const url = "/haiki/index1";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
