<script>
	import { onMount } from 'svelte';
    import Stacked from '../../layouts/stacked/Stacked'
    import Centered from '../../layouts/centered/Centered'
    import Sidebar from '../../layouts/sidebar/Sidebar'
    import Mobile from '../../layouts/mobile/Mobile'

    let width
    let layout

    onMount(async () => {
        width = window.innerWidth
        checkLayout()
	})

    const checkLayout = () => {
        if (width > 660) {
            layout = theme_data.layout
        } else {
            layout = 'mobile'
        }
    }

    const handleResize = () => {
        checkLayout()
    }

</script>

<svelte:window bind:innerWidth={width} on:resize={() => handleResize()}/>

<style>
</style>

<div>

    {#if layout == 'stacked'}
        <Stacked/>
    {/if}

    {#if layout == 'centered'}
        <Centered/>
    {/if}

    {#if layout == 'sidebar'}
        <Sidebar/>
    {/if}

    {#if layout == 'mobile'}
        <Mobile/>
    {/if}

</div>