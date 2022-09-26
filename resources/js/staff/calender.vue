<!-- 
商品登録リストに用いるコンポーネント。
賞味期限を記述する際に現在時刻より前のものは入力できない作りをする。
すごい最小なコンポーネントにしたい。

 -->
<template>
    <div>
        <h1>カレンダーコンポーネント読み取れているかな</h1>
        input type="date" v-model="startData" :min="new
        Date().toISOString().split('T')[0]" onkeydown="return false">
        <p>〜</p>
        <input
            type="date"
            v-model="endData"
            :min="new Date().toISOString().split('T')[0]"
            onkeydown="return false"
            name="best_by_date"
        />
        Markup
    </div>
</template>
<script></script>
