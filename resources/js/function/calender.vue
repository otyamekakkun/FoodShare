<!-- 
商品登録リストと編集で賞味期限を入力するためのコード
 -->
<template>
    <div class="c-staffform__area__side">
        <span class="c-staffform__title">賞味期限:</span>
        <input
            type="date"
            :min="new Date().toISOString().split('T')[0]"
            name="best_by_date"
            class="c-staffform__area__textname"
        />
    </div>
</template>
