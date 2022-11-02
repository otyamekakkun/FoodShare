<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea">
                <h1 class="c-mypagemenu__title">これまでに購入された商品</h1>
                <div v-for="item in getItems">
                    <div v-if="item.bought >= 1">
                        <ul class="c-productlist__items">
                            <img
                                v-bind:src="item.img_path"
                                class="c-productlist__items__img"
                            />
                            <p class="c-productlist__items__img__title">
                                購入済み！
                            </p>
                            <div class="c-productlist__items__list">
                                <li>商品名.{{ item.product_name }}</li>
                                <li>お値段.{{ item.price }}円.</li>
                                <div class="c-productlist__items__bottom">
                                    <button
                                        class="c-productlist__items__bottom__area"
                                    >
                                        <a
                                            v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                                            >詳細にいく</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    props: ["products", "getItems"],
};
</script>
