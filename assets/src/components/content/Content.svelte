<script>
    import { content } from '../../stores/contentStore.js'
</script>

<style>
    .content {
        width: 100%;
    }
    .content :global(*) {
        width: 90%;
        max-width: 660px;
        margin-left: auto;
        margin-right: auto;
    }
    .content :global(.alignwide) {
        width: 90%;
        max-width: 960px;
        margin-left: auto;
        margin-right: auto;
    }
    .content :global(.alignfull) {
        width: 100%;
        max-width: 100%;
        margin-left: 0;
        margin-right: 0;
    }
</style>

<div class="content">
    {@html $content}
</div>