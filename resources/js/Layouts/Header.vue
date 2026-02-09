<script setup>
import {Link, usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const user = computed(() => usePage().props.auth.user);
const emit = defineEmits(['open-modal']);
</script>

<template>
  <header class="h-header bg-header flex justify-between p-5">
    <h1 class="text-4xl text-blue-900 flex flex-row items-center">PRUEBA DE VUE</h1>
    <div v-if="user">
      <div class="flex flex-row justify-start items-center p-5 gap-2">
        <p>Hola {{ user.name }}</p>
        <Link href="logout" method="post">
          <button type="submit" class="btn btn-primary cursor-pointer">Logout</button>
        </Link>
      </div>
    </div>
    <div v-else>
      <div class="flex flex-row justify-start items-center p-5 gap-2">
          <button @click="emit('open-modal')" class="btn btn-sm btn-primary">Login</button>
        <Link href="register">
          <button class="btn btn-sm btn-primary">Register</button>
        </Link>
      </div>
    </div>
  </header>
</template>

<style scoped>

</style>