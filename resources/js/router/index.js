import { createRouter, createWebHistory } from 'vue-router'

import HomeView from '../../components/HomeView.vue';
import UserView from '../../components/admin/UserView.vue';
import DonatonView from '../../components/DonationView.vue'
import LoginView from '../../components/auth/LoginView.vue';
import AdminView from '../../components/admin/AdminView.vue';
import RegisterView from '../../components/auth/RegisterView.vue';
import CategoryView from '../../components/admin/CategoryView.vue';
import UserDashboardView from '../../components/user/DashboardView.vue';
import EditProfileView from '../../components/admin/EditProfileView.vue';
import DonationStatusView from '../../components/user/DonationStatus.vue';
import EditHospitalView from '../../components/admin/EditHospitalView.vue';
import DonationHistoryView from '../../components/user/DonationHistory.vue'
import ReqestBloodView from '../../components/hospital/RequestBlood.vue'
import HospitalDashboardView from '../../components/hospital/DashboardView.vue';
import LoginHospitalView from '../../components/auth/hospital/LoginHospital.vue'
import RequestHistoryView from '../../components/hospital/RequestHistory.vue'
import RegisterHospitalView from '../../components/auth/hospital/RegisterHospital.vue'

const routes = [
  {
    path     : '/',
    name     : 'home',
    component: HomeView
  },
  {
    path     : '/register',
    name     : 'register',
    component: RegisterView
  },
  {
    path     : '/login',
    name     : 'login',
    component: LoginView
  },
  {
    path     : '/admin',
    name     : 'admin',
    component: AdminView
  },
  {
    path     : '/user',
    name     : 'user',
    component: UserView
  },
  {
    path     : '/admin-profile',
    name     : 'admin-profile',
    component: EditProfileView
  },
  {
    path     : '/hospital-list',
    name     : 'hospital-list',
    component: CategoryView
  },
  {
    path     : '/edit-hospital',
    name     : 'edit-hospital',
    component: EditHospitalView
  },
  {
    path     : '/register-hospital',
    name     : 'register-hospital',
    component: RegisterHospitalView
  },
  {
    path     : '/login-hospital',
    name     : 'login-hospital',
    component: LoginHospitalView
  },
  {
    path     : '/donation',
    name     : 'donation',
    component: DonatonView
  },
  {
    path     : '/user-dashboard',
    name     : 'user-dashboard',
    component: UserDashboardView
  },
  {
    path     : '/donation-history',
    name     : 'donation-history',
    component: DonationHistoryView
  },
  {
    path     : '/donation-status',
    name     : 'donation-status',
    component: DonationStatusView
  },
  {
    path     : '/hospital-dashboard',
    name     : 'hospital-dashboard',
    component: HospitalDashboardView
  },
  {
    path     : '/request-history',
    name     : 'request-history',
    component: RequestHistoryView
  },
  {
    path     : '/request-blood',
    name     : 'request-blood',
    component: ReqestBloodView
  },

]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router

