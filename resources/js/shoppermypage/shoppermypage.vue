<template>
    <!-- <div> -->
    <!-- <div class="c-exhibitproductlist"> -->

    <!-- 

            <div class="c-staffmypagelistarea__title1">
                <h1 class="">これまでに購入された商品(一覧)</h1>
            </div>




         -->
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea__title1">
                <h1 class="">これまでに購入された商品(一覧)</h1>
            </div>

            <!-- <div class="c-staffmypagelistarea"> -->
            <!-- <div class="c-staffmypagelistareaarea"> -->
            <shoppermypage-view
                :products="this.products"
                :getItems="this.getItems"
            ></shoppermypage-view>
            <div class="c-staffmypagelistarea">
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
            <!-- </div> -->
            <!-- </div> -->
        </main>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
</template>
<script>
import axios from "axios";
import VueJsPaginate from "vuejs-paginate";
import shoppermypagecomponentVue from "./component/shoppermypagecomponent.vue";
export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
        "shoppermypage-view": shoppermypagecomponentVue,
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
