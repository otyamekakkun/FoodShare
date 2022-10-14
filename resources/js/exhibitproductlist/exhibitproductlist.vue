<template>
    <div id="app">
        <h1 class="c-title">コンビニ側が出品した商品の一覧のページです</h1>
        <main>
            <div class="l-exhibitproductlist">
                <div class="l-exhibitproductlist__list">
                    <div class="l-exhibitproductlist__listb">
                        <div>
                            <li v-for="item in products">
                                <div class="c-productlist">
                                    <img
                                        v-bind:src="item.img_path"
                                        width="25%"
                                    />
                                    <div class="c-productlist__sentence">
                                        商品名.{{ item.product_name }}お値段.{{
                                            item.price
                                        }}円.
                                    </div>

                                    <button>
                                        <a
                                            v-bind:href="`${item.id}}/staff_productdetail`"
                                            >詳細にいく</a
                                        >
                                    </button>

                                    <button>
                                        <a
                                            v-bind:href="`${item.id}}/staff_productedit`"
                                            >商品を編集する</a
                                        >
                                    </button>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>
<script>
import axios from "axios";

export default {
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
