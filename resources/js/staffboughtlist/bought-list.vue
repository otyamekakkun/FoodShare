<!-- 
スタッフ側 購入された商品一覧を写すもの
 -->
<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea__title1">
                <h1 class="">これまでに購入された商品(詳細)</h1>
            </div>
            <div class="c-staffmypagelistarea">
                <div
                    v-for="item in getItems"
                    class="c-staffmypagelistarea__area"
                    v-if="item.bought >= 1"
                >
                    <div class="c-staffmypagelistarea__list">
                        <img
                            v-bind:src="item.img_path"
                            class="c-staffmypagelistarea__list__img"
                        />
                        <p class="c-staffmypagelistarea__list__bought">
                            Sold Out
                        </p>

                        <div class="c-staffmypagelistarea__text">
                            <li class="c-staffmypagelistarea__list__name">
                                {{ item.product_name }}
                            </li>
                            <li class="c-staffmypagelistarea__list__price">
                                お値段:{{ item.price }}円
                            </li>
                            <a
                                v-bind:href="`${item.id}}/staff_productdetail`"
                                class="c-staffmypagelistarea__list__a"
                                >詳細見る↗︎</a
                            >
                        </div>
                    </div>
                </div>
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
                products: "",
                currentPage: 1,
                perPage: 10,
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

    async mounted() {
        const response = await axios.get("/haiki/index5");
        this.products = response.data;
    },
};
</script>
