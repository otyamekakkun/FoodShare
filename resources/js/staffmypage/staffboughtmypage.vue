<template>
    <div id="app">
        {{ products }}
        <li v-for="item in products">
            <div class="c-productlist">
                <img v-bind:src="item.img_path" width="25%" />
                <div class="c-productlist__sentence">
                    <li v-if="(item.bought = 1)">購入されたよ</li>
                    <li>商品No.{{ item.id }}</li>
                    <li>商品名.{{ item.product_name }}</li>
                    <li>お値段.{{ item.price }}円.</li>
                    <button>
                        <a v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                            >詳細にいく</a
                        >
                    </button>

                    <button>
                        <a v-bind:href="`haiki/${item.id}}/staff_productedit`"
                            >商品を編集する</a
                        >
                    </button>
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
                <li
                v-for="item in products"
                v-bind:class="{ takai: item.price > 300 }"
            >
                <img v-bind:src="item.img_path" width="25%" />

                商品名.{{ item.product_name }}お値段.{{ item.price }}円.
                <button>
                    <a v-bind:href="`/haiki/${item.id}/shopper_productdetail`"
                        >商品の詳細をみる</a
                    >
                </button>

                <span v-if="item.price <= 100">やすい</span>
                <span v-else-if="item.price > 100 && item.price <= 500"
                    >普通</span
                >
                <span v-else-if="item.price > 500 && item.price <= 1000"
                    >やや高い</span
                >
                <span v-else-if="item.price > 1000">そのほか</span>
            </li>
>propsでデータをもらう方式を考える。
 -->
