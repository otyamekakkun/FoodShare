<!-- 
商品登録リストに用いるコンポーネント。
賞味期限を記述する際に現在時刻より前のものは入力できない作りをする。
すごい最小なコンポーネントにしたい。

 -->
<template>
    <div>
        <P>賞味期限を入れてください</P>
        <input
            type="date"
            :min="new Date().toISOString().split('T')[0]"
            name="best_by_date"
            class="l-productexhibitform__typo3"
        />
    </div>
</template>
