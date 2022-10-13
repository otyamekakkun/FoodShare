<template>
    <div>
        <div>
            {{ days4() }}
            {{ this.kakuto() }}
            {{ this.a }}
            {{ this.b }}
            <p>こんにちは</p>
            実験
            <input
                type="date"
                :min="new Date().toISOString().split('T')[0]"
                class="l-productexhibitform__typo3"
                v-model="Days2"
            />
        </div>

        <div>
            <div v-if="check3">
                <P>現在賞味期限よりも切れていないものだけを表示する</P>
                <input v-on:click="check3 = !check3" type="checkbox" />
                <p>都道府県を入力してください</p>
                <input type="text" v-model="keywords" />
                <p>購入されたい商品の予算内の金額を入力してください</p>
                <input type="text" v-model="budgets" />円以内で買えるもの

                <table>
                    <tr v-for="product in filteredProducts" :key="product.id">
                        <td v-text="product.id"></td>
                        <td v-text="product.product_name"></td>
                        <td v-text="product.price"></td>
                        円
                        <td v-text="product.prefecture"></td>
                        <td v-text="product.best_by_date"></td>
                        <img v-bind:src="product.img_path" width="25%" />
                    </tr>
                </table>
            </div>
            <div v-else="check3">
                <p>期限が切れている商品も含めて表示する</p>
                <input v-on:click="check3 = !check3" type="checkbox" />
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
                {{ Days2 }}

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
                        </div>
                    </tr>
                </table>
            </div>
        </div>

        <input v-on:click="kabo = !kabo" type="checkbox" />
        <Transition name="fade">
            <p v-if="kabo">100</p>
            <p v-else="kabo">こちらはかぼちゃお化けです</p>
        </Transition>

        <Productheaders
            v-bind:check1="check1"
            v-bind:prefecturecheck="prefecture"
            v-bind:bestdaycheck="bestdaycheck"
            v-on:bestdaycheck=""
        ></Productheaders>
        <!-- 商品一覧 -->
        <Product :product="this.products"></Product>
    </div>
</template>
<script>
import Productheaders from "./product-header.vue";
import Product from "./product.vue";

export default {
    props: ["products", "kakuto"], //main.vueからデータの中身が入っている。

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
            check3: true,

            //これは実験
            a: "",
            b: this.kakuto,
            budget: 10000,
            budgets: 10000,
            //アイテムのデータを一覧で持たせます。
            //この中のpriceを基準として表示する商品を選びます。
            items: [
                { id: 0, product: "最新のmac", price: 9000 },
                { id: 1, product: "少し前のmac", price: 8000 },
                { id: 2, product: "昔のmac", price: 7000 },
                { id: 3, product: "ダメなmac", price: 6000 },
                { id: 4, product: "壊れたmac", price: 5000 },
            ],

            //価格で絞り込む
            check1: false,
            //出品した都道府県で絞り込む
            prefecturecheck: false,
            //賞味期限で絞り込む
            bestdaycheck: false,

            //ここからは実験的なコード
            kabo: true,
            checktest: 4,
        };
    },

    computed: {
        //このコードの関数を使う
        filteredProducts: function () {
            var products = [];
            var products2 = [];
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
        days4() {
            const c = new Date();
            const b = c.toLocaleDateString();
            return b;
        },

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
        fiilterdList() {
            const app = this.products; //インスタンスを格納する
            const filterdList = this.products.filter(function (item) {
                //表示判定(true表示する, false表示しない)
                let show = true;
                //検索条件：価格絞り込みチェック１
                if (app.check1) {
                    //価格が百円以上のものなら非表示にする
                    if (item.price > 100) {
                        show = false;
                    }
                    //価格が500円以上のものなら非表示にする
                    if (item.price > 500) {
                        show = false;
                    }
                    //価格が1000円以上のものなら非表示にする

                    if (item.price > 1000) {
                        show = false;
                    }
                }

                //価格の絞り込み終わり
                //検索条件：賞味期限（現在時刻よりも有効期限が切れていた時に処理を行う

                if (app.bestdaycheck) {
                    //現在時刻よりも有効期限が切れたいらた、非表示にする
                    const nowdate = Date();
                    const bestdate = "";
                    if (nowdate > bestdate) {
                        show = false;
                    }
                }
                //都道府県 値が入っているかどうかを判別するnullなら、絞り込みを行わない
                if (app.prefecturecheck) {
                    const a = "データベースに入っている都道府県";
                    const b = "選択した都道府県";
                    if (a !== b) {
                        show = false;
                    }
                }
                //チェックボックスの表示判定を返す
                return show;
            });
            return filterdList;
        },
    },
};
</script>
<!-- 
スイッチ分のtrueかfalseはtemplate内で記述することにする。
つまりif文が発生したときの際のみscriptで記述することにする

さばいる形式で生き残るかどうか










 -->
