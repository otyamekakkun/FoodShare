<!-- 
    商品編集画面用のカレンダーコンポーネント
 -->
<template>
    <div class="c-staffform__area__side">
        <span class="c-staffform__title">賞味期限:</span>
        <input
            type="date"
            :min="new Date().toISOString().split('T')[0]"
            name="best_by_date"
            class="c-staffform__area__textname"
            v-bind:value="this.best_by_date"
        />
    </div>
</template>
<script>
export default {
    props: ["best_by_date"],
};
</script>
