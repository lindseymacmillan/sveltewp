<script>
    import Branding from '../../components/branding/Branding'
    import Menu from '../../components/menu/Menu'
    import Content from '../../components/content/Content'

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
    .super {
        display: flex;
        align-items: center;
        background: rgb(77, 77, 77);
    }
    .header {
        display: flex;
        align-items: center;
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
</style>

<div class="layout">
    <nav class="super">
        <Menu items={superMenuItems}/>
    </nav>
    <div class="header">
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
    <Content/>
</div>