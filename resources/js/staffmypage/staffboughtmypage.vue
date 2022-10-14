<template>
    <div id="app">
        <li v-for="item in getItems">
            <div v-if="item.bought >= 1">
                <div class="c-productlist">
                    <h1>購入済み</h1>
                    <img v-bind:src="item.img_path" width="25%" />
                    <div class="c-productlist__sentence">
                        <li>商品No.{{ item.id }}</li>
                        <li>商品名.{{ item.product_name }}</li>
                        <li>お値段.{{ item.price }}円.</li>
                        <button>
                            <a
                                v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                                >詳細にいく</a
                            >
                        </button>
                        <button>
                            <a
                                v-bind:href="`haiki/${item.id}}/staff_productedit`"
                                >商品を編集する</a
                            >
                        </button>
                    </div>
                </div>
            </div>
        </li>
    </div>
</template>
<script>
import axios from "axios";

export default {
    props: ["pro"],

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
        compare: function (a, b) {
            let r = 0;
            if (a.update_at) {
                r = -1;
            } else if (a.update_at > b.update_at) {
                return r;
            }
        },
    },

    mounted() {
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
