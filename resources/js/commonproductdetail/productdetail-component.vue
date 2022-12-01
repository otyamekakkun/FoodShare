<template>
    <div class="c-productdetail">
        <div class="c-prductdetail__imgarea">
            <img v-bind:src="img" class="c-productdetailimg" />
        </div>
        <div class="c-productdetail__area">
            <li class="c-productdetail__area__text">商品名: {{ name }}</li>
            <li class="c-productdetail__area__text">お値段: {{ price }}円</li>
            <li class="c-productdetail__area__text">
                期限: {{ best_by_date }}
            </li>
            <li class="c-productdetail__area__text">
                出品した県名: {{ prefecture }}
            </li>
            <p class="c-productdetail__area__sentence">
                この商品は{{ prefecture }}(店名){{ convinience_name }}が{{
                    updated_at
                }}に出品された商品です
            </p>
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
        "convinience_name",
        "updated_at",
    ],
};
</script>
