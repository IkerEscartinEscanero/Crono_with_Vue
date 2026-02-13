<script setup>
import {computed, ref} from "vue";
import {router} from "@inertiajs/vue3";

const props = defineProps({fields: Object, rows: Array, model: Object});
const ascendente = ref(false);
const fieldOrder = ref(Object.keys(props.fields)[0]);
const rowsOrdered = computed(() => {
  return [...props.rows].sort((a, b) => {
    let aValue = a[fieldOrder.value];
    let bValue = b[fieldOrder.value];

    if (aValue > bValue) {
      return ascendente.value ? 1 : -1;
    } else {
      return ascendente.value ? -1 : 1;
    }
  })
})
const sort = (field) => {
  if (field === fieldOrder.value) {
    ascendente.value = !ascendente.value;
  } else {
    fieldOrder.value = field
    ascendente.value = true;
  }
}

const destroy = (id) => {
  if (!confirm("¿Quieres borrar?")) {
    return 0;
  }
  router.delete(props.model.routes.delete(id));
}

const add = () => {
  router.get(props.model.routes.create());
}
</script>

<template>
  <div class="overflow-x-auto h-96">
    <h1><button class="btn btn-primary" @click="add">Añadir {{ props.model.name }}</button></h1>
    <table class="table table-xs table-pin-rows table-pin-cols">
      <thead>
      <tr>
        <!-- Importante hacerlo de esta manera -->
        <th @click="sort(field)" v-for="(label, field) in fields" :key="field">
          {{ label }}
          <span v-if="field === fieldOrder" class="cursor-pointer">
              {{ ascendente ? "▲" : "▼" }}
            </span>
        </th>
        <th colspan="2">
        </th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="row in rowsOrdered" :key="row.id">
        <td v-for="(label, field) in fields">
          {{ row[field] }}
        </td>
        <td><button class="btn btn-sm btn-glass p-1 cursor-pointer" @click="router.get(props.model.routes.edit(row.id))">✏️</button></td>
        <td><button @click="destroy(row.id)" class="btn btn-sm btn-glass p-1 cursor-pointer">🗑️</button></td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>

</style>