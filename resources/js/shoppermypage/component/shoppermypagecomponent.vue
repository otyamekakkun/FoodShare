<template>
    <div id="app">
        <main>
            <!-- <div class="c-exhibitproductlist"> -->
            <h1 class="c-mypagemenu__title">これまでに購入された商品</h1>
            <ul v-for="item in getItems">
                <div v-if="item.bought >= 1">
                    <div class="c-productlist__items">
                        <!-- 購入されたら商品にlabelを付け足す機能 -->
                        <li class="c-productlist__items__title">
                            商品No.{{ item.id }}
                        </li>
                        <img
                            v-bind:src="item.img_path"
                            class="c-productlist__items__img"
                        />
                        <p class="c-productlist__items__img__title">
                            購入済み！
                        </p>
                        <div class="c-productlist__items__list">
                            <li>商品名:{{ item.product_name }}</li>
                            <li>お値段:{{ item.price }}円.</li>
                            <div class="c-productlist__items__bottom">
                                <button
                                    class="c-productlist__items__bottom__area"
                                >
                                    <a
                                        v-bind:href="`${item.id}/shopper_productdetail`"
                                        >詳細にいく</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </main>
    </div>
</template>
<!--  
<script>
//import axios from "axios";
import VueJsPaginate from "vuejs-paginate";
export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
    },
    props: ["products"],

    data: function () {
        {
            return {
                currentPage: 1,
                perPage: 3,
            };
        }
    },
    computed: {
        getItems: function () {
            let start = (this.currentPage - 1) * this.perPage;
            let end = this.currentPage * this.perPage;
            return this.products.reverse().slice(start, end);
        },
        getPaginateCount: function () {
            return Math.ceil(this.products.length / this.perPage);
        },
    },
    methods: {
        count: function () {
            console.log($route.path);
        },
        paginateClickCallback: function (pageNum) {
            this.currentPage = Number(pageNum);
        },
    },
    /*
    mounted() {
        const url = "/haiki/index4";
        axios.get(url).then((response) => (this.products = response.data));
    },
	*/
};
</script>
-->
<script>
export default {
    props: ["products", "getItems"],
};
</script>
