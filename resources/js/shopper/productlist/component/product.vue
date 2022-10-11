<template>
    <div>
        Konijnfwie
        <!-- 基本的に商品一覧の処理機能を記述します -->
        <li v-for="item in product">
            <div>
                <img v-bind:src="item.img_path" width="25%" />
                商品名.{{ item.product_name }}お値段.{{ item.price }}円.
                <button>
                    <a v-bind:href="`/haiki/${item.id}/shopper_productdetail`"
                        >商品の詳細をみる</a
                    >
                </button>
            </div>
        </li>
    </div>
</template>

<script>
export default {
    props: ["product"],
};
</script>
