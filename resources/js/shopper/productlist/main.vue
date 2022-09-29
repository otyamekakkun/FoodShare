<!-- 
    ここでjson形式で情報を取得したい。これをもとに表示していきたいのでおそらく違う可能性がある
 -->
<!-- usesの値はvueで使う処理なので自室なんでも良い -->

<!--  -->
<template>
    <div id="app">
        <!-- 
        <p>{{ countUp() }}</p>
        <product val="これ"></product>

        <div v-for="product in products">
            <td v-text="product.price"></td>
            <h1 v-if="product.price"></h1>
        </div>
    </div>
-->
        <!-- <div>{{ countUp }}</div> -->
        <!-- <p>{{ search() }}</p> -->

        <h1>商品一覧</h1>
        <div class="search">
            検索結果
            <span class="">?件</span>
        </div>
        <div class="">
            <!-- ここにcheckboxを忍ばせる 
            概要として
            賞味期限
            価格
            出品しているコンビニの都道府県と絞りこむ。
            -->
            <!-- 価格について -->
            <select class="">
                <option value="0">価格の範囲を指定する</option>
                <option value="1">100円以下を表示する</option>
                <option value="2">500円以下を表示する</option>
                <option value="3">1000円以下を表示する</option>
            </select>
            <!-- 賞味期限が有効期限いないかどうかを確かめる -->
            <input
                type="checkbox"
                v-model="check1"
            />賞味期限以内の商品を表示する
            <!-- 都道府県の情報を取得する -->

            <select class="">
                <option value="0">出品している都道府県を絞りこむ</option>
                <option value="1">北海道</option>
                <option value="2">青森</option>
                <option value="3">岩手</option>
                <!-- おそら狗でーたべーすの中に情報を取得すると思う。 -->
            </select>
        </div>

        <!-- ここまでが商品の検索するheader部分に当たる。 -->
        <!-- <p>{{ countdown() }}</p> -->
        <!-- ここで色々なものを表示するための記述する -->
    </div>
</template>
<script>
import axios from "axios";
/*
import productheader from "./component/product-header.vue";
import productlist from "./component/product-list.vue";
*/

import product from "./component/product.vue";
//ここでエラーが発生していたコンポーネント自体読み取れていないということなのでここは読み取れている。
export default {
    data: function () {
        {
            //データは言わば変数みたいなもの色々なところで使い回せる
            return {
                //ここでの処理はチェックボタンが押されているかどうかの言わばスイッチみたいに役割を持たせる。
                check1: false,
                check2: false,
                check3: false,

                //データベースの情報を取得
                products: {},
                // products_prace: [(products) => prace],
                //価格の絞り込みを行う。
                //ソート順(0:未選択,1:100円以下を絞りこむ,2:500円以下を絞り込む、3:1000円以下を絞りこむ)
                //賞味期限が切れているかどうかをチェック。(切れている商品があったら非表示にすること)
                //出品しているコンビニのある都道府県を実装すること
            };
        }
    },
    //実験として情報を受け取る練習からする。
    //これはjson形式で値を取得しないといけないもの
    //子コンポーネントを登録するここのデータはほぼ確定している。
    components: {
        //productheader: productheader,
        // productlist: productlist,
        product: product,
    },
    methods: {
        //json形式で値を取得する方法
        /*
今回準備するメソッド
1.検索条件で絞り込んだリストを返すもの.
2.価格によって条件を絞り込む。(段々と制限を緩くする感じ)
3.現在時刻と比較して賞味期限が切れているかどうかを確かめる関数。
4.都道府県の条件を絞り込む関数を作る。

何夜間やでおそらく一つの処理ですみそう
*/

        //2

        /*
ここから処理を記述するs

*/

        search: function () {
            //コンポーネントのインスタンスを取得
            //filterメソッドを使うのかな
            //検索条件1
            /*
            const app = product
            */

            const filterList = this.product.filter(function (item) {
                //表示判定(true:表示する,false:表示しない)
                if (check1) {
                    //100円の商品以下の商品を表示する
                    if (check1a) {
                        //100円以下の商品は非表示にする
                        show = false;
                    }
                }
            });
            //表示判定を返す
            return show;
        },
    },

    /*
    methods: {
        countdown: function () {
            return this.products[{ product_id: 1 }];
        },
    },
*/
    //json形式でデータベースの値を取得する。
    //親から子にコンポーネントを渡す必要があるのでデータベースの値を子に渡す必要がある。
    mounted() {
        var url = "/haiki/index1";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
<!-- 
親は属性でデータを子に渡して、子はpropsで受け取る

 -->
<!-- 
//=================
//実験5
//===============
    methods: {
        countUp: function () {
            return this.products[0];
        },
    },
配列形式みたいだと予想したらすごいうまくいった。
//================-
//実験6
..====================

    methods: {
        countUp: function () {
            return this.products[0]["product_name"];
        },
    },
文字列の取得の仕方はこれでいける。数字は行けなさそう
できる

        /*あくまでも実験的なプログラミング要素
        all: function () {
            return this.products;
        },
        countUp: function () {
            return this.products[0]["product_name"];
        },
        countdown: function () {
            return this.products[1]["price"];
        },
        */

 -->
