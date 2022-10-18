<template>
    <div>
        <!-- ここからフォームの部分 -->
        <form action="******" method="post" enctype="multipart/form-data">
            <div
                id="upload"
                class="form-group commonStyle"
                v-bind:class="{ styleA: styleA, styleB: styleB }"
                @dragover.prevent="changeStyle($event, 'ok')"
                @dragleave.prevent="changeStyle($event, 'no')"
                @drop.prevent="uploadFile($event)"
            >
                <label for="upload_image" class="button">
                    <p>画像を選択</p>
                    <input
                        id="upload_image"
                        type="file"
                        name="img"
                        @change="uploadFile($event)"
                        style="display: none"
                        accept="image/*"
                    />
                </label>

                <!-- ここからプレビュー機能の部分 -->
                <p>またはここに画像ファイルをドラッグ＆ドロップ</p>
                <img
                    v-show="preview"
                    v-bind:src="preview"
                    style="width: 300px"
                />
                <p v-show="preview">{{ name }}</p>
                <!-- ここまでプレビュー機能の部分 -->
            </div>
            <button
                class="btn btn-success"
                style="width: 400px; margin-left: 30px"
            >
                アップロード
            </button>
        </form>
    </div>
</template>
<script>
export default {
    data: function () {
        return { preview: "", name: "", styleA: true, styleB: false };
    },
    methods: {
        uploadFile: function (event) {
            this.styleA = true;
            this.styleB = false;
            const files = event.target.files
                ? event.target.files
                : event.dataTransfer.files;
            const file = files[0];
            const reader = new FileReader();
            reader.onload = (event) => {
                this.preview = event.target.result;
            };
            reader.readAsDataURL(file);
            this.name = files[0].name;
            document.getElementById("upload_image").files = files;
        },
        changeStyle: function (event, flag) {
            if (flag == "ok") {
                this.styleA = false;
                this.styleB = true;
            } else {
                this.styleA = true;
                this.styleB = false;
            }
        },
    },
};
</script>
<!-- ここからスタイル記述 -->
<!-- スタイルはあくまでdefaultモードにする -->
<style type="text/css">
.commonStyle {
    padding: 30px;
    text-align: center;
    margin: 30px;
    width: 400px;
}
.styleA {
    border: 3px dotted gray;
}
.styleB {
    border: 3px dotted rgba(0, 200, 0, 0.7);
}
.button {
    border: 1px solid green;
    padding: 3px;
    border-radius: 5px;
    background-color: white;
}
.button p {
    color: green;
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
}
</style>
