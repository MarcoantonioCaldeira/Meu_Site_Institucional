import { createRouter, createWebHashHistory } from 'vue-router'
import Inicio from '../views/Inicio.vue' //Nome do componente da view
import vueScrollBehavior from 'vue-scroll-behavior'

const routes = [
  {
    path: '/',
    name: 'Inicio',
    component: Inicio
  },
  
  // const options = {
  //   top: document.querySelector(to.hash).offsetTop,
  //   behavior: 'smooth',
  // };
  // window.scrollTo(options)

]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
