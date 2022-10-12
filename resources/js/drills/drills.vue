<template>
    <div>こんにちは</div>
</template>
<script>
import axios from "axios";
//ここでエラーが発生していたコンポーネント自体読み取れていないということなのでここは読み取れている。
export default {
    data: function () {
        {
            //データは言わば変数みたいなもの色々なところで使い回せる
            return {
                //ここでの処理はチェックボタンが押されているかどうかの言わばスイッチみたいに役割を持たせる。
                products: "", //からのデータを用意する。
                imageUrl: "https://via.placeholder.com/300x200?text=Image-1",

                checkflg: false,
            };
        }
    },
    //実験として情報を受け取る練習からする。
    //これはjson形式で値を取得しないといけないもの
    //子コンポーネントを登録するここのデータはほぼ確定している。
    methods: {
        count: function () {
            console.log($route.path);
        },
    },

    mounted() {
        const url = "/haiki/index4";
        axios.get(url).then((response) => (this.products = response.data));
    },
};
</script>
