<!--
商品一覧と商品の絞り込み
今回は都道府県、予算、有効期限チェックの3つを設けることによって商品の絞り込みを
行うことに実装しました。
-->
<!-- 
l-productsearch
c-serch
c-search__title
c-serch2
c-search__prefecture
c-search__calender

 -->
<template>
    <div>
        <div>
            <div>
                <!-- <div class="l-productsearch"> -->
                <h1 class="">商品を検索する</h1>
                <!-- <div class="c-serch"> -->
                <p class="">:都道府県で探す</p>
                <input
                    type="text"
                    v-model="keywords"
                    placeholder="都道府県を入力してください"
                    class=""
                />
                <p class="">:予算内の金額で検索</p>
                <input type="text" v-model="budgets" class="" />
                <!-- </div> -->
                <div class="">
                    :有効期限チェック
                    <input
                        type="date"
                        :min="new Date().toISOString().split('T')[0]"
                        class=""
                        v-model="Days2"
                    />
                </div>
                <!-- </div> -->
                <div class="c-staffmypagelistarea">
                    <div
                        v-if="
                            product.best_by_date >= Days2 && product.bought <= 0
                        "
                        :key="product.id"
                        v-for="product in filteredProducts"
                        class="c-staffmypagelistarea__area"
                    >
                        <div class="c-staffmypagelistarea__list">
                            <img
                                v-bind:src="product.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                            <div class="c-staffmypagelistarea__text">
                                <li class="c-staffmypagelistarea__list__name">
                                    {{ product.product_name }}
                                </li>
                                <li class="c-staffmypagelistarea__list__price">
                                    {{ product.price }}円.
                                </li>
                                <a
                                    v-bind:href="`${product.id}}/shopper_productdetail`"
                                    class="c-staffmypagelistarea__list__a"
                                    >詳細を見る↗︎</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["products"], //main.vueからデータの中身が入っている。
    data: function () {
        return {
            keywords: "", //都道府県
            Days2: "", //入力された日付がデータとして入ります
            budgets: 10000, //デフォルトで10000円と打ち込まれている。
        };
    },
    computed: {
        filteredProducts: function () {
            const products = [];
            for (var i in this.products) {
                var product = this.products[i];
                if (product.prefecture.indexOf(this.keywords) !== -1) {
                    if (!this.Days) {
                        products.push(product);
                    }
                }
            }
            if (products) {
                return products.filter(function (el) {
                    return el.price <= this.budgets;
                }, this);
            }
        },
    },
};
</script>
