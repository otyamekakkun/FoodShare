
<template>
    <div >
        <div class="l-top__area__form">
        <button v-on:click="show = !show" class="l-top__area__form__button">お客様として始める</button>
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
        </transition name="fade">
            <!-- コンビニ -->
            <div class="l-top__area__form2">
            <button v-on:click="show1 = !show1"  class="l-top__area__form__button">管理者として始める</button>
            </div>
            <transition name="fade">
            <div v-if="show1">
                    <div class="l-top__area__form__custom">
            <div class="l-top__area__form__custom__button">
                <button class="c-top__button">
                    <a href="./login/admin">コンビニログイン</a>
                </button>
                <button class="c-top__button">
                    <a href="./register/admin">コンビニユーザー登録</a>
                </button>
                <p>
                    お客様がご利用される場合は上のお客様ログイン,またはお客様ユーザー登録からお入りください
                </p>
                </div>
                </div>
            </div>
        </transition>
        </div>


    </div>
</template>
<script>
export default {
    data: function () {
        return { show: false, show1: false };
    },
};
</script>


