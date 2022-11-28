<!-- 
    商品詳細画面 laravel側でデータを取得してpropsでデータをもらいそれをもとに商品詳細を掲載したもの
いらない
c-productdetail__info
c-productdetail__imgarea
c-productdetail__img
c-productdetail__listarea
c-productdetail__list
c-productlist__items__listt__sentence
 -->

<template>
    <div class="c-detail">
        <!-- <h1 class="c-productdetail__info">商品No.{{ id }} {{ name }}</h1> -->
        <div class="">
            <img v-bind:src="img" class="c-detail__img" />
        </div>
        <div class="c-detail__sentence">
            <li class="">商品名:　{{ name }}</li>
            <li class="">お値段:　{{ price }}円</li>
            <li class="">期限:　{{ best_by_date }}</li>
            <li class="">出品した県名:　{{ prefecture }}</li>
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
