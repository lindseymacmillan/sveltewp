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
        position: absolute;
        display: flex;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
    .sidebar {
        height: 100%;
        width: 240px;
        overflow-y: scroll;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    }
    .sidebar :global(.branding) {
        color: #fff;
        background: rgb(77, 178, 196);
        padding: 46px 16px 16px 16px;
    }
    .primary {
        display: flex;
        flex-direction: column;
        font-size: 22px;
        --link-margin: 4px 16px;
        --link-margin-first: 16px 16px 4px 16px;
        --link-margin-last: 4px 16px 16px 16px;
    }
    .secondary {
        display: flex;
        flex-direction: column;
        --link-margin: 2px 16px;
        --link-margin-first: 16px 16px 2px 16px;
        --link-margin-last: 2px 16px 16px 16px;
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
    .container {
        display: flex;
        align-items: center;
        width: 90%;
        max-width: 660px;
        margin: 0 auto;
    }
    .content {
        height: 100%;
        flex: 1;
        overflow-y: scroll;
    }
</style>

<div class="layout">
    <div class="sidebar">
        <Branding/>
        <nav class="primary">
            <Menu items={primaryMenuItems}/>
        </nav>
        <nav class="secondary">
            <Menu items={secondaryMenuItems}/>
        </nav>
    </div>
    <div class="content">
        <nav class="super">
            <div class="container">
                <Menu items={superMenuItems}/>
            </div>
        </nav>
        <Content/>
        <Footer/>
    </div>
</div>