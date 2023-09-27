<template>
    <div class="front-layout">
      <header>
        
      </header>
  
      <main>
        <slot>
        </slot>
      </main>
  
      <footer>

      </footer>
    </div>
  </template>
<script>
        
    import 'bootstrap/dist/css/bootstrap.min.css';
    import 'bootstrap/dist/js/bootstrap.bundle.min.js';

    export default {
    name: 'FrontLayout'
    };
    </script>
  
  <style lang="scss">
  </style>