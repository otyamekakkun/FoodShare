<!-- ここまでが今までの処理 -->
<template>
    <div>
        <div class="c-exhibitproductlist">
            <div class="c-productlist">
                <shoppermypage-view
                    :products="this.products"
                    :getItems="this.getItems"
                ></shoppermypage-view>
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
                perPage: 2,
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
