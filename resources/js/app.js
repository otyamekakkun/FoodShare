require("./bootstrap");
window.Vue = require("vue").default;

//===========================================
// topページのコンポーネント
//===========================================
Vue.component(
    "toppage-component",
    require("./toppage/toppageComponent.vue").default
);

//===========================================
// フッターのコンポーネント
//===========================================
Vue.component(
    "footer-component",
    require("./footercomponents/FooterComponent.vue").default
);

Vue.component(
    "footerdetail-component",
    require("./footercomponents/footerdetail.vue").default
);

//===================================================================
// 商品を出品するために使われるvueのコンポーネント
//===================================================================
Vue.component("calender-component", require("./function/calender.vue").default);
Vue.component("drag-component", require("./function/dragdrop.vue").default);
//===================================================================
//お客様専用の商品一覧のコンポーネント
//===================================================================
Vue.component(
    "productlist-component",
    require("./shopper/productlist/main.vue").default
);
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
//============================================
//staff shopper 共通している商品一覧のコンポーネント
//============================================

Vue.component(
    "productdetail-component",
    require("./commonproductdetail/productdetail-component.vue").default
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
