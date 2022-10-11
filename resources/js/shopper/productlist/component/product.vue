<template>
    <div>
        <!-- 基本的に商品一覧の処理機能を記述します -->
        なにもされたいない
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

<template>
    <div>
        <!-- 基本的に商品一覧の処理機能を記述します -->
        なにもされたいない
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

    data: function () {
        return {
            a: 1,
        };
    },

    methods: {},
};
</script>
<!--  
テンプレートタブを大量に作って条件い合うものだけを絞り込ませる。





87ページを参考に処理を行う





-->
