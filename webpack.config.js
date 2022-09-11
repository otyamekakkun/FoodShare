const VueLoaderPlugin = require("vue-loader/lib/plugin");
const path = require("path");

const env = process.env.NODE_ENV || "development";
const glob = require("glob"); //ワイルドカードを使用するため。

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
            vue$: "vue/dist/vue.esm.js",
        },
    },
    plugins: [new VueLoaderPlugin()],
};
