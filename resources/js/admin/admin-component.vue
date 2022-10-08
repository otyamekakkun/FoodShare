<template>
    <div id="app">
        <li v-for="item in products">
            <div class="c-productlist">
                <img v-bind:src="item.img_path" width="25%" />
                <div class="c-productlist__sentence">
                    <li>商品No.{{ item.id }}</li>
                    <li>商品名.{{ item.product_name }}</li>
                    <li>お値段.{{ item.price }}円.</li>
                </div>
            </div>
        </li>
    </div>
</template>
<script>
import axios from "axios";

export default {
    props: ["pro"],

    data: function () {
        {
            return {
                products: "", //からのデータを用意する。
                imageUrl: "https://via.placeholder.com/300x200?text=Image-1",
            };
        }
    },
    mounted() {
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>

<!-- 
コンポーネントのpropsでデータを渡す処理をすれば良い

 -->
