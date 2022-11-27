<!-- 
toppageを表示する機能
-->
<template>
    <div>
        <transition name="fade">
            <div class="l-top__area__form__custom">
                <div class="l-top__area__form__custom__button">
                    <a href="login">
                        <button class="c-top__button">お客様ログイン</button>
                    </a>
                    <a href="./register">
                        <button class="c-top__button">
                            お客様ユーザー登録
                        </button>
                    </a>
                </div>
            </div>
        </transition>
        <transition name="fade">
            <div class="l-top__area__form__custom">
                <div class="l-top__area__form__custom__button">
                    <a href="./login/admin">
                        <button class="c-top__button">コンビニログイン</button>
                    </a>
                    <a href="./register/admin">
                        <button class="c-top__button">
                            コンビニユーザー登録
                        </button>
                    </a>
                </div>
            </div>
        </transition>
    </div>
</template>
