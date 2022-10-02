<!--  
<template>
    <div id="app">
        {{ message }}
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            message: "鈴木",
        };
    },

    methods: {
        アラートを出す関数
        drill: function () {
            const myname = "陸上";
            alert(this.message);
            return myname;
            */
        //このようにアラートを出すこともできればという感じかな。
    },
};
</script>
-->

<!-- これは今までやってきたこと。
実験１alertぶんにする
これは普通にmethod関数に詰めればできる。
-->

<!-- 実験２if文の条件によって返す値を変える -->
<!-- 
<template>
    <div id="app">
        {{ a }}
        {{ min() }}
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            a: 1000,
            b: 100,
            c: 1000,
        };
    },

    methods: {
        min: function () {
            if (this.a >= 100) {
                return this.a;
            }
            //それ以外ならbの値をbを返す
            return this.b;
        },
    },
};
</script>
 -->
<!-- じっけん3
これは実際の処理に用いる。スイッチが押された時に条件が発動する。
<template>
    <div id="app">
        -->

<!-- 
        <button class="button" data-age="20">20歳以上</button>
        <button class="button" data-age="30">30歳以上</button>
        <button class="button" data-age="40">40歳以上</button>
 -->

<!-- 


        <div class="button-wrapper">
            <button v-on:click="buttonClicked" dataage="20">20歳以上</button>
            <button v-on:click="buttonClicked" dataage="30">30歳以上</button>
            <button v-on:click="buttonClicked" dataage="40">40歳以上</button>
        </div>
        <ul>
            {{
                listHtml
            }}
        </ul>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            userDataList: [
                { name: "田口", age: 18 },
                { name: "田中", age: 22 },
                { name: "高橋", age: 30 },
                { name: "藤子", age: 38 },
                { name: "穂乃果", age: 58 },
            ],

            //外から入ってくる値は何かはわからない。
        };

        /*
        min: function () {
            //逆転の発想を持てば良い
            const d = list[(this.a, b, c)];
            if (d < 100) {
                return this.a;
            }
        },
        */
    },
    methods: {
        buttonClicked() {
            const button = event.target;
            const targetAge = button.dataset.age;
            //targetAge以上の年齢を取得する
            const filteredList = this.userDataList.filter(
                (data) => data.age >= targetAge
            );

            //配列を出力する
            console.log(targetAge);
            updateList(filteredList);
            // console(filteredList);
        },

        updateList: function () {
            //const fil = this.filteredList;
            const listHtml = "";
            for (const data of filteredList) {
                listHtml += `<li>${data.name}:${data.age}歳</li>`;
            }

            return listHtml;
        },
    },
};

</script>
 -->
<!-- 
<template>
    <div id="app">
        ■v-showによる表示・非表示の切り替え

        <p v-show="toggle">真偽値はtrue</p>
        <br />
        <button v-on:click="toggleBtn">toggle</button>
    </div>
</template>
<script>
export default {
    data: {
        toggle: true,
    },
    methods: {
        toggleBtn: function () {
            this.toggle == true ? (this.toggle = false) : (this.toggle = true);
        },
    }, //このようにアラートを出すこともできればという感じかな。
};
</script>
 -->
