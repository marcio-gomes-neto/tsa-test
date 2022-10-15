import { createRouter, createWebHashHistory } from 'vue-router'
import PostsView from '../views/PostsView.vue'
import UsersView from '../views/UsersView.vue'

const routes = [
  {
    path: '/',
    name: 'posts',
    component: PostsView
  },
  {
    path: '/users',
    name: 'users',
    component: UsersView
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
