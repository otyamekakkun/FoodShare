<template>
    <div>
        ss
        <!-- 商品検索一覧 -->
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
