<script setup>
import Layout from "@/Layouts/Layout.vue";
import {computed, ref} from "vue";

const props = defineProps({fieldLabels: Object, projects: Array});
const ascendente = ref(false);
const fieldOrder = ref(Object.keys(props.fieldLabels)[0]);
const projectsOrdered = computed(() => {
  return [...props.projects].sort((a, b) => {
    let aValue = a[fieldOrder.value];
    let bValue = b[fieldOrder.value];

    if (aValue > bValue) {
      return ascendente.value ? 1 : -1;
    } else {
      return ascendente.value ? -1 : 1;
    }
  })
})
const sort=(field) => {
  if(field === fieldOrder.value) {
    ascendente.value = !ascendente.value;
  } else {
    fieldOrder.value = field
    ascendente.value = true;
  }
}

</script>

<template>
  <Layout>
    <div class="overflow-x-auto h-96">
      <table class="table table-xs table-pin-rows table-pin-cols">
        <thead>
        <tr>
          <!-- Importante hacerlo de esta manera -->
          <th @click="sort(field)" v-for="(label, field) in fieldLabels" :key="field">
            {{label}}
            <span v-if="field === fieldOrder" class="cursor-default">
              {{ascendente ? "▲" : "▼"}}
            </span>
          </th>
        </tr>
        </thead>
        <tbody>
          <tr v-for="project in projectsOrdered" :key="project.id">
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