<template>
    <div>
        <img v-bind:src="product_img" width="25%" />
        <p>{{ product_name }}</p>
        <p>{{ product_price }}</p>
        <p>{{ product_best_by_date }}</p>
    </div>
</template>
<script>
export default {
    props: [
        "product_img",
        "product_name",
        "product_price",
        "product_best_by_date",
    ],
};
</script>
