<template>
    <div class="navbar">
        <div class="navbar__content">
            <div>Diccionario</div>
            <div>
                <span>Home</span>
                <span>Inicio</span>
            </div>
        </div>
    </div>
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
    height: 8vh;
    background-color: #181822;
    color: azure;
}
.navbar__content {
    padding: 1rem;
    display: flex;
    justify-content: space-between;
}
</style>
