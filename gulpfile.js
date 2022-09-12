const { watch, src } = require("gulp");
const gulp = require("gulp");
//sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));
// style.scssをタスクを作成する
gulp.task("default", () => {
    return (
        gulp /
        watch("./resources/sass/app.scss", () => {
            // style.scssファイルを取得
            return (
                gulp
                    .src("./resources/sass/app.scss")
                    // Sassのコンパイルを実行
                    .pipe(sass())
                    // cssフォルダー以下に保存
                    .pipe(gulp.dest("public/css"))
            );
        })
    );
});
