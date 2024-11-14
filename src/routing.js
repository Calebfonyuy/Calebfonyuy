import { createWebHistory, createRouter } from "vue-router";

// Components
import HomePage from './components/HomePage.vue';

import Education from './components/sections/Education.vue';
import ProfessionalExperience from './components/sections/ProfessionalExperience.vue';
import Publications from './components/sections/Publications.vue';
import Service from './components/sections/Service.vue';
import Teaching from './components/sections/Teaching.vue';
import TechnicalSkills from './components/sections/TechnicalSkills.vue';
import Projects from './components/sections/Projects.vue';

import Contact from './components/extras/Contact.vue';

import NotFound from './components/errors/404.vue';

const routes = [
    {
        path: '',
        name: 'Home',
        component: HomePage
    },
    {
        path: '/education',
        name: 'Education',
        component: Education
    },
    {
        path: '/professional-experience',
        name: 'Professional Experience',
        component: ProfessionalExperience
    },
    {
        path: '/publications',
        name: 'Publications',
        component: Publications
    },
    {
        path: '/service',
        name: 'Service',
        component: Service
    },
    {
        path: '/teaching',
        name: 'Teaching',
        component: Teaching
    },
    {
        path: '/technical-skills',
        name: 'Technical Skills',
        component: TechnicalSkills
    },
    {
        path: '/projects',
        name: 'Projects',
        component: Projects
    },
    {
        path: '/contact',
        name: 'Contact',
        component: Contact
    },
    {
        path: '/:catchAll(.*)',
        name: 'NotFound',
        component: NotFound
    }
];

export default createRouter({
    history: createWebHistory(),
    linkActiveClass: 'active',
    routes
});