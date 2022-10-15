<template>
    <div>
        <div>
            <div>
                <p>都道府県を入力してください</p>
                <input type="text" v-model="keywords" />
                <p>購入されたい商品の予算内の金額を入力してください</p>
                <input type="text" v-model="budgets" />円以内で買えるもの
                <p>有効期限チェック</p>
                <p>
                    ご希望の日付を入力してください<br />(入力された日付に対して,<br />賞味期限が有効なものだけ表示します)
                </p>
                <input
                    type="date"
                    :min="new Date().toISOString().split('T')[0]"
                    class="l-productexhibitform__typo3"
                    v-model="Days2"
                />
                <ul>
                    <li v-for="product in filteredProducts" :key="product.id">
                        <div v-if="product.best_by_date >= Days2">
                            <div v-if="product.bought >= 1">
                                <img
                                    v-bind:src="product.img_path"
                                    class="c-productlist__items__img"
                                />
                                <p class="c-productlist__items__img__title">
                                    購入済み！
                                </p>
                            </div>

                            <div v-if="product.bought <= 0">
                                <img
                                    v-bind:src="product.img_path"
                                    class="c-productlist__items__img2"
                                />
                            </div>

                            <div class="c-productlist__items__list">
                                <li>商品No.{{ product.id }}</li>
                                <li>商品名:{{ product.product_name }}</li>
                                <li>お値段:{{ product.price }}円.</li>
                            </div>
                        </div>
                    </li>
                </ul>

                <!--                     <ul class="c-productlist__items" v-for="item in getItems">
                        購入されたら商品にlabelを付け足す機能
                        <li class="c-productlist__items__title">
                            商品No.{{ item.id }}
                        </li>

                        <div v-if="item.bought >= 1">
                            <img
                                v-bind:src="item.img_path"
                                class="c-productlist__items__img"
                            />
                            <p class="c-productlist__items__img__title">
                                購入済み！
                            </p>
                        </div>

                        <div v-if="item.bought <= 0">
                            <img
                                v-bind:src="item.img_path"
                                class="c-productlist__items__img2"
                            />
                        </div>

                        <div class="c-productlist__items__list">
                            <li>商品No.{{ item.id }}</li>
                            <li>商品名:{{ item.product_name }}</li>
                            <li>お値段:{{ item.price }}円.</li>
                            <div class="c-productlist__items__bottom">
                                <button
                                    class="c-productlist__items__bottom__area"
                                >
                                    <a
                                        v-bind:href="`${item.id}}/staff_productdetail`"
                                        >詳細にいく</a
                                    >
                                </button>
                                <div v-if="item.bought <= 0">
                                    <button
                                        class="c-productlist__items__bottom__area"
                                    >
                                        <a
                                            v-bind:href="`${item.id}}/staff_productedit`"
                                            >商品を編集</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </ul>
 -->
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["products"], //main.vueからデータの中身が入っている。

    //子コンポーネントを登録する
    //コンポーネントが持つデータ
    data: function () {
        return {
            keywords: "", //都道府県
            Days2: "", //入力された日付がデータとして入ります
            budgets: 10000, //デフォルトで10000円と打ち込まれている。
            //出品した都道府県で絞り込む
            prefecturecheck: false,
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
