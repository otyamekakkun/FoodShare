<!-- 
    商品詳細画面 laravel側でデータを取得してpropsでデータをもらいそれをもとに商品詳細を掲載したもの
 -->

<template>
    <div>
        <h1 class="c-productdetail__info">商品No.{{ id }} {{ name }}</h1>
        <div class="c-productdetail__imgarea">
            <img v-bind:src="img" class="c-productdetail__img" />
        </div>
        <div class="c-productdetail__listarea">
            <ul class="c-productdetail__list">
                <li class="c-productlist__items__listt__sentence">
                    ・商品名:　{{ name }}
                </li>
                <li class="c-productlist__items__listt__sentence">
                    ・お値段:　{{ price }}円
                </li>
                <li class="c-productlist__items__listt__sentence">
                    ・期限:　{{ best_by_date }}
                </li>
                <li class="c-productlist__items__listt__sentence">
                    ・出品した県名:　{{ prefecture }}
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    props: [
        "id",
        "img",
        "name",
        "price",
        "best_by_date",
        "prefecture",
        "bought",
    ],
};
</script>
