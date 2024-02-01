<script setup>
import Layout from '../Layouts/Default'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })

</script>

<template>
    <Layout>
        <Head>
            <title>Services</title>
            <meta head-key="description" name="description" content="Services description" />
        </Head>

        <h1>Services</h1>
        <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
    </Layout>
</template>


<style lang="scss">

</style>
