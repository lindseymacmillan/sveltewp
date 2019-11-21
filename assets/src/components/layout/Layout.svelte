<script>
    import Stacked from '../../layouts/stacked/Stacked'
    import Centered from '../../layouts/centered/Centered'
    import Sidebar from '../../layouts/sidebar/Sidebar'

    const layout = theme_data.layout
</script>

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

</div>