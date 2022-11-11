<!--
商品一覧と商品の絞り込み
今回は都道府県、予算、有効期限チェックの3つを設けることによって商品の絞り込みを
行うことに実装しました。
-->

<template>
    <div>
        <div>
            <div>
                <div class="l-productsearch">
                    <h1 class="c-form__title">商品を検索する</h1>
                    <div class="c-serch">
                        <p class="c-search__title">:都道府県で探す</p>
                        <input
                            type="text"
                            v-model="keywords"
                            placeholder="都道府県を入力してください"
                            class="c-search__prefecture"
                        />
                        <p class="c-search__title">:予算内の金額で検索</p>
                        <input
                            type="text"
                            v-model="budgets"
                            class="c-search__prefecture"
                        />
                    </div>
                    <div class="c-serch2">
                        :有効期限チェック
                        <input
                            type="date"
                            :min="new Date().toISOString().split('T')[0]"
                            class="c-search__calender"
                            v-model="Days2"
                        />
                    </div>
                </div>
                <div class="c-exhibitproductlist">
                    <div class="c-productlist">
                        <ul
                            v-if="
                                product.best_by_date >= Days2 &&
                                product.bought <= 0
                            "
                            :key="product.id"
                            v-for="product in filteredProducts"
                            class="c-productlist__items"
                        >
                            <img
                                v-bind:src="product.img_path"
                                class="c-productlist__items__img2"
                            />
                            <div class="c-productlist__items__list">
                                <li>商品No.{{ product.id }}</li>
                                <li>商品名:{{ product.product_name }}</li>
                                <li>お値段:{{ product.price }}円.</li>
                                <div class="c-productlist__items__bottom">
                                    <button
                                        class="c-productlist__items__bottom__area"
                                    >
                                        <a
                                            v-bind:href="`${product.id}}/shopper_productdetail`"
                                            >詳細にいく</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </ul>
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
        //このコードの関数を使う
        filteredProducts: function () {
            const products = [];
            //ここから都道府県を入力したら絞り込めるコードを記述
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
