import { writable } from 'svelte/store'
import axios from 'axios'
import qs from 'qs'

function createContent() {

    const { subscribe, set, update } = writable('<h3>Some content</h3>');
    
    const fetchContent = (args) => {

        let route = 'sveltewp/v1/content'

        return axios.post(wpApiSettings.root + route,
            qs.stringify({
                'action': 'fetch',
                'payload': {url: args.url},
            }),
            {headers: {'X-WP-Nonce': wpApiSettings.nonce} }
        )
        .then(function (response) {
            const data = response.data.return
            if (data !== 'NOT_FOUND') {
                set(data.content)
                document.title = data.title
                if (args.history) {
                    const state = {
                        url: args.url,
                        title: data.title
                    }
                    switch (args.history) {
                        case 'push':
                            history.pushState(state, data.title, args.url);
                            break;
                        case 'replace':
                            history.replaceState(state, data.title, args.url);
                            break;
                    }
                }
            } else {
                window.location.href = args.url
            }
        })
        .then(function (error) {
            if (error) {
                console.error(error)
            }
        })
    }

	return {
		subscribe,
		fetch: (url) => fetchContent(url),
	};
}

export const content = createContent();