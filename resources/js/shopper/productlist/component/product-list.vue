<template>
    <div>
        sss
        <!-- {{ fiilterdList() }} -->
        <!-- 商品検索一覧 -->
        <Productheaders></Productheaders>
        <!-- 商品一覧 -->
        <Product></Product>
    </div>
</template>
<script>
import Productheaders from "./product-header.vue";
import Product from "./product.vue";

export default {
    props: ["products"], //main.vueからデータの中身が入っている。

    //子コンポーネントを登録する
    components: {
        Productheaders,
        Product,
    },
    //コンポーネントが持つデータ
    data: function () {
        return {
            //価格で絞り込む
            check1: false,
            check2: false,
            check3: false,
            //賞味期限で絞り込む
            //出品した都道府県で絞り込む
            bestdaycheck: false,
        };
    },
    methods: {
        //検索条件でリストを返すプロパティ
        fiilterdList() {
            const app = this.products; //インスタンスを格納する
            const filterdList = this.products.filter(function (item) {
                //表示判定(true表示する, false表示しない)
                let show = true;
                //検索条件：価格絞り込みチェック１
                if (app.check1) {
                    //価格が百円以上のものなら非表示にする
                    if (item.price > 100) {
                        show = false;
                    }
                }
                if (app.check2) {
                    //価格が500円以上のものなら非表示にする
                    if (item.price > 500) {
                        show = false;
                    }
                }
                if (app.check3) {
                    //価格が1000円以上のものなら非表示にする

                    if (item.price > 1000) {
                        show = false;
                    }
                }
                //価格の絞り込み終わり
                //検索条件：賞味期限（現在時刻よりも有効期限が切れていた時に処理を行う

                if (app.bestdaycheck) {
                    //現在時刻よりも有効期限が切れたいらた、非表示にする
                    const nowdate = Date();
                    const bestdate = "";
                    if (nowdate > bestdate) {
                        show = false;
                    }
                }
                //都道府県 値が入っているかどうかを判別するnullなら、絞り込みを行わない
                if (app.prefecturecheck) {
                    const a = "データベースに入っている都道府県";
                    const b = "選択した都道府県";
                    if (a !== b) {
                        show = false;
                    }
                }
                //チェックボックスの表示判定を返す
                return show;
            });
        },
    },
};
</script>
