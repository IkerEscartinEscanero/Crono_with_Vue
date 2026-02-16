<script setup>
import Layout from "@/Layouts/Layout.vue";
import {Link, usePage} from "@inertiajs/vue3";
import {computed, ref} from "vue";
import Modal from "../../../vendor/laravel/breeze/stubs/inertia-vue-ts/resources/js/Components/Modal.vue";
import Login from "../../../vendor/laravel/breeze/stubs/inertia-vue-ts/resources/js/Pages/Auth/Login.vue";
import Card from "@/Components/Card.vue";
import Register from "../../../vendor/laravel/breeze/stubs/inertia-vue-ts/resources/js/Pages/Auth/Register.vue";

const user = computed(() => usePage().props.auth.user);
const props = defineProps({cards:Object});

const openLogin = ref(false);
const openRegister = ref(false);
const handleOpenModal = (type) => {
  openLogin.value = false;
  openRegister.value = false;

  if (type === 'login') {
    openLogin.value = true;
  }
  if (type === 'register') {
    openRegister.value = true;
  }
}


</script>

<template>
  <Layout @open-modal="handleOpenModal">
    <div v-if="user">
      <div class="flex flex-row justify-start items-center p-5 gap-2">
        <Card v-for="card in props.cards" :key="card.title"
              :title="card.title"
              :description="card.description"
              :img="card.img"
              :alt="card.alt"
              :action="card.action"
              :boton="card.boton"
        />
      </div>
    </div>
    <div v-else>
      <div
          class="hero min-h-screen"
          style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
      >
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
          <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
            <p class="mb-5">
              Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
              quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <button class="btn btn-primary">Get Started</button>
          </div>
        </div>
      </div>
    </div>
    <Modal :show="openLogin" @close="openLogin=false">
      <Login @close="openLogin=false"/>
    </Modal>
    <Modal :show="openRegister" @close="openRegister=false">
      <Register @close="openRegister=false"/>
    </Modal>
  </Layout>
</template>

<style scoped>

</style>