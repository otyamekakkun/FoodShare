<!-- 
商品登録リストに用いるコンポーネント。
賞味期限を記述する際に現在時刻より前のものは入力できない作りをする。
すごい最小なコンポーネントにしたい。

 -->
<template>
    <div>
        <h1>カレンダーコンポーネント読み取れているかな</h1>
        <form>
            <label for="best_by_date" class="">賞味期限を入れる</label>

            <input
                id="best_by_date"
                type="date"
                class="best_by_date"
                name="best_by_date"
                autocomplete=""
                autofocus
            />
        </form>
    </div>
</template>
