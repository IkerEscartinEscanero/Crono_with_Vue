<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({img: String, alt: String, title: String, description: String, action: String, boton: String});
</script>

<template>
  <div class="card bg-base-100 w-96 shadow-sm">
    <figure class="h-60 overflow-hidden">
      <img
          :src="props.img"
          :alt="props.alt"
          class="w-full h-full object-contain bg-white"
      />
    </figure>
    <div class="card-body">
      <h2 class="card-title">{{ props.title }}</h2>
      <p>{{ props.description }}</p>
      <div class="card-actions justify-end">
        <Link as="button" :href="props.action" class="btn btn-primary">{{ props.boton }}</Link>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>