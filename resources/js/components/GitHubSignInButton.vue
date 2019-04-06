<style scoped>
    .github-sign-in {
        background: #fff;
        border: 1px solid #ccc;
        background: linear-gradient(0deg, #eee 0%, #fff 100%);
        color: #545E75;

        border-radius: 4px;
        padding: 6px 10px;
        font-size: 1.1em;
    }

    .github-sign-in:hover {
        text-decoration: none;
    }

    i {
        padding-right: 5px;
        font-size: 1.4em;
        vertical-align: -2px;
    }
</style>

<template>
    <a class="github-sign-in" href="/login/github">
        <i class="fab fa-github"></i> Sign In with GitHub
    </a>
</template>

<script>
    export default {
        mounted() {
            // console.log('Button mounted.')
        }
    }
</script>
