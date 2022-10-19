<template>
    <div id="app">
        <main>
            <!-- l-exhibitproductlistのところも、そのページようにレイアウトを組み直す必要がある。 -->
            <div class="l-staffmypage__productlist">
                <h1 class="l-shoppermypage__title">これまでに購入された商品</h1>
                <ul class="c-productlist__items" v-for="item in getItems">
                    <div v-if="item.bought >= 1">
                        <li class="c-productlist__items__title">
                            商品No.{{ item.id }}
                        </li>
                        <img
                            v-bind:src="item.img_path"
                            class="c-productlist__items__img"
                        />
                        <p class="c-productlist__items__img__title">
                            購入済み！
                        </p>
                        <div class="c-productlist__items__list">
                            <li>商品名.{{ item.product_name }}</li>
                            <li>お値段.{{ item.price }}円.</li>
                            <div class="c-productlist__items__bottom">
                                <button>
                                    <a
                                        v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                                        class="c-productlist__items__bottom__area"
                                        >詳細にいく</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </main>
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
