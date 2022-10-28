<template>
    <div>
        <!-- ここからフォームの部分 -->
        <!-- <form action="******" method="post" enctype="multipart/form-data"> -->
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
                    <p>このエリアにドラッグ&ドロップをしてください<br /></p>
                </label>
            </div>
            <!-- ここからプレビュー機能の部分 -->
            <div class="c-staffform__area__textimgarea">
                <img
                    v-show="preview"
                    v-bind:src="preview"
                    style="width: 400px"
                />
                <p v-show="preview">{{ name }}</p>
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
