<script>
    export let items
</script>

<style>
</style>

{#each items as item (item.ID)}
    <a href="{item.url}">{item.title}</a>
{/each}