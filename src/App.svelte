<script>
  import Home from './Pages/Home.svelte';
  import About from './Pages/About.svelte';
  export let menu = 1;
</script>

<header>
  <div class="container">
    <img src="./logo.svg" alt="logo" />
    <nav>
      <a href="/" on:click|preventDefault={() => (menu = 1)}>Home</a>
      <a href="/about" on:click|preventDefault={() => (menu = 2)}>About</a>
    </nav>
  </div>
</header>

<main>

  <div class="container">
  </div>


  {#if menu === 1}
    <Home />
  {:else if menu === 2}
    <About />
  {:else}
    <h1>
      Page Not Found
    </h1>
  {/if}

  <div class="leftaa"></div>
</main>

<style>
  ul#menu li{
    display : inline;
  }

  .leftaa {
    z-index: -1;
    top: 10rem;
    left: -30rem;
    position: absolute;
    fill: var(--Cyan, #00E5FF);
    mix-blend-mode: screen;
    filter: blur(230px);
    width: 838.17px;
    height: 838.17px;
    transform: rotate(-60deg);
    transform-origin: 0 0;
    opacity: 0.25;
    background: #00E5FF;
    /*box-shadow: 460px 460px 460px; */
    /*filter: blur(460px)*/

  }

</style>