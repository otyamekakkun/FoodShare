<template>
    <div>
        <h1 class="c-title">商品詳細</h1>

        <img v-bind:src="img" width="25%" />
        <ul>
            <li>{{ id }}</li>
            <li>{{ name }}</li>

            <li>お値段{{ price }}</li>
            <li>{{ bought }}</li>

            <li>{{ best_by_date }}</li>
            <li>{{ prefecture }}</li>
        </ul>
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
