import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {path: '/', component: require('./pages/Index').default, name: 'index'},
  {path: '/share', component: require('./pages/Share').default, name: 'share'},
  {path: '/certificate', component: require('./pages/Share').default, name: 'share'},
  {path: '*', component: require('./pages/NotFound').default, name: '404'},
]

const router = new VueRouter({
  // mode: 'history',
  routes
})

export default router
