<template>
    <Navbar />
    <Busqueda />
</template>

<script setup>
import { defineProps } from "vue";
import Navbar from "../components/navbar.vue";
import Busqueda from "../components/busqueda.vue";
const props = defineProps({
    nombre: {
        type: String,
    },
});
</script>

<style scoped></style>
