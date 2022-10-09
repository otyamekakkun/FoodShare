<template>
    <div>
        購入された商品リストを写す
        <p>{{ this.product_id }}</p>
    </div>
</template>
<script>
export default {
    props: ["product_id", "product_img"],
};
</script>
