<!-- 
 商品出品または編集する際に写真をドラッグアンドドラッグまたは写真を
クリックすることによって写真を入力するコード 
-->
<template>
    <div>
        <!-- ここからフォームの部分 -->
        <div
            id="upload"
            class="form-group commonStyle"
            v-bind:class="{ styleA: styleA, styleB: styleB }"
            @dragover.prevent="changeStyle($event, 'ok')"
            @dragleave.prevent="changeStyle($event, 'no')"
            @drop.prevent="uploadFile($event)"
        >
            <div class="c-staffform__area__uploadimgarea">
                <label for="upload_image">
                    <input
                        id="upload_image"
                        type="file"
                        name="img_path"
                        @change="uploadFile($event)"
                        style="display: none"
                        accept="image/*"
                    />
                    <p class="">
                        このエリアにドラッグ&ドロップまたはクリックして写真を挿入してください.下のエリアに写真が挿入されます。<br />
                    </p>
                </label>
            </div>
            <!-- ここからプレビュー機能の部分 -->
            <div class="c-staffform__area__textimgarea">
                <img
                    v-show="preview"
                    v-bind:src="preview"
                    class="c-staffform__area__textimgarea__img"
                />
                <p
                    v-show="preview"
                    class="c-staffform__area__textimgarea__name"
                >
                    {{ name }}
                </p>
            </div>
            <!-- ここまでプレビュー機能の部分 -->
        </div>
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
