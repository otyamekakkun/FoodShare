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

// フッターのコンポーネント
Vue.component(
    "incompletefooter-component",
    require("./footercomponents/incompleteFooterComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./footercomponents/FooterComponent.vue").default
);

// カレンダーvueのコンポーネント
Vue.component("calender-component", require("./staff/calender.vue").default);
//商品一覧のコンポーネント
Vue.component(
    "productlist-component",
    require("./shopper/productlist/main.vue").default
);

// カレンダーvueのコンポーネント
Vue.component("drag-component", require("./staff/dragdrop.vue").default);

//実験用のコンポーネント
Vue.component("drills-component", require("./drills/drills.vue").default);

//商品一覧リストのコンポーネント
Vue.component(
    "exhibitlist-componennt",
    require("./exhibitproductlist/exhibitproductlist.vue").default
);

//staff_mypageのコンポーネント

Vue.component(
    "staffmypage-componennt",
    require("./staffmypage/staffmypage.vue").default
);

//adminのコンポーネント
Vue.component(
    "admin-component",
    require("./admin/admin-component.vue").default
);
//staff_productdetailのコンポーネント
Vue.component(
    "staff_productdetail-component",
    require("./staff_productdetail/staff_productdetail.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: "#app",
});
