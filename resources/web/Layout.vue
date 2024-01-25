<script setup>
import { Link } from '@inertiajs/vue3'
</script>


<template>
    <header>
        <div class="logo">
            <img src="static/logo.svg" alt="" width="86" height="58" />
        </div>
        <nav>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/contact">Contact</Link>
        </nav>
    </header>
    <main>
        <slot />
    </main>
</template>
