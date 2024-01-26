<template>
    <header>
        <div class="logo">
            <img src="static/logo.svg" alt="" width="86" height="58" />
        </div>
        <Nav />
    </header>
    <main>
        <slot />
    </main>
    <footer>
        <Footer />
    </footer>
</template>

<script>
import Nav from "../Partials/Nav.vue";
import Footer from "../Partials/Footer.vue";

export default {
    components: { Nav, Footer }
}
</script>
