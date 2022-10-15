<template>
    <div>
        <li v-for="item in getItems">
            <div v-if="item.bought >= 1">
                <img v-bind:src="item.img_path" width="25%" />
                商品名.{{ item.product_name }}お値段.{{ item.price }}円.
                <button>
                    <a v-bind:href="`/haiki/${item.id}/shopper_productdetail`"
                        >商品の詳細をみる</a
                    >
                </button>
            </div>
        </li>
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
</template>

<script>
import axios from "axios";
import VueJsPaginate from "vuejs-paginate";

//ここでエラーが発生していたコンポーネント自体読み取れていないということなのでここは読み取れている。
export default {
    components: {
        "vuejs-paginate": VueJsPaginate,
    },

    data: function () {
        {
            //データは言わば変数みたいなもの色々なところで使い回せる
            return {
                //ここでの処理はチェックボタンが押されているかどうかの言わばスイッチみたいに役割を持たせる。
                products: "", //からのデータを用意する。
                currentPage: 1,
                perPage: 10,
            };
        }
    },
    //実験として情報を受け取る練習からする。
    //これはjson形式で値を取得しないといけないもの
    //子コンポーネントを登録するここのデータはほぼ確定している。
    computed: {
        getItems: function () {
            let start = (this.currentPage - 1) * this.perPage;
            let end = this.currentPage * this.perPage;
            return this.products.slice(start, end);
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

    mounted() {
        const url = "/haiki/index4";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
