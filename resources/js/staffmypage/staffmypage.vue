<template>
    <div id="app">
        <main>
            <div class="l-exhibitproductlist">
                <h1 class="l-shoppermypage__title">
                        これまでに出品された商品
                    </h1>
                <ul class="c-productlist__items" v-for="item in getItems">
                    <li class="c-productlist__items__title">
                            商品No.{{ item.id }}
                        </li>
                        <div v-if="item.bought >= 1">
                        <img v-bind:src="item.img_path"class="c-productlist__items__img"/>
                            <p class="c-productlist__items__img__title">
                                購入済み！
                            </p>
</div>
<div v-if="item.bought<=0">
    <img v-bind:src="item.img_path" class="c-productlist__items__img2"/>
</div>
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
                            <div v-if="item.bought<=0">
                            <button  class="c-productlist__items__bottom__area"
>
                                <a
                                    v-bind:href="`haiki/${item.id}}/staff_productedit`"
                                    >商品を編集する</a
                                >
                            </button>
                        </div>
                            </div>
                        </div>
                </li>
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
