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
    .menu {
        display: flex;
        flex-direction: column;
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
        <div class="menu">
            <Menu items={primaryMenuItems}/>
            <Menu items={secondaryMenuItems}/>
        </div>
    </div>
    <div class="content">
        <Menu items={superMenuItems}/>
        <Content/>
    </div>
</div>