import { writable } from 'svelte/store'
import axios from 'axios'
import qs from 'qs'

function createContent() {

    const { subscribe, set, update } = writable(content_data.content);
    
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
            switch (data.type) {
                case 'content':
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
                    break;
                case 'unknown':
                    const el = document.createElement( 'html' );
                    el.innerHTML = data.html;
                    const script = el.querySelector('#content-data')
                    eval(script.innerHTML)

                    const title = content_data.title
                    const content = content_data.content

                    set(content)
                    document.title = title

                    if (args.history) {
                        const state = {
                            url: args.url,
                            title: title
                        }
                        switch (args.history) {
                            case 'push':
                                history.pushState(state, title, args.url);
                                break;
                            case 'replace':
                                history.replaceState(state, title, args.url);
                                break;
                        }
                    }
                    break;
            }
            if (data.type == 'content') {
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
                //window.location.href = args.url
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