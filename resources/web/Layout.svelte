<script>
    import { inertia } from '@inertiajs/svelte'
</script>

<header>
    <div class="logo">
        <img src="./static/logo.svg" alt="" width="86" height="58" />
    </div>
    <nav>
        <a use:inertia href="/">Home</a>
        <a use:inertia href="/about">About</a>
        <a use:inertia href="/contact">Contact</a>
    </nav>
</header>

<main>
    <slot />
</main>
