<template>

    <div>
        <nav
            class="navbar navbar-expand-lg navbar-light bg-danger p-4"
            v-show="$route.name != 'admin'  && $route.name != 'user' && $route.name != 'admin-profile' && $route.name != 'edit-hospital' && $route.name != 'hospital-list' &&  $route.name != 'user-dashboard' && $route.name !='donation-history' && $route.name !='donation-status' && $route.name !='request-blood' && $route.name !='request-history' && $route.name !='hospital-dashboard'"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4 class="text-white">
                        Blood Donation.com
                    </h4>
                </a>

                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <router-link to="/" class="text-white nav-link" :class="$route.name == 'home' ? 'nav-underline' : ''">
                                <font-awesome-icon icon="fa-solid fa-house" class="mr-1" />
                                Home
                            </router-link>
                        </li>

                        <li class="nav-item me-4">
                            <router-link to="/donation" class="text-white nav-link" :class="$route.name == 'donation' ? 'nav-underline' : ''">
                                <font-awesome-icon icon="fa-solid fa-location-pin"  class="mr-1" />
                                Donation
                            </router-link>
                        </li>

                        <li class="nav-item dropdown me-4">
                            <a class="nav-link text-white dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <font-awesome-icon icon="fa-solid fa-chart-line" class="mr-1" />
                                Dashboard
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li>
                                    <router-link
                                        to="/donation-history"
                                        class="text-danger nav-link dropdown-item"
                                    >
                                        User Dashboard
                                    </router-link>
                                </li>


                                <li>
                                    <router-link
                                        to="/request-history"
                                        class="text-danger nav-link dropdown-item"
                                    >
                                        Hospital Dashboard
                                    </router-link>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <router-link
                                        to="/hospital-list"
                                        class="text-danger nav-link dropdown-item"
                                    >
                                        Admin Dashboard
                                    </router-link>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item me-4">
                            <router-link to="/login" class="text-white nav-link" :class="$route.name == 'login' || $route.name == 'login-hospital' ? 'nav-underline' : ''">
                                <font-awesome-icon icon="fa-solid fa-right-to-bracket" class="mr-1" />
                                Login
                            </router-link>
                        </li>

                        <li class="nav-item me-4">
                            <router-link to="/register" class="text-white nav-link" :class="$route.name == 'register' || $route.name == 'register-hospital' ? 'nav-underline' : ''">
                                <font-awesome-icon icon="fa-solid fa-address-card" class="mr-1" />
                                Register
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <router-view></router-view>
    </div>

</template>

<script>
    export default {
        name : 'App',
    }
</script>
