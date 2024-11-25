import '../css/app.css';
import './bootstrap';

import { createInertiaApp, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

//primevue
import PrimeVue from 'primevue/config';
import Aura from '@primevue/themes/aura';
import Ripple from 'primevue/ripple';

//components
import Button from 'primevue/button';

//primevue forms
import InputText from 'primevue/inputtext';

//aerocast
import AppLayout from './Layouts/App.vue'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, {
                ripple: true,
                theme: {
                    preset: Aura
                }
            })
            .use(ZiggyVue)
            .component('App', AppLayout)
            .component('v-link', Link)
            .component('Button', Button)
            .component('InputText', InputText)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
