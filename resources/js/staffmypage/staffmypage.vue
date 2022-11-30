<!--   
    出品した商品のマイページ
 -->

<template>
    <div>
        <mypageproduct
            :products="this.products"
            :getItems="this.getItems"
        ></mypageproduct>
    </div>
</template>

<script>
import axios from "axios";
import mypageproduct from "./component/mypageproduct.vue";
export default {
    components: {
        mypageproduct,
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
            return this.products.reverse().slice(start, end);
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
        const response = await axios.get("/haiki/index3");
        this.products = response.data;
    },
};
</script>
