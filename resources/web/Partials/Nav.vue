<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav>
        <ul>
            <li>
                <Link href="/" :class="{ 'active': $page.url === '/' }">Home</Link>
            </li>
            <li>
                <Link href="/about" :class="{ 'active': $page.url === '/about' }">About</Link>
            </li>
            <li>
                <Link href="/contact" :class="{ 'active': $page.url === '/contact' }">Contact</Link>
            </li>
        </ul>
    </nav>
</template>
