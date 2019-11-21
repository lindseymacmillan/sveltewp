<script>
    const name = theme_data.name
    const description = theme_data.description
</script>

<style>
    .footer {
        padding: 44px 16px 16px 16px;
    }
    .container {
        display: flex;
        align-items: flex-start;
        width: 90%;
        max-width: 660px;
        margin: 0 auto;
    }
    h2, p {
        margin: 0;
        padding: 0;
        line-height: 1.2;
    }
</style>

<div class="footer">
    <div class="container">
        <div class="branding">
            <h2>{name}</h2>
            <p>{description}</p>
        </div>
    </div>
</div>