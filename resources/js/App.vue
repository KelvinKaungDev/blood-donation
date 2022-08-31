<template>

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger p-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4 class="text-white">
                        Blood-Donation
                    </h4>
                </a>

                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <router-link to="/" class="text-white nav-link" :class="$route.name == 'home' ? 'nav-underline' : ''">
                                Home
                            </router-link>
                        </li>

                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="#">
                                <i class="fa-solid fa-van-shuttle"></i>
                                Hospitals
                            </a>
                        </li>

                        <li class="nav-item me-4">
                            <router-link to="/login" class="text-white nav-link" :class="$route.name == 'login' ? 'nav-underline' : ''">
                                Login
                            </router-link>
                        </li>

                        <li class="nav-item me-4">
                            <router-link to="/register" class="text-white nav-link" :class="$route.name == 'register' ? 'nav-underline' : ''">
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
