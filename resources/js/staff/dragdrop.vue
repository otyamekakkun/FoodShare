<template>
    <div
        class="drop_area"
        @dragenter="dragEnter"
        @dragleave="dragLeave"
        @dragover.prevent
        @drop.prevent="dropFile"
        :class="{ enter: isEnter }"
    >
        ファイルアップロード
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            isEnter: false,
        };
    },
    methods: {
        dragEnter() {
            this.isEnter = true;
        },
        dragLeave() {
            this.isEnter = false;
        },
        dragOver() {
            console.log("DragOver");
        },
        dropFile() {
            console.log("Dropped File");
        },
    },
};
</script>
<style>
html,
body {
    height: 100%;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
}

.drop_area {
    color: gray;
    font-weight: bold;
    font-size: 1.2em;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 500px;
    height: 300px;
    border: 5px solid gray;
    border-radius: 15px;
}
.enter {
    border: 10px dotted powderblue;
}
</style>
