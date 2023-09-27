<template>
    <div class="front-layout">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <Link class="navbar-brand" :href="route('home')">StarLitSkyInnovations</Link>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('home')">Home</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('about')">About</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('blog')">Blogs</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('contact')">Contact</Link>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
  
      <main>
        <slot></slot>
      </main>
  
      <footer></footer>
    </div>
</template>
  
  <script>
  import 'bootstrap/dist/css/bootstrap.min.css';
  import 'bootstrap/dist/js/bootstrap.bundle.min.js';
  import { Link } from '@inertiajs/inertia-vue3';
  export default {
    components: {
        Link
    },
    name: 'FrontLayout',
  };
  </script>
  
  <style lang="scss"></style>
  