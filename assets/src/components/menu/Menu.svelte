<script>
    export let items
</script>

<style>
    .link {
        margin: var(--link-margin);
    }
    a {
        font-size: 16px;
        color: inherit;
        text-decoration: none;
    }
    .link:first-of-type {
        margin: var(--link-margin-first);
    }
    .link:last-of-type {
        margin: var(--link-margin-last);
    }
</style>

{#each items as item (item.ID)}
    <a class="link" href={item.url}>{item.title}</a>
{/each}