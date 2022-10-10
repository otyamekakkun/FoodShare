<template>
    <div>
        sss
        <!-- 商品検索一覧 -->
        <Product-header></Product-header>
        <!-- 商品一覧 -->
        <product></product>
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
};
</script>
