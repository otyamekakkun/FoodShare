<template>
    <div>
        <div>
            <div>
                <p>都道府県を入力してください</p>
                <input type="text" v-model="keywords" />
                <p>購入されたい商品の予算内の金額を入力してください</p>
                <input type="text" v-model="budgets" />円以内で買えるもの
                <P>現在賞味期限よりも切れていないものだけを表示する</P>
                <input
                    type="date"
                    :min="new Date().toISOString().split('T')[0]"
                    class="l-productexhibitform__typo3"
                    v-model="Days2"
                />
                <table>
                    <tr v-for="product in filteredProducts" :key="product.id">
                        <div v-if="product.best_by_date >= Days2">
                            <td v-text="product.id"></td>
                            <td v-text="product.product_name"></td>
                            <td v-text="product.price"></td>
                            円
                            <td v-text="product.prefecture"></td>
                            <td v-text="product.best_by_date"></td>
                            <img v-bind:src="product.img_path" width="25%" />
                            <button>
                                <a
                                    v-bind:href="`/haiki/${product.id}/shopper_productdetail`"
                                    >商品の詳細をみる</a
                                >
                            </button>
                        </div>
                    </tr>
                </table>
            </div>
        </div>

        <!-- コンポーネントで渡すもの -->
        <Productheaders></Productheaders>
        <!-- 商品一覧 -->
        <Product></Product>
        <!-- コンポーネントで渡すものここまで -->
    </div>
</template>
<script>
import Productheaders from "./product-header.vue";
import Product from "./product.vue";

export default {
    props: ["products"], //main.vueからデータの中身が入っている。

    //子コンポーネントを登録する
    components: {
        Productheaders,
        Product,
    },
    //コンポーネントが持つデータ
    data: function () {
        return {
            products: [],

            keywords: "", //都道府県
            Days2: "",

            //これは実験
            budget: 10000,
            budgets: 10000,
            //アイテムのデータを一覧で持たせます。
            //この中のpriceを基準として表示する商品を選びます。

            //価格で絞り込む
            check1: false,
            //出品した都道府県で絞り込む
            prefecturecheck: false,
            //賞味期限で絞り込む
            bestdaycheck: false,
        };
    },

    computed: {
        //このコードの関数を使う
        filteredProducts: function () {
            var products = [];
            //ここから都道府県を入力したら絞り込めるコードを記述
            for (var i in this.products) {
                var product = this.products[i];
                // console.log(product);

                if (
                    product.prefecture.indexOf(this.keywords) !== -1

                    // product.best_by_date.indexOf(this.Days) >= this.Days
                ) {
                    if (!this.Days) {
                        products.push(product);
                    }
                    // products.push(product);
                }

                /*
                if (products.best_by_date >= a) {
                }
            */
                console.log(this.Days);
                console.log(products);
                console.log(product.best_by_date);
            }

            //都道府県コードここまで
            // return products;
            if (products) {
                return products.filter(function (el) {
                    return el.price <= this.budgets;
                }, this);
            }
        },
    },

    methods: {
        //ここは実験的なコード
        /*
days4(){
    Days: new Date().toLocaleDateString, //日付入力
}
*/
        //開始位置を指定
        drill2() {
            const result1 = this.products.slice(0, 1);
            return result1;
        },

        drill3() {
            return this.Days2;
        },

        drill() {
            const app = this.products;
            const best = this.bestdaycheck;
            console.log(app);
            console.log(best); //とただスイッチを押しても無限でfalseしか帰ってこない

            if (best) {
                const a = 10;
                const b = 15;
                return a + b;

                //公式１trueなら値を比較する処理を記述する
            }
        },

        drills() {
            const a = 10;
            const b = 15;
            return a + b;
        },
        check() {
            console.log(this.checktest);
        },

        //検索条件でリストを返すプロパティ
    },
};
</script>
