<template>
    <div class="c-detail">
        <div class="">
            <img v-bind:src="img" class="c-detail__img" />
        </div>
        <div class="c-detail__sentence">
            <li class="c-detail__sentence__text">商品名:　{{ name }}</li>
            <li class="c-detail__sentence__text">お値段:　{{ price }}円</li>
            <li class="c-detail__sentence__text">期限:　{{ best_by_date }}</li>
            <li class="c-detail__sentence__text">
                出品した県名:　{{ prefecture }}
            </li>
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
