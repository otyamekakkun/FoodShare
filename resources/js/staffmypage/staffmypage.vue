<template>
    <div id="app">
        <!-- {{ drill() }} -->
        <li v-for="item in getItems">
            <div class="c-productlist">
                <img v-bind:src="item.img_path" width="25%" />

                <div class="c-productlist__sentence">
                    <li>商品No.{{ item.id }}</li>
                    <li>商品名.{{ item.product_name }}</li>
                    <li>お値段.{{ item.price }}円.</li>
                    <button>
                        <a v-bind:href="`haiki/${item.id}}/staff_productdetail`"
                            >詳細にいく</a
                        >
                    </button>
                    <button>
                        <a v-bind:href="`haiki/${item.id}}/staff_productedit`"
                            >商品を編集する</a
                        >
                    </button>
                    <div v-if="item.bought >= 1">
                        <h1>購入済み</h1>
                    </div>
                </div>
            </div>
        </li>
    </div>
</template>
<script>
import axios from "axios";

export default {
    props: ["pro"],

    data: function () {
        {
            return {
                products: [], //からのデータを用意する。
                imageUrl: "https://via.placeholder.com/300x200?text=Image-1",
                currentPage: 1,
                perPage: 5,
            };
        }
    },
    computed: {
        /*
ページネーションの仕組みを利用して最新５件だけ表示されるシステムを構築した。
出品した商品最新5件なのでreverse()メソッドで呼び出す配列の順序を逆にした。
*/
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
        paginateClickCallback: function (pageNum) {
            this.currentPage = Number(pageNum);
        },
    },

    mounted() {
        const url = "/haiki/index3";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>

<!-- 
コンポーネントのpropsでデータを渡す処理をすれば良い

 -->
<!-- 
<script>
import VueJsPaginate from "vuejs-paginate";

export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
    },
    data: function () {
        return {
            items: [],
            currentPage: 1,
            perPage: 10,
        };
    },
    created: function () {
        for (let i = 1; i <= 95; i++) {
            this.items.push({
                id: i,
                name: "name_" + i,
            });
        }
    },
    computed: {
        getItems: function () {
            let start = (this.currentPage - 1) * this.perPage;
            let end = this.currentPage * this.perPage;
            return this.items.slice(start, end);
        },
        getPaginateCount: function () {
            return Math.ceil(this.items.length / this.perPage);
        },
    },
    methods: {
        paginateClickCallback: function (pageNum) {
            this.currentPage = Number(pageNum);
        },
    },
};
</script>
</script> -->
<!--  
<template>
    <div id="app" class="container-fluid">
        <div>
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                </thead>
                <tbody>
                    <tr v-for="e in getItems" :key="e.id">
                        <td>{{ e.id }}</td>
                        <td>{{ e.name }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <vuejs-paginate
                    :page-count="getPaginateCount"
                    :prev-text="'<'"
                    :next-text="'>'"
                    :click-handler="paginateClickCallback"
                    :container-class="'pagination justify-content-center'"
                    :page-class="'page-item'"
                    :page-link-class="'page-link'"
                    :prev-class="'page-item'"
                    :prev-link-class="'page-link'"
                    :next-class="'page-item'"
                    :next-link-class="'page-link'"
                    :first-last-button="true"
                    :first-button-text="'<<'"
                    :last-button-text="'>>'"
                ></vuejs-paginate>
            </div>
        </div>
    </div>
</template>
-->
