<!-- 
商品登録リストと編集で賞味期限を入力するためのコンポーネント。
賞味期限を記述する際に現在時刻より前のものは入力できない作りをするため。



テスト巡回1 ok
 -->
<template>
    <div class="l">
        <P>賞味期限を入れてください</P>
        <input
            type="date"
            :min="new Date().toISOString().split('T')[0]"
            name="best_by_date"
            class="l-productexhibitform__typo3"
        />
    </div>
</template>
