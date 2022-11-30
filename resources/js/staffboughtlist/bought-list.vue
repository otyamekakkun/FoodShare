<!-- 
bought-list 
商品が購入されたらそのコンビニ専用で商品がリスト化されるものを作成。
1ページに10商品毎記載されてそれ以上になるとページネーションが発動される。

(コンポーネント設計をするとエラーが出る件について)
このコードをコンポーネントした時、webpack.mix.jsの方でコンパイルしたときではエラーは表示されず無事に表示されるが
同様のコードでwebpack+babelの方でコンパイルした時エラーが出るという現象になってしまいました
コンポーネントしていない状態ではエラーは表示されないです。
エラーの原因追求ができず、今回webpack+babelの方で開発環境をしないといけないので、コンポーネントされていないコードを
添付することにしました。
 -->

<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea__title1">
                <h1 class="">これまでに購入された商品(詳細)</h1>
            </div>

            <div class="c-staffmypagelistarea">
                <!-- <div class="c-staffmypagelistarea__area"> -->
                <div
                    v-for="item in getItems"
                    class="c-staffmypagelistarea__area"
                    v-if="item.bought >= 1"
                >
                    <!-- <div v-if="item.bought >= 1"> -->
                    <div class="c-staffmypagelistarea__list">
                        <!-- 購入されたら商品にlabelを付け足す機能 -->

                        <img
                            v-bind:src="item.img_path"
                            class="c-staffmypagelistarea__list__img"
                        />
                        <p class="c-staffmypagelistarea__list__bought">
                            購入済み！
                        </p>

                        <div class="c-staffmypagelistarea__text">
                            <!-- <li>商品No.{{ item.id }}</li> -->
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
        const url = "/haiki/index5";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
