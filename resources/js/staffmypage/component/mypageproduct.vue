<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea">
                <h1 class="c-mypagemenu__title">これまでに出品された商品</h1>

                <table border="1">
                    <tbody>
                        <tr>
                            <th>商品画像</th>
                            <th>商品名</th>
                            <th>お値段</th>
                            <th>オプション</th>
                        </tr>
                        <tr>
                            <th>ほのす美ころりんん</th>
                            <th>おむすび100個</th>
                            <th>500円</th>
                            <th>オプション</th>
                        </tr>
                    </tbody>
                </table>

                <ul class="c-productlist__items" v-for="item in getItems">
                    <div v-if="item.bought >= 1">
                        <img
                            v-bind:src="item.img_path"
                            class="c-productlist__items__img"
                        />
                        <p class="c-productlist__items__img__title">
                            購入済み！
                        </p>
                    </div>
                    <div v-if="item.bought <= 0">
                        <img
                            v-bind:src="item.img_path"
                            class="c-productlist__items__img2"
                        />
                    </div>
                    <div class="c-productlist__items__list">
                        <li>商品名.{{ item.product_name }}</li>
                        <li>お値段.{{ item.price }}円.</li>
                        <div class="c-productlist__items__bottom">
                            <button class="c-productlist__items__bottom__area">
                                <a
                                    v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                                    >詳細にいく</a
                                >
                            </button>
                            <div v-if="item.bought <= 0">
                                <button
                                    class="c-productlist__items__bottom__area"
                                >
                                    <a
                                        v-bind:href="`haiki/${item.id}}/staff_productedit`"
                                        >商品を編集する</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    props: ["products", "getItems"],
};
</script>
