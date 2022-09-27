<template>
    <div>
        {{ title }}
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            title: [],
        };
    },
    mounted() {
        var url = "/drills/ind";
        /*
    コンソールで表現する
        axios.get(url).then(function (response) {
            var drills = response.data;
            console.log(drills);
        });
        */
        axios.get(url).then((response) => (this.title = response.data));
    },
};
</script>
