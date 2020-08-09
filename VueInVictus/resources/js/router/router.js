import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/HomePageComponents/HomeComponent'
import About from '../views/ChooseUs/chooseUs'
import Blog from '../views/Blog/blog'
import PostDetail from '../views/Blog/PostDetail'
import Portfolio from '../views/Portfolio/Portfolio'
import PortfolioDetail from '../views/Portfolio/PortfolioDetail'
import Services from '../views/Services/Services'
import Career from '../views/Career/Career'
import Policy from '../views/Policy/Policy'
import Contact from '../views/GetInTouch/getInTouch'
Vue.use(Router);

export const router = new Router({
  mode: 'history',
  routes: [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/blog',
        name: 'blog',
        component: Blog
    },
    {
      path: "/post/:id",
      name: "post",
      component: PostDetail
    },
    {
        path: '/portfolio',
        name: 'portfolio',
        component: Portfolio
    },
    {
      path: "/portfolio/:id",
      name: "portfolioDetail",
      component: PortfolioDetail
    },
    {
        path: '/services',
        name: 'services',
        component: Services
    },
    {
        path: '/career',
        name: 'Career',
        component: Career
    },
    {
        path: '/policy',
        name: 'policy',
        component: Policy
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact
    },
    { path: '*', redirect: '/' }
  ]
});
