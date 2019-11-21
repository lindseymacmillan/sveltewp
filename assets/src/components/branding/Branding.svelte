<script>
    const name = theme_data.name
    const description = theme_data.description
    const url = theme_data.url
</script>

<style>
    .link {
        display: contents;
    }
    .branding {
        background: rgb(252, 156, 156);
        padding: 16px;
    }
    h2, p {
        margin: 0;
        padding: 0;
        line-height: 1.2;
    }
</style>

<a class="link" href={url}>
    <div class="branding">
        <h2>{name}</h2>
        <p>{description}</p>
    </div>
</a>