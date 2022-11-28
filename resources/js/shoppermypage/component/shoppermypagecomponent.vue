<!-- 
お客様のマイページ画面で商品が購入された時に表示されるように記述したコード
ページネーション機能をつけており、１ページ毎に5件に表示する
 -->
<!-- 
いらないものは基本的に共通していると思う。
  -->
<template>
    <div id="app">
        <div class="c-staffmypagelistarea">
                <div
                    v-for="item in getItems"
                    class="c-staffmypagelistarea__area"
                    v-if="item.bought >= 1"
                >
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
                                v-bind:href="`${item.id}/shopper_productdetail`"
                                class="c-staffmypagelistarea__list__a"
                                >詳細見る↗︎</a
                            >
                        </div>
                    </div>
                    <div v-if="item.bought <= 0" class="u-hidden"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["products", "getItems"],
};
</script>
