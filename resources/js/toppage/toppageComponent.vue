<!-- 備考
1.お客様として始めるというボタンが押された際にお客様ログイン、お客様ユーザー登録というエリアが開かれる
2.管理者として始めるというボタンが押された際にコンビニログイン、コンビニユーザー登録というエリアが開かれる  
-->

<template>
    <div>
        <!-- 備考１ここから -->
        <div class="l-top__area__form">
            <button v-on:click="show = !show" class="l-top__area__form__button">
                お客様として始める
            </button>
        </div>
        <transition name="fade">
            <div v-if="show">
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
                    </div>
                </div>
            </div>
        </transition>
        <!-- 備考１ここまで -->
        <!-- 備考２ここから-->
        <div class="l-top__area__form2">
            <button
                v-on:click="show1 = !show1"
                class="l-top__area__form__button"
            >
                管理者として始める
            </button>
        </div>
        <transition name="fade">
            <div v-if="show1">
                <div class="l-top__area__form__custom2">
                    <div class="l-top__area__form__custom__button">
                        <button class="c-top__button">
                            <a href="./login/admin">コンビニログイン</a>
                        </button>
                        <button class="c-top__button">
                            <a href="./register/admin">コンビニユーザー登録</a>
                        </button>
                        <p class="c-warning">
                            お客様がご利用される場合は上のお客様として始めるから、お客様ログイン,またはお客様ユーザー登録からお入りください
                        </p>
                    </div>
                </div>
            </div>
        </transition>
        <!-- 備考２ここまで-->
    </div>
</template>
<script>
export default {
    data: function () {
        return { show: false, show1: false };
    },
};
</script>
