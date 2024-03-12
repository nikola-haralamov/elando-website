<script setup>
    import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head>
        <title>My app</title>
        <meta head-key="description" name="description" content="This is the default description" />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    </Head>
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
