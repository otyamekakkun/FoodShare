<template>
    <div>
        <!-- <h1>{{ a }}</h1> -->
        <h1>{{ fuji }}</h1>
        <p>僕の名前はおっぱい星人です</p>
        <!-- propsで、データをもらうとこうなる -->
        <p>{{ val }}</p>
        <p>{{ vala }}</p>
        <!-- <td v-text="product.vala"></td> -->
    </div>
</template>
<script>
//import productHeaderVue from "./product-header.vue";
/*
export default {
    props: ["product.price"],
    data: function () {
        return;
        {
            a: product.prices;
        }
    },
};*/
export default {
    props: ["val"],

    data: function () {
        {
            return {
                //a: product.price,
                kakuto: 10,
            };
        }
    },
    //実験として情報を受け取る練習からする。
    //これはjson形式で値を取得しないといけないもの
    //子コンポーネントを登録するここのデータはほぼ確定している。
};
</script>
