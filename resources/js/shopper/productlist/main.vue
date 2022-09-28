<!-- 
    ここでjson形式で情報を取得したい。これをもとに表示していきたいのでおそらく違う可能性がある
 -->
<!-- usesの値はvueで使う処理なので自室なんでも良い -->

<!--  -->
<template>
    <div>
        <p>{{ countUp() }}</p>
        <tr v-for="product in products">
            <td v-text="product.price"></td>
            <h1 v-if="product.price"></h1>
        </tr>
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
                products: [],
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
            return this.fuji;
        },
    },

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
