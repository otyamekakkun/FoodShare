<template>
    <div>
        sss
        <!-- 商品検索一覧 -->
        <Productheaders></Productheaders>
        <!-- 商品一覧 -->
        <Product></Product>
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
            //価格で絞り込む
            //賞味期限で絞り込む
            //出品した都道府県で絞り込む
        };
    },
    methods: {},
};
</script>
