<template>
    <h1>drillsコンポーネント導入しました</h1>
    <!-- @{{ drills }} -->
</template>

<script>
export default {
    mounted() {
        var url = "/drills/index";
        axios.get(url).then(function (response) {
            var drills = response.data;
            console.log(drills);
        });
    },
};
</script>
