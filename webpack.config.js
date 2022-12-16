/*
webpack+babelの方にvueの環境構築を行いました。
またsassの環境構築としてgulpを用いて行いました。
仕上げにpackage.jsonのnpm-scriptでgulpとwebpackを２つ同時並列に読み込む処理を記述して
vueとsassが同時に使える環境を作りました。
*/

const VueLoaderPlugin = require("vue-loader/lib/plugin");
const path = require("path");
const env = process.env.NODE_ENV || "development";
const glob = require("glob"); //ワイルドカード(*)を使用するため。

module.exports = {
    entry: glob.sync("./resources/js/*.js"),
    output: {
        filename: "app.js",
        path: path.resolve(__dirname, "public/js"),
    },
    devtool: "source-map",
    mode: env,
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: "vue-loader",
            },

            {
                test: /\.js$/,
                loader: "babel-loader",
            },
        ],
    },
    resolve: {
        alias: {
            vue$: "vue/dist/vue.esm.js", //←vueのテンプレートを使うために記述
        },
    },
    plugins: [new VueLoaderPlugin()],
};
