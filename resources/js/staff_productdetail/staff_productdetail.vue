<template>
    <div>
        <h1 class="c-title">商品詳細</h1>

        <main>
            <div class="l-productdetail">
                <div class="l-productdetail__area">
                    <h1 class="c-productdetail__title">商品:No.{{ id }}</h1>
                    <img v-bind:src="img" class="c-productdetail__img" />
                    <h1>商品の内容</h1>
                    <ul class="c-productdetail__list">
                        <li class="c-productlist__items__listt__sentence">
                            ・商品名:{{ name }}
                        </li>
                        <li class="c-productlist__items__listt__sentence">
                            ・お値段:{{ price }}円
                        </li>
                        <li class="c-productlist__items__listt__sentence">
                            ・賞味期限:{{ best_by_date }}
                        </li>
                        <li class="c-productlist__items__listt__sentence">
                            ・出品された都道府県:{{ prefecture }}
                        </li>
                    </ul>
                </div>
            </div>
        </main>
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
