import "bootstrap"
import "bootstrap/dist/css/bootstrap.min.css"
import "../css/app.css"

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import App from './App.vue'
import router from './router'

createApp(App).use(router).mount('#app')


