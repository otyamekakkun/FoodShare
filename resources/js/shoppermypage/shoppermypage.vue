<!-- staffmypageの購入された商品を写す処理。 -->
<template>
    <div id="app">
        <main>
            <!-- ここから共通しているのでc-に書き換える。 -->
            <div class="c-exhibitproductlist">
                <h1 class="c-mypagemenu__title">これまでに購入された商品</h1>
                <ul v-for="item in getItems">
                    <div v-if="item.bought >= 1">
                        <div class="c-productlist__items">
                            <!-- 購入されたら商品にlabelを付け足す機能 -->
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
                                <li>商品名:{{ item.product_name }}</li>
                                <li>お値段:{{ item.price }}円.</li>
                                <div class="c-productlist__items__bottom">
                                    <button
                                        class="c-productlist__items__bottom__area"
                                    >
                                        <a
                                            v-bind:href="`${item.id}/shopper_productdetail`"
                                            >詳細にいく</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
                <div class="c-paginate">
                    <vuejs-paginate
                        :page-count="getPaginateCount"
                        :prev-text="'<'"
                        :next-text="'>'"
                        :click-handler="paginateClickCallback"
                        :container-class="'pagination justify-content-center'"
                        :page-class="'page-item'"
                        :page-link-class="'page-link'"
                        :prev-class="'page-item'"
                        :prev-link-class="'page-link'"
                        :next-class="'page-item'"
                        :next-link-class="'page-link'"
                        :first-last-button="true"
                        :first-button-text="'<<'"
                        :last-button-text="'>>'"
                    ></vuejs-paginate>
                </div>
            </div>
        </main>
    </div>
</template>
<script>
import axios from "axios";
import VueJsPaginate from "vuejs-paginate";

export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
    },

    data: function () {
        {
            return {
                products: [], //からのデータを用意する。
                currentPage: 1,
                perPage: 10,
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
        count: function () {
            console.log($route.path);
        },
        paginateClickCallback: function (pageNum) {
            this.currentPage = Number(pageNum);
        },
    },
    mounted() {
        const url = "/haiki/index4";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
