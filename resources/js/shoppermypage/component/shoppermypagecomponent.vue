<!-- 
お客様のマイページ画面で商品が購入された時に表示されるように記述したコード
ページネーション機能をつけており、１ページ毎に5件に表示する
 -->

<template>
    <div id="app">
        <main>
            <h1 class="c-mypagemenu__title">これまでに購入された商品</h1>
            <ul v-for="item in getItems">
                <div v-if="item.bought >= 1">
                    <div class="c-productlist__items">
                        <li class="c-productlist__items__title">
                            商品No.{{ item.id }}
                        </li>
                        <img
                            v-bind:src="item.img_path"
                            class="c-productlist__items__img"
                        />
                        <p class="c-productlist__items__img__title">
                            購入済み！
                        </p>
                        <div class="c-productlist__items__list">
                            <li>商品名:{{ item.product_name }}</li>
                            <li>お値段:{{ item.price }}円.</li>
                            <div class="c-productlist__items__bottom">
                                <button
                                    class="c-productlist__items__bottom__area"
                                >
                                    <a
                                        v-bind:href="`${item.id}/shopper_productdetail`"
                                        >詳細にいく</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </main>
    </div>
</template>
<script>
export default {
    props: ["products", "getItems"],
};
</script>
