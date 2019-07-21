import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: resolve => (require(['./pages/Index'], resolve)),
    name: 'index'
  },
  {
    path: '*',
    component: resolve => (require(['./pages/NotFound'], resolve)),
    name: '404'
  },
]

const router = new VueRouter({
  mode: 'hash',
  routes
})

export default router
