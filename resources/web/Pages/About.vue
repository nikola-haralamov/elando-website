<script setup>
import Layout from '../Layout.vue'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })

</script>

<template>
    <Layout>
        <Head>
            <title>About</title>
            <meta head-key="description" name="description" content="About description" />
        </Head>
        <h1>About</h1>
        <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
    </Layout>
</template>
