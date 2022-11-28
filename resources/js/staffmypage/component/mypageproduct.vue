<template>
    <div id="app">
        <main>
            <div class="c-staffmypagelistarea__title1">
                <h1 class="">これまでに出品された商品</h1>
            </div>
            <div class="c-staffmypagelistarea">
                <div
                    class="c-staffmypagelistarea__area"
                    v-for="item in getItems"
                >
                    <div class="c-staffmypagelistarea__list">
                        <div v-if="item.bought >= 1">
                            <img
                                v-bind:src="item.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                            <p class="">購入済み！</p>
                        </div>
                        <div v-if="item.bought <= 0">
                            <img
                                v-bind:src="item.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                        </div>
                        <div class="c-staffmypagelistarea__text">
                            <!-- 商品名文字を大きくする
                        お値段の色を変える
                    ボタンを無くしてaタグで対応する
                画面の幅は３行 小さ苦する -->
                            <li class="c-staffmypagelistarea__list__name">
                                {{ item.product_name }}
                            </li>
                            <li class="c-staffmypagelistarea__list__price">
                                {{ item.price }}円.
                            </li>
                            <!-- <div> -->
                            <!-- <button class=""> -->
                            <a
                                class="c-staffmypagelistarea__list__a"
                                v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                                >詳細を見る↗︎</a
                            >
                            <i class="fa-regular fa-arrow-pointer"></i>
                            <!-- </button> -->
                            <div v-if="item.bought <= 0">
                                <!-- <button class=""> -->
                                <a
                                    class="c-staffmypagelistarea__list__a"
                                    v-bind:href="`haiki/${item.id}}/staff_productedit`"
                                    >編集する↗︎</a
                                >
                                <!-- </button> -->
                                <!-- </div> -->
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
