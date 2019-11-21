import App from './App.svelte';

const app = new App({
	target: document.querySelector('#app'),
	props: {
		siteUrl: theme_data.url,
		userId: theme_data.userId,
	}
});

window.app = app;

export default app;