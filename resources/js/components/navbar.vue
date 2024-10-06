<template>
    <nav class="navbar">
        <div class="navbar__content">
            <div class="title">
                <div>Diccionario</div>
                <span>|</span>
                <div class="navbar__menu">
                    <span>Home</span>
                    <span>Blog</span>
                </div>
            </div>
            <div>
                <Icon
                    class="navbar__icon"
                    :icon="'line-md:sun-rising-twotone-loop'"
                />
            </div>
        </div>
    </nav>
</template>

<script setup>
import { defineProps } from "vue";
import Icon from "../components/Icon.vue";
const props = defineProps({
    nombre: {
        type: String,
    },
});
</script>

<style scoped>
* {
    margin: 0;
}
.navbar {
    width: 100%;
    height: 85px;
    background-color: #1e1e1e;
    color: rgb(153, 153, 153);
}
.navbar__content {
    display: flex;
    justify-content: space-between;
    height: 100%;
    align-items: center;
    margin-right: 5rem;
    margin-left: 5rem;
}
.navbar__menu {
    display: flex;
    gap: 1rem;
}
.title {
    display: flex;
    gap: 2rem;
    font-size: large;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
        sans-serif;
}

.navbar__icon {
    padding: 5px;
    height: 2rem;
    width: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: #a7a7a7;
    border: solid #23232c 1px;
    border-radius: 50%;
}
</style>
