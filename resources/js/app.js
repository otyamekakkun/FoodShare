/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//===========================================
// topページのコンポーネント
//===========================================
Vue.component("toppage-component", require("./toppageComponent.vue").default);

//===========================================
// フッターのコンポーネント
//===========================================
Vue.component(
    "incompletefooter-component",
    require("./footercomponents/incompleteFooterComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./footercomponents/FooterComponent.vue").default
);

//===================================================================
// カレンダーvueのコンポーネント(現在時刻よりも前の時刻は入力できないようにする)
//===================================================================
Vue.component("calender-component", require("./staff/calender.vue").default);

//===================================================================
//お客様専用の商品一覧のコンポーネント
//===================================================================

Vue.component(
    "productlist-component",
    require("./shopper/productlist/main.vue").default
);

//===================================================================
// カレンダーvueのコンポーネント
//===================================================================

Vue.component("drag-component", require("./staff/dragdrop.vue").default);

//================================================
//商品一覧リストのコンポーネント
//================================================
Vue.component(
    "exhibitlist-componennt",
    require("./exhibitproductlist/exhibitproductlist.vue").default
);

//================================================
//staff_mypageのコンポーネント(基本的に出品した商品一覧5件を表示するコード)
//================================================
Vue.component(
    "staffmypage-componennt",
    require("./staffmypage/staffmypage.vue").default
);

//================================================
//staff_mypageのコンポーネント(基本的に購入された商品一覧5件を表示するコード)
//================================================
Vue.component(
    "staffmypagebought-componennt",
    require("./staffmypage/staffboughtmypage.vue").default
);

//=============================================================

//================================================
//staff_mypageのコンポーネント(基本的に購入された商品一覧5件を表示するコード)
//================================================
Vue.component(
    "bought-componennt",
    require("./staffboughtlist/bought-list.vue").default
);

//=============================================================ここまで

//===============================================================
//staff_productdetailのコンポーネント(管理者専用の商品商品詳細画面)
//===============================================================
Vue.component(
    "staff_productdetail-component",
    require("./staff_productdetail/staff_productdetail.vue").default
);

//==================================================================
//shopperproductdetailのコンポーネント（ご利用者の商品詳細画面)
//================================================================

Vue.component(
    "shopperproductdetail-component",
    require("./shopperproductdetail/shopper_product.vue").default
);

//==================================================================
//shopperproductdetailのコンポーネント（ご利用者の商品詳細画面)
//================================================================
Vue.component(
    "shoppermypage-component",
    require("./shoppermypage/shoppermypage.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: "#app",
});
