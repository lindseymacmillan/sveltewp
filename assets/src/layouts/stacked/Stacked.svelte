<script>
    import Branding from '../../components/branding/Branding'
    import Menu from '../../components/menu/Menu'
    import Content from '../../components/content/Content'
    import Footer from '../../components/footer/Footer'

    const primaryMenuItems = theme_data.primaryMenu
    const secondaryMenuItems = theme_data.secondaryMenu
    const superMenuItems = theme_data.superMenu
</script>

<style>
    .layout {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        width: 100%;
        min-height: 100vh;
    }
    .header :global(.branding){
        padding: 16px 16px 16px 0px;
    }
    .container {
        display: flex;
        align-items: center;
        width: 90%;
        max-width: 660px;
        margin: 0 auto;
    }
    .super {
        display: flex;
        align-items: center;
        color: #fff;
        background: rgb(77, 77, 77);
        --link-margin: 8px;
        --link-margin-first: 8px 8px 8px 0px;
        --link-margin-last: 8px 0px 8px 8px;
    }
    .nav {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .primary, .secondary {
        display: flex;
        justify-content: flex-end;
    }
    .primary {
        --link-margin: 0px 12px;
        --link-margin-first: 0px 12px 0px 0px;
        --link-margin-last: 0px 0px 0px 12px;
    }
    .secondary {
        font-size: 16px;
        --link-margin: 0px 8px;
        --link-margin-first: 0px 8px 0px 0px;
        --link-margin-last: 0px 0px 0px 8px;
    }
</style>

<div class="layout">
    <nav class="super">
        <div class="container">
            <Menu items={superMenuItems}/>
        </div>
    </nav>
    <div class="header">
        <div class="container">
            <Branding/>
            <div class="nav">
                <nav class="primary">
                    <Menu items={primaryMenuItems}/>
                </nav>
                <nav class="secondary">
                    <Menu items={secondaryMenuItems}/>
                </nav>
            </div>
        </div>
    </div>
    <Content/>
    <Footer/>
</div>