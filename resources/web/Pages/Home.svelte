<script lang="ts">
    import Layout from '../Layout.svelte'

    export let user
</script>

<svelte:head>
    <title>Home</title>
    <meta name="description" content="Your page description" />
</svelte:head>


<Layout>
    <h1>Welcome</h1>
    <p>Hello {user}, Home</p>
</Layout>
