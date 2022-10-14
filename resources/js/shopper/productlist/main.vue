<template>
    <div>
        <div>
            <product-list :products="this.products"></product-list>
        </div>
    </div>
</template>
<script>
import ProductList from "./component/product-list.vue";
import axios from "axios";

export default {
    components: {
        ProductList,
    },

    data: function () {
        return {
            products: {}, //axiosから取得してきたデータを格納する
            //子から親にデータをもらう。
            keywords: "", //都道府県
            Days2: "", //入力された日付がデータとして入ります
            budgets: 10000, //デフォルトで10000円と打ち込まれている。
            //出品した都道府県で絞り込む
            prefecturecheck: false,
        };
    },

    methods: {},
    //データベースから情報を取得します
    mounted() {
        const url = "/haiki/index1";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
