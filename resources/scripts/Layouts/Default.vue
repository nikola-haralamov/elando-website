<template>
    <header>
        <Header />
    </header>
    <main>
        <slot />
    </main>
    <footer>
        <Footer />
    </footer>
</template>

<script>
import Header from '../Partials/Header';
import Footer from '../Partials/Footer';

export default {
    components: { Header, Footer }
}
</script>
