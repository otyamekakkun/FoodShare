<!-- 
    ドラッグコンポーネント
-->
<template>
    <div>
        <div
            id="upload"
            class="form-group commonStyle"
            v-bind:class="{ styleA: styleA, styleB: styleB }"
            @dragover.prevent="changeStyle($event, 'ok')"
            @dragleave.prevent="changeStyle($event, 'no')"
            @drop.prevent="uploadFile($event)"
        >
            <div class="c-staff__imgarea">
                <label for="upload_image">
                    <input
                        id="upload_image"
                        type="file"
                        name="img_path"
                        @change="uploadFile($event)"
                        style="display: none"
                        accept="image/*"
                    />
                    <p class="c-staffform__area__uploadimgarea">写真を選択</p>
                </label>
                <div class="c-staffform__area__textimgarea">
                    <img
                        v-bind:src="preview"
                        v-show="preview"
                        class="c-staffform__area__textimgarea__img"
                    />
                    <p v-show="!preview">
                        またはここにドラッグ＆ドロップをしてください
                    </p>

                    <p
                        v-show="preview"
                        class="c-staffform__area__textimgarea__name"
                    >
                        {{ name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["img"],

    data: function () {
        return { preview: this.img, name: "", styleA: true, styleB: false };
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
