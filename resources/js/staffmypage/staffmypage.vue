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
    //  props: ["pro", "getitems"],
    components: {
        mypageproduct: mypageproduct,
    },
    data: function () {
        {
            return {
                products: [], //からのデータを用意する。
                currentPage: 1,
                perPage: 5,
            };
        }
    },
    computed: {
        /*
ページネーションの仕組みを利用して最新５件だけ表示されるシステムを構築した。
出品した商品最新5件なのでreverse()メソッドで呼び出す配列の順序を逆にした。
*/
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

    mounted() {
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
