<template>
    <div>
        <h1 class="c-title">商品詳細</h1>

        <img v-bind:src="test" width="25%" />
        <p>{{ name }}</p>
        <p>{{ price }}</p>
        <p>{{ best_by_date }}</p>
    </div>
</template>
<script>
export default {
    props: ["test", "name", "price", "best_by_date"],
};
</script>
