<template>
    <div class="hero_area">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <Link class="navbar-brand mt-2 mt-lg-0" :href="route('home')">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15"
                            alt="MDB Logo" loading="lazy" /> -->
                            <span>StarLitSkyInnovations</span>
                        </Link>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                            <li class="nav-item">
                                <Link class="nav-link" :href="route('home')">Home</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :href="route('about')">About</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :href="route('blog')">Blog</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :href="route('contact')">Contact Us</Link>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->

                </div>
                <!-- Container wrapper -->
            </nav>

        </header>
    </div>
    <main class="mt-5">
        <slot></slot>
    </main>
    <footer></footer>
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

<style lang="scss">
    .navbar .nav-link {
        color: #000000 !important;
    }

    .body {
        background-color: hsl(0, 8%, 3%);
    }
</style>