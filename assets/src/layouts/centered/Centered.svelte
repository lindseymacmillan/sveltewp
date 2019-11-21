<script>
    import Branding from '../../components/branding/Branding'
    import Menu from '../../components/menu/Menu'
    import Content from '../../components/content/Content'
    import Footer from '../../components/footer/Footer'

    const primaryMenuItems = theme_data.primaryMenu
    const primaryHalf = Math.floor(primaryMenuItems.length / 2)  
    const primaryFirst = primaryMenuItems.slice(0, primaryHalf)
    const primarySecond = primaryMenuItems.slice(primaryHalf, primaryMenuItems.length)

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
    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 660px;
        width: 90%;
        margin: 0 auto;
    }
    .container-wide {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 90%;
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
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: min-content;
    }
    .nav :global(.branding) {
        padding: 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: rgb(10, 197, 141);
    }
    .primary, .secondary {
        display: flex;
        justify-content: flex-end;
    }
    .primary {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        --link-margin: 8px;
        --link-margin-first: 8px 8px 8px 0px;
        --link-margin-last: 8px 16px 8px 8px;
    }
    .secondary {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        --link-margin: 8px;
        --link-margin-first: 8px 8px 8px 16px;
        --link-margin-last: 8px 0px 8px 8px;
    }
</style>

<div class="layout">
    <nav class="super">
        <div class="container">
            <Menu items={superMenuItems}/>
        </div>
    </nav>
    <div class="header">
        <div class="container-wide">
            <div class="nav">
                <nav class="primary">
                    <Menu items={primaryMenuItems}/>
                </nav>
                <Branding/>
                <nav class="secondary">
                    <Menu items={secondaryMenuItems}/>
                </nav>
            </div>
        </div>
    </div>
    <Content/>
    <Footer/>
</div>