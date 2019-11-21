<script>
    import { content } from '../../stores/contentStore.js'
</script>

<style>
    .content {
        width: 660px;
        margin: 0 auto;
    }
</style>

<div class="content">
    {@html $content}
</div>