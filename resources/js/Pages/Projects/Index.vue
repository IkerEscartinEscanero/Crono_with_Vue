<script setup>
import Layout from "@/Layouts/Layout.vue";

const props = defineProps({fieldLabels: Object, projects: Array});

</script>

<template>
  <Layout>
    <div class="overflow-x-auto h-96">
      <table class="table table-xs table-pin-rows table-pin-cols">
        <thead>
        <tr>
          <!-- Importante hacerlo de esta manera -->
          <th v-for="(label, field) in fieldLabels" :key="field">
            {{label}}
          </th>
        </tr>
        </thead>
        <tbody>
          <tr v-for="project in projects" :key="project.id">
            <td v-for="(label, field) in fieldLabels">
              {{project[field]}}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </Layout>
</template>

<style scoped>

</style>