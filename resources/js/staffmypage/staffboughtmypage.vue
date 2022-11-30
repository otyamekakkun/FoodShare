<!-- 
    コンビニスタッフマイページの購入された商品一覧を写すもの
 -->

<template>
    <div>
        <mypagebought
            :products="this.products"
            :getItems="this.getItems"
        ></mypagebought>
    </div>
</template>

<script>
import axios from "axios";
import mypagebought from "./component/boughtmypage.vue";
export default {
    components: {
        mypagebought,
    },
    data: function () {
        {
            return {
                products: [],
                currentPage: 1,
                perPage: 5,
            };
        }
    },
    computed: {
        getItems: function () {
            let start = (this.currentPage - 1) * this.perPage;
            let end = this.currentPage * this.perPage;
            return this.products.slice(start, end);
        },
        getPaginateCount: function () {
            return Math.ceil(this.products.length / this.perPage);
        },
    },
    methods: {
        paginateClickCallback: function (pageNum) {
            this.currentPage = Number(pageNum);
        },
    },

    async mounted() {
        const response = await axios.get("/haiki/index5");
        this.products = response.data;
    },
};
</script>
