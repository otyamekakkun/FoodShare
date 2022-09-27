<template>
    <div>
        <tr v-for="use in uses">
            <td v-text="use.title"></td>
        </tr>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            uses: [],
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
        axios.get(url).then((response) => (this.uses = response.data));
    },
};
</script>
