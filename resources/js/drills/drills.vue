<template>
    <div>
        <!-- usesの値はvueで使う処理なので自室なんでも良い -->

        <tr v-for="use in uses">
            <td v-text="use.problem2"></td>
            <td v-text="use.category_name"></td>
            <td v-text="use.place"></td>
            <td v-text="use.best_by_date"></td>

            <!-- <td><img :src="use.img_path" /></td> -->
        </tr>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data: function () {
        {
            return {
                uses: [],
                //img_path: {},
            };
        }
    },
    mounted() {
        var url = "/drills/ind";
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
</script>
<!-- 色々と実験をしたいこと 
    データベース関連で実験したいこと
1.並び替えて表示することができるか？
2.ページネーションが実装できるか？
3.booleanフラグ　今回はplaceでいい。を見て色々と処理を変えることができるか？
4.最新5件を表示する
5.ログイン情報もきちんと取得できるかどうかを確かめる
6.絞りこむだから並び替えるという意味ではなさそう。
今回はリサイクルという意味合いを兼ねて


-->

<!-- 
実験物１vue.jsでデータベースから情報を取得して表示する実験を行った。これをすることによって
vueによる様々な処理が容易にすることができるようになった。

<template>
    <div>

        <tr v-for="use in uses">
            <td v-text="use.problem2"></td>
            <td v-text="use.category_name"></td>
            <td v-text="use.place"></td>
            <td v-text="use.best_by_date"></td>

        </tr>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            uses: [],
            //img_path: {},
        };
    },
    mounted() {
        var url = "/drills/ind";
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
</script>
 -->
