import {Tabs, Tab} from 'vue-tabs-component'

Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'setting-tool',
            path: '/setting-tool',
            component: require('./components/Tool'),
        },
    ])

    Vue.component('tabs', Tabs);
    Vue.component('tab', Tab);
})

