<template>
    <div>
        <img v-bind:src="product_img" width="25%" />
    </div>
</template>
<script>
export default {
    props: ["product_img"],
};
</script>
