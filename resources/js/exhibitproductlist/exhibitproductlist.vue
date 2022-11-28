<!-- 
exhibitproductlist 
商品を出品したらそのコンビニ専用で商品がリスト化されるものを作成。
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
                <h1 class="">これまでに出品された商品(詳細)</h1>
            </div>
            <!-- 
c-exhibitproductlist
c-porductlist 
c-productlist__items
c-productlist__items__title
c-productlist__items__img
c-productlist__items__img__title
c-productlist__items__list
c-productlist__items__bottom
c-productlist__items__bottom__area
のsassは消去する
 -->
            <!-- 
編集で削除されたらきちんと商品が編集される

  -->
            <div class="c-staffmypagelistarea">
                <div
                    class="c-staffmypagelistarea__area"
                    v-for="item in getItems"
                >
                    <!-- <ul class="c-productlist__items" v-for="item in getItems"> -->
                    <div class="c-staffmypagelistarea__list">
                        <div v-if="item.bought >= 1">
                            <img
                                v-bind:src="item.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                            <p class="c-staffmypagelistarea__list__bought">
                                購入済み！
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
                                {{ item.price }}円.
                            </li>
                            <!-- <div class="c-productlist__items__bottom"> -->
                            <!-- <button class="c-productlist__items__bottom__area"> -->
                            <a
                                v-bind:href="`${item.id}}/staff_productdetail`"
                                class="c-staffmypagelistarea__list__a"
                                >詳細を見る↗︎</a
                            >
                            <!-- </button> -->
                            <div v-if="item.bought <= 0">
                                <!-- 
                                <button
                                    class="c-productlist__items__bottom__area"
                                >
                                 -->
                                <a
                                    v-bind:href="`${item.id}}/staff_productedit`"
                                    class="c-staffmypagelistarea__list__a"
                                    >商品を編集↗︎</a
                                >
                                <!-- </button> -->
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- </ul> -->
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
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
