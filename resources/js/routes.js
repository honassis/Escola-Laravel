import Vue from 'vue'
import VueRouter from 'vue-router'
import Students from '@/js/views/Students'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/students',
            name: 'students',
            component: Students
        },
       
    ]
});

export default router;