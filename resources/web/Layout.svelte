<script>
    import { inertia } from '@inertiajs/svelte'
</script>

<header>
    <nav>
        <a use:inertia href="/">Home</a>
        <a use:inertia href="/about">About</a>
        <a use:inertia href="/contact">Contact</a>
    </nav>
</header>

<main>
    <slot />
</main>
<footer>
    <a use:inertia href="/">Home</a>
    <a use:inertia href="/about">About</a>
    <a use:inertia href="/contact">Contact</a>
</footer>
