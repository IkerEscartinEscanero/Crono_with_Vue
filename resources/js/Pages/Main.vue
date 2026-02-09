<script setup>
import Layout from "@/Layouts/Layout.vue";
import {Link, usePage} from "@inertiajs/vue3";
import {computed, ref} from "vue";
import Modal from "../../../vendor/laravel/breeze/stubs/inertia-vue-ts/resources/js/Components/Modal.vue";
import Login from "../../../vendor/laravel/breeze/stubs/inertia-vue-ts/resources/js/Pages/Auth/Login.vue";

const user = computed(() => usePage().props.auth.user);
const openLogin = ref(false);

</script>

<template>
  <Layout @open-modal="openLogin=true">
    <div v-if="user">
      <div class="flex flex-row justify-start items-center p-5 gap-2">
        <div class="card bg-base-100 w-96 shadow-sm">
          <figure>
            <img
                src="https://img.freepik.com/vector-gratis/temporizador-cronometro-es-color-rojo_78370-8122.jpg?semt=ais_hybrid&w=740&q=80"
                alt="Shoes"
                height="255px"
                width="255px"/>
          </figure>
          <div class="card-body">
            <h2 class="card-title">CRONÓMETRO</h2>
            <p>Ver cronómetro</p>
            <div class="card-actions justify-end">
              <Link as="button" href="crono" class="btn btn-primary">Cronómetro</Link>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 w-96 shadow-sm">
          <figure>
            <img
                src="https://www.itmplatform.com/wp-content/uploads/Gesti%C3%B3n-de-Proyectos-5-Requisitos-del-%C3%89xito.png"
                alt="Shoes"/>
          </figure>
          <div class="card-body">
            <h2 class="card-title">PROYECTOS</h2>
            <p>Gestión de proyectos</p>
            <div class="card-actions justify-end">
              <Link as="button" href="projects" class="btn btn-primary">Proyectos</Link>
            </div>
          </div>
        </div>
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
  </Layout>
</template>

<style scoped>

</style>