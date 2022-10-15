<template>
    <div id="app">
        <h1 class="c-title">コンビニ側が出品した商品の一覧のページです</h1>
        <main>
            <div class="l-exhibitproductlist">
                <div class="c-productlist">
                    <ul class="c-productlist__items" v-for="item in getItems">
                        <div v-if="item.bought >= 1">
                            <img
                                v-bind:src="item.img_path"
                                class="c-productlist__items__img"
                            />
                            <p class="c-productlist__items__img__title">
                                購入されました！
                            </p>
                        </div>

                        <div v-if="item.bought <= 0">
                            <img
                                v-bind:src="item.img_path"
                                class="c-productlist__items__img2"
                            />
                        </div>

                        <li>商品No.{{ item.id }}</li>
                        <li>商品名:{{ item.product_name }}</li>
                        <li>お値段:{{ item.price }}円.</li>
                        <li>
                            <button>
                                <a
                                    v-bind:href="`${item.id}}/staff_productdetail`"
                                    >詳細にいく</a
                                >
                            </button>
                        </li>
                        <div v-if="item.bought <= 0">
                            <li>
                                <button>
                                    <a
                                        v-bind:href="`${item.id}}/staff_productedit`"
                                        >商品を編集する</a
                                    >
                                </button>
                            </li>
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
            </div>
        </main>
    </div>
</template>
<script>
//axiosはデータベースの情報を取得する
//vue-js-paginateはvue側で簡単にページネーションを実装するためのライブラリ。
import axios from "axios";
import VueJsPaginate from "vuejs-paginate";

export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
    },
    data: function () {
        {
            return {
                products: "", //からのデータを用意する。
                currentPage: 1,
                perPage: 10,
            };
        }
    },
    computed: {
        //getItemsはページネーションの算出を行う。１ページ毎に10カラム取得できるようにする
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
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
