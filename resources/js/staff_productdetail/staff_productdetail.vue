<template>
    <div>
        <h1 class="c-title">商品詳細</h1>

        <main>
            <div class="l-productdetail">
                <div class="l-productdetail__area">
                    <ul>
                        <img
                            v-bind:src="img"
                            width="50%"
                            class="c-productdetail__img"
                        />
                        <li>商品No.{{ id }}</li>
                        <li>商品名{{ name }}</li>
                        <li>お値段{{ price }}</li>
                        <li>賞味期限{{ best_by_date }}</li>
                        <li>出品したコンビニの都道府県{{ prefecture }}</li>
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
