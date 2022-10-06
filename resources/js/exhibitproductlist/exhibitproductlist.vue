<template>
    <div id="app">
        <!-- <img :src="image_url | replace('public', '../storage')" alt="" /> -->

        <h1>exhibitproductlistのコンポーネント</h1>
        <div v-for="product in products">
            <td v-text="product.price"></td>
            <td v-text="product.price"></td>
            <!-- <img v-bind:src="item.img_path"> -->
        </div>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data: function () {
        {
            //データは言わば変数みたいなもの色々なところで使い回せる
            return {
                //データベースの情報を取得
                products: "", //からのデータを用意する。
                // pro:[1][1],
                // product_img:product.img_path,
                imageUrl: "https://via.placeholder.com/300x200?text=Image-1",

                checkflg: false,
            };
        }
    },
    //実験として情報を受け取る練習からする。
    //これはjson形式で値を取得しないといけないもの
    //子コンポーネントを登録するここのデータはほぼ確定している。

    mounted() {
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
