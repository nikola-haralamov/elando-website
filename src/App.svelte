<script>
  import Home from './lib/Home.svelte';
  import About from './lib/About.svelte';
  export let menu = 1;
</script>

<main>
  <ul id="menu">
    <li><a href="/" on:click|preventDefault={() => (menu = 1)}>Home</a></li> |
    <li><a href="/" on:click|preventDefault={() => (menu = 2)}>About</a></li>
  </ul>

  {#if menu === 1}
    <Home />
  {:else if menu === 2}
    <About />
  {:else}
    <h1>
      Page Not Found
    </h1>
  {/if}

  <p class="read-the-docs">
    Click on the Vite and Svelte logos to learn more
  </p>
</main>

<style>
  ul#menu li{
    display : inline;
  }
</style>