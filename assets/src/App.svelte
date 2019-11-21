<script>
    import Layout from './components/layout/Layout.svelte'
    import { content } from './stores/contentStore.js'
    import { onMount } from 'svelte'

    export let siteUrl

    onMount(async () => {
        content.fetch({url: window.location.href, history: 'replace'})
	})

    function handleClick (evt) {
        const link = evt.target.closest('a')
        if (link && link.href) {
            if (link.href.includes(siteUrl)) {
                const type = link.getAttribute('data-item-type')
                const id = link.getAttribute('data-item-id')
                evt.preventDefault()
                content.fetch({url: link.href, history: 'push'})
            }
        }
    }

    function handlePopState (evt) {
        content.fetch({url: event.state.url})
    }

</script>

<style>
.app {
    width: 100%;
}
</style>

<svelte:window on:click={handleClick} on:popstate={handlePopState} />

<div class="app">
    <Layout/>
</div>