<script lang="ts">
    import Layout from '../Layout.svelte'

    export let user
</script>

<svelte:head>
    <title>Contact</title>
    <meta name="description" content="Your page description" />
</svelte:head>


<Layout>
    <h1>Welcome</h1>
    <p>Hello {user}, Contact</p>
</Layout>
