<!-- 
    ここでjson形式で情報を取得したい。これをもとに表示していきたいのでおそらく違う可能性がある
 -->
<!-- usesの値はvueで使う処理なので自室なんでも良い -->

<!--  -->
<template>
    <div>
        <p>{{ countUp() }}</p>
        <p>{{ countdown() }}</p>
        <!-- 
        <div v-for="product in products">
            <td v-text="product.price"></td>
            <h1 v-if="product.price"></h1>
        </div>
             -->
    </div>
    <!-- <div>{{ countUp }}</div> -->
</template>
<script>
import axios from "axios";
/*
import productheader from "./component/product-header.vue";
import productlist from "./component/product-list.vue";

import product from "./component/product.vue";
*/
//ここでエラーが発生していたコンポーネント自体読み取れていないということなのでここは読み取れている。
export default {
    data: function () {
        {
            //データは言わば変数みたいなもの色々なところで使い回せる
            return {
                products: {},
                // products_prace: [(products) => prace],
                fuji: 10,
                kakuto: 30,

                //賞味期限が切れているかどうかをチェック。(切れている商品があったら非表示にすること)
                check1: true,

                //価格の絞り込み

                //100円以下
                check2: true,

                //200円以下
                sampleB: true,

                //500円以下

                //1000円以下

                //それ以上

                //出品しているコンビニのある都道府県を実装すること
            };
        }
    },
    //実験として情報を受け取る練習からする。
    //これはjson形式で値を取得しないといけないもの
    //子コンポーネントを登録するここのデータはほぼ確定している。
    components: {
        /*
        productheader: productheader,
        productlist: productlist,
        product: product,
        */
    },
    methods: {
        countUp: function () {
            return this.products[0]["product_name"];
        },
        countdown: function () {
            return this.products[1]["price"];
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
//=========
//実験１
//==========
    methods: {
        countUp: function () {
            const a = this.products + "好きです";
            return a;
        },
    },
[object object]好きですという表記になった。

//=====================
//実験２
//====================

    methods: {
        countUp: function () {
            console.log(this.products);
        },
    },

コンソール形式で導出されるようになった
//============================
//実験３ 
//==============================

一部抜粋
    data: function () {
        {
            //データは言わば変数みたいなもの色々なところで使い回せる
            return {
                products: ["price"],

ミス
//========================
//実験４
//===================

    methods: {
        countUp: function () {
            return this.products;
        },
    },
全権表示される


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


 -->
