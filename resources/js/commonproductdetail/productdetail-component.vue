<template>
    <div>
        <h1 class="c-productdetail__info">
            商品No.{{ id }} 商品名{{ name }}の商品情報
        </h1>
        <div class="c-productdetail__imgarea">
            <h1 class="c-productdetail__title">商品:No.{{ id }}の画像</h1>
            <img v-bind:src="img" class="c-productdetail__img" />
        </div>
        <div class="c-productdetail__listarea">
            <!-- <h1 class="c-productdetail__listtitle">商品の内容</h1> -->
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
