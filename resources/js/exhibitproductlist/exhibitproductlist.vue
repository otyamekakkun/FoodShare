<!-- 
    スタッフ側商品詳細画面
 -->
<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea__title1">
                <h1 class="c-staffmypagelistarea__title1__text">
                    出品された商品(詳細リスト)
                </h1>
            </div>
            <div class="c-staffmypagelistarea">
                <div
                    class="c-staffmypagelistarea__area"
                    v-for="item in getItems"
                >
                    <div class="c-staffmypagelistarea__list">
                        <div v-if="item.bought >= 1">
                            <img
                                v-bind:src="item.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                            <p class="c-staffmypagelistarea__list__bought">
                                Sold Out
                            </p>
                        </div>

                        <div v-if="item.bought <= 0">
                            <img
                                v-bind:src="item.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                        </div>

                        <div class="c-staffmypagelistarea__text">
                            <li class="c-staffmypagelistarea__list__name">
                                {{ item.product_name }}
                            </li>
                            <li class="c-staffmypagelistarea__list__price">
                                {{ item.price }}円
                            </li>
                            <a
                                v-bind:href="`${item.id}}/staff_productdetail`"
                                class="c-staffmypagelistarea__list__a"
                                >詳細を見る↗︎</a
                            >
                            <div v-if="item.bought <= 0">
                                <a
                                    v-bind:href="`${item.id}}/staff_productedit`"
                                    class="c-staffmypagelistarea__list__a"
                                    >商品を編集↗︎</a
                                >
                            </div>
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
                perPage: 8,
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
        const response = await axios.get("/haiki/index3");
        this.products = response.data;
    },
};
</script>
