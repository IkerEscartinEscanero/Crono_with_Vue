<script setup>
import Layout from "@/Layouts/Layout.vue";
import Table from "@/Components/Table.vue";
import studentResource from "@/models/studentResource.js";

const props = defineProps({rows: Array, fields: Object});
const model = studentResource;
</script>

<template>
  <Layout>
    <Table :rows="rows" :fields="fields" :model="model"/>
  </Layout>
</template>

<style scoped>

</style>