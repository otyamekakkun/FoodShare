<template>
    <div>
        <!-- {{ check() }} -->

        <div id="app">
            <!--  -->
            <ul>
                <!-- リストで表示します。 -->
                <li v-for="(fruit, index) in list" v-bind:key="fruit.id">
                    ID:{{ fruit.id }} {{ fruit.name }} 価格:{{ fruit.price }}
                    <!-- 削除ボタン -->
                    <button v-on:click="deleteFruit(index)">削除</button>
                </li>
            </ul>
        </div>

        <!-- 
これに基づいて商品検索都道府県機能を作る
 -->

        <div>
            <input type="text" v-model="keyword" />
            <table>
                <tr v-for="user in filteredUsers" :key="user.id">
                    <td v-text="user.id"></td>
                    <td v-text="user.name"></td>
                    <td v-text="user.email"></td>
                </tr>
            </table>
        </div>

        <div>
            <input type="text" v-model="keyword2" />
            <table>
                <tr v-for="product in filteredProducts" :key="product.id">
                    <td v-text="product.id"></td>
                    <td v-text="product.product_name"></td>
                    <td v-text="product.prefecture"></td>
                </tr>
            </table>
        </div>

        <!-- {{ fiilterdList() }} -->
        <!-- 商品検索一覧 
        基本的にチェックボックスの値の情報を受け渡す。
        並び替えのイベントにもきをつける
        -->
        <!-- {{ drill() }} -->
        <input v-on:click="kabo = !kabo" type="checkbox" />
        <Transition name="fade">
            <p v-if="kabo">
                100
                {{ drills() }}
            </p>
            <p v-else="kabo">こちらはかぼちゃお化けです</p>
        </Transition>

        <!-- 3つ以上の実験 -->

        <!-- 実験 
        <select v-model="checktest">
            <option value="4">価格の範囲を指定する</option>
            <option value="1">100円以下を表示する</option>
            <option value="2">500円以下を表示する</option>
            <option value="3">1000円以下を表示する</option>
        </select>
        <div v-if="checktest >= 4">絞り込みなし</div>
        <div v-if="checktest >= 3 < 4">1000円</div>
        <div v-if="checktest >= 2 < 3">500円以下</div>

        <div v-if="checktest >= 1 < 2">100円以下</div>
-->
        <Productheaders
            v-bind:check1="check1"
            v-bind:prefecturecheck="prefecture"
            v-bind:bestdaycheck="bestdaycheck"
            v-on:bestdaycheck=""
        ></Productheaders>
        <!-- 商品一覧 -->
        <Product :product="this.products"></Product>

        <!-- 
受け渡しは考えないといけない
            v-for="(item, index) in index"
            v-bind:item="item"
            v-bind:id="index + 1"
            v-bind:key="index"
 -->
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
            //これは実験
            products: [],

            list: [
                { id: 1001, name: "リンゴ", price: 100 },
                { id: 1002, name: "バナナ", price: 200 },
                { id: 1003, name: "オレンジ", price: 300 },
            ],
            keyword: "", //実験
            keyword2: "", //都道府県

            users: [
                {
                    id: 1,
                    name: "鈴木太郎",
                    email: "suzukitaro@example.com",
                },
                {
                    id: 2,
                    name: "佐藤二郎",
                    email: "satoujiro@example.com",
                },
                {
                    id: 3,
                    name: "田中三郎",
                    email: "tanakasaburo@example.com",
                },
                {
                    id: 4,
                    name: "山本四郎",
                    email: "yamamotoshiro@example.com",
                },
                {
                    id: 5,
                    name: "高橋五郎",
                    email: "takahashigoro@example.com",
                },
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
        filteredUsers: function () {
            var users = [];

            for (var i in this.users) {
                var user = this.users[i];

                if (
                    user.name.indexOf(this.keyword) !== -1 ||
                    user.email.indexOf(this.keyword) !== -1
                ) {
                    users.push(user);
                }
            }

            return users;
        },
        filteredProducts: function () {
            var products = [];

            for (var i in this.products) {
                var product = this.products[i];

                if (product.prefecture.indexOf(this.keyword2) !== -1) {
                    products.push(product);
                }
            }
            return this.products;
        },
    },

    methods: {
        //ここは実験的なコード
        //開始位置を指定
        drill2() {
            const result1 = this.products.slice(0, 1);
            return result1;
        },

        // 削除ボタンが押下された時に呼び出されます。
        deleteFruit: function (index) {
            // 指定されたindexの要素を1つ削除します。
            this.list.splice(index, 1);
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
