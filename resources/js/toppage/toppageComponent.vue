<!-- toppageを表示する機能
jsの機能として,(コンビニ関係者用のログイン画面ユーザー登録画面に入るスイッチ)と
(お客様のログイン画面とユーザー登録画面に入るスイッチ)をボタンを押すことによって分けることにしました。
-->
<template>
    <div>
        <div class="l-top__area__form">
            <button v-on:click="show = !show" class="l-top__area__form__button">
                <div v-if="show">お客様として始める</div>
                <div v-else="!show">関係者として始める</div>
            </button>
        </div>
        <div v-if="show">
            <transition name="fade">
                <div class="l-top__area__form__custom">
                    <div class="l-top__area__form__custom__button">
                        <button class="c-top__button">
                            <a href="login">お客様ログイン</a>
                        </button>
                        <button class="c-top__button">
                            <a class="nav-link" href="./register"
                                >お客様ユーザー登録</a
                            >
                        </button>
                        <p class="c-warning">
                            コンビニ関係者としてご利用される場合は上のお客様として始めるボタンをもう一度クリックした上で,下記のコンビニログイン,またはコンビニユーザー登録を押して,お入りください
                        </p>
                    </div>
                </div>
            </transition>
        </div>
        <div v-else="!show">
            <transition name="fade">
                <div class="l-top__area__form__custom">
                    <div class="l-top__area__form__custom__button">
                        <button class="c-top__button">
                            <a href="./login/admin">コンビニログイン</a>
                        </button>
                        <button class="c-top__button">
                            <a href="./register/admin">コンビニユーザー登録</a>
                        </button>
                        <p class="c-warning">
                            お客様としてご利用される場合は上の関係者として始めるボタンをもう一度クリックした上で,下記のお客様ログイン,またはお客様ユーザー登録を押して,お入りください
                        </p>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>
<script>
export default {
    props: ["show", "show1"],
    data: function () {
        return { show: true, show1: false };
    },
};
</script>
