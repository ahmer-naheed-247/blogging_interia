<template>
    <FrontLayout>
      <section class="hero-section">
        <div class="hero-text">
          <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <img src="https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c29mdHdhcmUlMjBkZXZlbG9wbWVudHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="img">
      </section>
    </FrontLayout>
  </template>
  
  <script>
  import FrontLayout from '@/Layouts/FrontLayout.vue';
  
  export default {
    name: 'FrontPage',
    components: {
      FrontLayout
    }
  };
  </script>
  
  <style scoped>
  .hero-section {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50vh;
  }
  
  .hero-text {
    width: 50%;
    padding: 50px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
  }
  
  .hero-text h1 {
    font-size: 3rem;
    font-weight: bold;
  }
  
  .hero-text p {
    font-size: 1.5rem;
  }
  
  img {
    width: 50%;
    object-fit: cover;
  }
  </style>
  