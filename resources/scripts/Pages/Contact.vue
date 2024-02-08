<script setup>
import Layout from '../Layouts/Default'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })

</script>

<template>
    <Layout>
        <Head>
            <title>Contact</title>
            <meta head-key="description" name="description" content="Contact description" />
        </Head>

        <h1>Contact</h1>
        <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
    </Layout>
</template>


<style scoped lang="scss">
@import "../../assets/styles/variables.scss";
</style>
