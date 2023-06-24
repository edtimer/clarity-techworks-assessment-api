import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    //the following creates a vue app
    createApp({ render: () => h(App, props) })
    //using inertia plugin
      .use(plugin)
      .mount(el)
  },
})