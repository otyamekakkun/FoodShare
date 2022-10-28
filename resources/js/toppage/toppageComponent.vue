
<template>
    <div id="app6">
        <button v-on:click="show = !show">お客様として始める</button>
        <transition name="fade">
            <div v-if="show">
                <div class="l-top__area">
                    <div class="l-top__area__form__custom">
                        <h1>お客買い物を始める</h1>
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
            </div>
        </transition name="fade">

            <!-- コンビニ -->
            <button v-on:click="show1 = !show1">コンビニとして始める</button>
            <transition name="fade">
            <div v-if="show1">
                <div class="l-top__area">
                    <div class="l-top__area__form__custom">
                        <h1>コンビニスタッフとして</h1>
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


<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
  opacity: 0;
}
</style>


            <!-- 
<div class="l-top__area">
    <div class="l-top__area__form__custom">
        <h1>買い物を始める</h1>
        <div class="l-top__area__form__custom__button">
            <button class="c-top__button">
                <a href="login">お客様ログイン</a>
            </button>
            <button class="c-top__button">
                <a class="nav-link" href="./register">お客様ユーザー登録</a>
            </button>
        </div>
    </div>

 -->
