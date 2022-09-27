<template>
    <table>
        <!-- <tr v-for="drill in drills"></tr> -->
        <!-- <td v-text="drills.title"></td> -->
    </table>
</template>

<script>
export default {
    mounted() {
        var url = "/drills/ind";
        axios.get(url).then(function (response) {
            var drills = response.data;
            console.log(drills);
        });
    },
};
</script>
