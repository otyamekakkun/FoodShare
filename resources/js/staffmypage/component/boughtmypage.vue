<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea__title1">
                <h1 class="c-staffmypagelistarea__title1__text">
                    これまでに購入された商品
                </h1>
            </div>
            <!-- <h1 class="c-mypagemenu__title">これまでに購入された商品</h1> -->
            <!-- 購入されたら表示される仕組みになる -->
            <div class="c-staffmypagelistarea">
                <div
                    v-for="item in getItems"
                    class="c-staffmypagelistarea__area"
                    v-if="item.bought >= 1"
                >
                    <div>
                        <div class="c-staffmypagelistarea__list">
                            <img
                                v-bind:src="item.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                            <p class="c-staffmypagelistarea__list__bought">
                                Sold Out
                            </p>
                            <div class="c-staffmypagelistarea__text">
                                <li class="c-staffmypagelistarea__list__name">
                                    {{ item.product_name }}
                                </li>
                                <li class="c-staffmypagelistarea__list__price">
                                    {{ item.price }}円.
                                </li>
                                <a
                                    v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                                    class="c-staffmypagelistarea__list__a"
                                    >詳細を見る↗︎</a
                                >
                            </div>
                        </div>
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
