<template>
    <div id="app">
        <li v-for="item in getItems">
            <div v-if="item.bought >= 1">
                <div class="c-productlist">
                    <img v-bind:src="item.img_path" width="25%" />
                    <h1>購入済み</h1>
                    <div class="c-productlist__sentence">
                        <li>商品No.{{ item.id }}</li>
                        <li>商品名.{{ item.product_name }}</li>
                        <li>お値段.{{ item.price }}円.</li>
                        <button>
                            <a v-bind:href="`${item.id}}/staff_productdetail`"
                                >詳細にいく</a
                            >
                        </button>

                        <button>
                            <a v-bind:href="`${item.id}}/staff_productedit`"
                                >商品を編集する</a
                            >
                        </button>
                    </div>
                </div>
            </div>
        </li>
        <div>
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
</template>
<script>
import axios from "axios";
import VueJsPaginate from "vuejs-paginate";

export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
    },
    props: ["pro"],

    data: function () {
        {
            return {
                products: [], //からのデータを用意する。
                imageUrl: "https://via.placeholder.com/300x200?text=Image-1",
                currentPage: 1,
                perPage: 5,
            };
        }
    },
    computed: {
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

        mounted() {
            const url = "/haiki/index3";
            axios.get(url).then((response) => (this.products = response.data));
        },
    },
};
</script>
