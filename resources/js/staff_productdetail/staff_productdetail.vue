<template>
    <div>
        <p>こんにちは</p>
        <img v-bind:src="test" width="25%" />
    </div>
</template>
<script>
export default {
    props: ["test"],
};
</script>
