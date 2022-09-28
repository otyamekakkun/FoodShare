<!-- 
    ここでjson形式で情報を取得したい。これをもとに表示していきたいのでおそらく違う可能性がある
 -->
<script>
import productheader from "./component/product-header.vue";
import productlist from "./component/product-list.vue";
import product from "./component/product.vue";

export default {
    data: function () {
        {
            return {
                //実験として情報を受け取る練習からする。
                //これはjson形式で値を取得しないといけないもの
                list: [
                    {
                        name: "Michael<br>スマホケース",
                        price: 1980,
                        image: "images/01.jpg",
                        shipping: 0,
                        isSale: true,
                    },
                    {
                        name: "Raphael<br>スマホケース",
                        price: 3980,
                        image: "images/02.jpg",
                        shipping: 0,
                        isSale: true,
                    },
                    {
                        name: "Gabriel<br>スマホケース",
                        price: 2980,
                        image: "images/03.jpg",
                        shipping: 240,
                        isSale: true,
                    },
                    {
                        name: "Uriel<br>スマホケース",
                        price: 1580,
                        image: "images/04.jpg",
                        shipping: 0,
                        isSale: true,
                    },
                    {
                        name: "Ariel<br>スマホケース",
                        price: 2580,
                        image: "images/05.jpg",
                        shipping: 0,
                        isSale: false,
                    },
                    {
                        name: "Azrael<br>スマホケース",
                        price: 1280,
                        image: "images/06.jpg",
                        shipping: 0,
                        isSale: false,
                    },
                ],
                //子コンポーネントを登録するここのデータはほぼ確定している。
                components: {
                    productheader: productheader,
                    productlist: productlist,
                    product: product,
                },
                    mounted() {
        var url = "/drills/index2";
        /*
    コンソールで表現する
        axios.get(url).then(function (response) {
            var drills = response.data;
            console.log(drills);
        });
        */
        axios.get(url).then((response) => (this.uses = response.data));
    },

            };
        }
    },
};
</script>
