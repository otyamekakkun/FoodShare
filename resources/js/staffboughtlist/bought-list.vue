<template>
    <div id="app">
        <h1 class="c-title">コンビニ側が出品した商品の一覧のページです</h1>
        <main>
            <div class="l-exhibitproductlist">
                <div class="l-exhibitproductlist__list">
                    <div class="l-exhibitproductlist__listb">
                        <div>
                            <li v-for="item in getItems">
                                <div v-if="item.bought >= 1">
                                    <div class="c-productlist">
                                        <img
                                            v-bind:src="item.img_path"
                                            width="25%"
                                        />
                                        <div class="c-productlist__sentence">
                                            商品名.{{
                                                item.product_name
                                            }}お値段.{{ item.price }}円.
                                        </div>

                                        <button>
                                            <a
                                                v-bind:href="`${item.id}}/staff_productdetail`"
                                                >詳細にいく</a
                                            >
                                        </button>

                                        <button>
                                            <a
                                                v-bind:href="`${item.id}}/staff_productedit`"
                                                >商品を編集する</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </li>
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
                products: "", //からのデータを用意する。
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
    },
    mounted() {
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>

<!-- 
コンポーネントのpropsでデータを渡す処理をすれば良い

 -->
