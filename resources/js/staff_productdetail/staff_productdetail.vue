<template>
    <div>
        <h1 class="c-title">商品詳細</h1>

        <img v-bind:src="test" width="25%" />
        <p>{{ name }}</p>
    </div>
</template>
<script>
export default {
    props: ["test", "name"],
};
</script>

<!-- 

<div class="l-staffproductdetail">
    <div class="l-staffproductdetail__area">
    <img src="{{ Storage::url($products->img_path) }}" class="c-productdetailimg"/>
    <div class="l-staffproductdetail__areaflex">
        <ul class="c-productdetaillist">
    <li class="c-under">商品名:{{$products->product_name}}</li>

    <li class="c-under">価格:{{$products->price}}</li>
    <li class="c-under">賞味期限：{{$products->best_by_date}}</li>

</ul>
</div>
    </div>
</div>
 -->
