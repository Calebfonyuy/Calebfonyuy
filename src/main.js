// Framework Libraries
import { createApp } from 'vue'

// Assets
import './style.css'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap'

// Components 
import App from './App.vue'

// Router
import router from './routing'

createApp(App)
    .use(router)
    .mount('#app')
