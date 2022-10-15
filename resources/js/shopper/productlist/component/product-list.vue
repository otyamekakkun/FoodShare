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
                <table>
                    <tr v-for="product in filteredProducts" :key="product.id">
                        <div v-if="product.best_by_date >= Days2">
                            <div v-if="product.bought >= 1">
                                <td v-text="product.id"></td>
                                <td v-text="product.product_name"></td>
                                <td v-text="product.price"></td>
                                円

                                <td v-text="product.prefecture"></td>
                                <td v-text="product.best_by_date"></td>
                                <img
                                    v-bind:src="product.img_path"
                                    width="25%"
                                />

                                <button>
                                    <a
                                        v-bind:href="`/haiki/${product.id}/shopper_productdetail`"
                                        >商品の詳細をみる</a
                                    >
                                </button>
                            </div>
                        </div>
                    </tr>
                </table>
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
