<!-- FirstChild.vue(子) -->
<template>
    <div class="search">
        <div class="search__result">
            検索結果 <span class="search__count">{{ count }}件</span>
        </div>
        <div class="search__condition">
            <input
                type="checkbox"
                v-bind:checked="check1"
                v-on:change="$emit('check1Changed')"
            />
            セール対象
            <input
                type="checkbox"
                v-bind:checked="check2"
                v-on:change="$emit('check2Changed')"
            />
            送料無料
            <select
                class="search__order"
                v-bind:value="order"
                v-on:change="
                    $emit('orderChanged', parseInt($event.target.value))
                "
            >
                <option value="0">---並べ替え---</option>
                <option value="1">標準</option>
                <option value="2">安い順</option>
            </select>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            //count check1 check2 orderという値をもらって親からもらって使う。
            props: ["count", "check1", "check2", "order"],
        };
    },
};
</script>

<!-- 

処理の流れ　
1セレクトボックスにv-bindを入れる（false値を入れる）
2コンポーネントのインスタンスを取得する
今回は(this.products)

3const show =true (表示判定)
//金額　百円以下ならな表示する
500円以下なら表示するというものを持たせる。
ラストに表示判定を返す













 -->
