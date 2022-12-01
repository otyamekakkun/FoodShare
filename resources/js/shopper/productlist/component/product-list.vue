<!--
商品一覧と商品の絞り込み
-->
<template>
    <div>
        <div>
            <div>
                <div class="c-staffmypagelistarea__title1">
                    <h1>商品の条件を絞り込む</h1>
                </div>
                <div class="c-searcharea">
                    <div class="c-search">
                        <p class="">都道府県を選択:</p>
<select name="prefecture" v-model="keywords">
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select>
</select>
                    </div>
                    <div class="c-search">
                        <p>金額を入力:</p>
                        <input type="text" v-model="budgets" class="c-search__value" />円以下の商品を表示
                    </div>
                    <div class="c-search">
                        有効期限チェック:
                        <input
                            type="date"
                            :min="new Date().toISOString().split('T')[0]"
                            class=""
                            v-model="Days2"
                        />
                    </div>
                </div>
                <div class="c-staffmypagelistarea">
                    <div
                        v-if="
                            product.best_by_date >= Days2 && product.bought <= 0
                        "
                        :key="product.id"
                        v-for="product in filteredProducts"
                        class="c-staffmypagelistarea__area"
                    >
                        <div class="c-staffmypagelistarea__list">
                            <img
                                v-bind:src="product.img_path"
                                class="c-staffmypagelistarea__list__img"
                            />
                            <div class="c-staffmypagelistarea__text">
                                <li class="c-staffmypagelistarea__list__name">
                                    {{ product.product_name }}
                                </li>
                                <li class="c-staffmypagelistarea__list__price">
                                    {{ product.price }}円.
                                </li>
                                <a
                                    v-bind:href="`${product.id}}/shopper_productdetail`"
                                    class="c-staffmypagelistarea__list__a"
                                    >詳細を見る↗︎</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["products"],
    data: function () {
        return {
            keywords: "", //都道府県
            Days2: "", //入力された日付がデータとして入ります
            budgets: 10000, //デフォルトで10000円と打ち込まれている。
        };
    },
    computed: {
        filteredProducts: function () {
            const products = [];
            for (var i in this.products) {
                var product = this.products[i];
                if (product.prefecture.indexOf(this.keywords) !== -1) {
                    if (!this.Days) {
                        products.push(product);
                    }
                }
            }
            if (products) {
                return products.filter(function (el) {
                    return el.price <= this.budgets;
                }, this);
            }
        },
    },
};
</script>
