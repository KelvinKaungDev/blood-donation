import "bootstrap"
import "bootstrap/dist/css/bootstrap.min.css"
import "../css/app.css"
import "../css/admin.min.css"

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'

library.add(fas)

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import HospitalSidebar from '../components/hospital/SidebarView.vue'
import UserSidebar from '../components/user/SidebarView.vue'
import Sidebar from '../components/SidebarView.vue'
import App from './App.vue'
import router from './router'

createApp(App)
    .use(router)
    .component('font-awesome-icon', FontAwesomeIcon)
    .component('HospitalSidebar', HospitalSidebar)
    .component('UserSidebar', UserSidebar)
    .component('Sidebar', Sidebar)
    .mount('#app')

