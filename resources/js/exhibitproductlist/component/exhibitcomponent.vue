<template>
    <div id="app">
        <main>
            <ul class="c-productlist__items" v-for="item in getItems">
                <!-- 購入されたら商品にlabelを付け足す機能 -->
                <li class="c-productlist__items__title">
                    商品No.{{ item.id }}
                </li>

                <div v-if="item.bought >= 1">
                    <img
                        v-bind:src="item.img_path"
                        class="c-productlist__items__img"
                    />
                    <p class="c-productlist__items__img__title">購入済み！</p>
                </div>

                <div v-if="item.bought <= 0">
                    <img
                        v-bind:src="item.img_path"
                        class="c-productlist__items__img2"
                    />
                </div>

                <div class="c-productlist__items__list">
                    <!-- <li>商品No.{{ item.id }}</li> -->
                    <li>商品名:{{ item.product_name }}</li>
                    <li>お値段:{{ item.price }}円.</li>
                    <div class="c-productlist__items__bottom">
                        <button class="c-productlist__items__bottom__area">
                            <a v-bind:href="`${item.id}}/staff_productdetail`"
                                >詳細を見る</a
                            >
                        </button>
                        <div v-if="item.bought <= 0">
                            <button class="c-productlist__items__bottom__area">
                                <a v-bind:href="`${item.id}}/staff_productedit`"
                                    >商品を編集</a
                                >
                            </button>
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
