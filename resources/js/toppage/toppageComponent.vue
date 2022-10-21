<template>
    <div>
        <!-- 
        <transition>
            <div v-show="visible">
                 -->
        <!-- <img src="img/top.jpg" class="l-topimg2" /> -->
        <div class="l-top__imgarea">
            <div class="l-top__area">
                <div class="l-top__area__custom">
                    <h1>買い物を始める</h1>
                    <button class="c-top__button">
                        <a href="login">お客様ログイン</a>
                    </button>
                    <button class="c-top__button">
                        <a class="nav-link" href="./register"
                            >お客様ユーザー登録</a
                        >
                    </button>
                    <h1>コンビニスタッフとして</h1>
                    <button class="c-top__button">
                        <a href="./login/admin">ログインする</a>
                    </button>
                    <button class="c-top__button">
                        <a href="./register/admin">ユーザー登録する</a>
                    </button>
                    <p>
                        お客様がご利用される場合は上のお客様ログイン,またはお客様ユーザー登録からお入りください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            visible: false,
        };
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll() {
            const FADEIN_ELEM_TOP = FADEIN_ELEM.getBoundingClientRect().top;
            const WINDOW_HEIGHT = window.innerHeight;

            this.scrollY = window.scrollY;
            if (!this.visible) {
                this.visible = window.scrollY > 800;
            }
        },
    },
};
</script>
