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
        mypagebought: mypagebought,
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
ページネーションの仕組みを利用して最新５件だけ表示されるシステムを構築しました。
商品編集したらupdate_atの時刻が変わってしまい、購入された最新5件が変わってしまう可能性がありそうが、そもそも購入された時点で
商品を編集できないようにプログラムされているので、update_atで比較して最新５件を表示することを実装しました。
*/
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

    mounted() {
        const url = "/haiki/index5";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
