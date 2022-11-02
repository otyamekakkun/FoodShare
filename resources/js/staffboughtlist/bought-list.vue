<template>
    <div>
        <div class="c-exhibitproductlist">
            <div class="c-productlist">
                <bought-listvue
                    :products="this.products"
                    :getItems="this.getItems"
                ></bought-listvue>
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
    </div>
</template>

<script>
//axiosはデータベースの情報を取得する
//vue-js-paginateはvue側で簡単にページネーションを実装するためのライブラリ。
import axios from "axios";
import VueJsPaginate from "vuejs-paginate";
import boughtlistvue from "./component/boughtlistcomponent";
export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
        "bought-listvue": boughtlistvue,
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
        const url = "/haiki/index5";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
