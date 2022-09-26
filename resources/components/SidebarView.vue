<template>
    <div>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">
                    Admin Dashboard
                </span>
            </a>

            <div class="sidebar">
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item mt-3">
                            <router-link to="/hospital-list" class="nav-link" :class="$route.name == 'category' ? 'text-white' : ''">
                                <font-awesome-icon icon="fa-solid fa-list" class="mr-3" />
                                Request Lists
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to="/user" class="nav-link" :class="$route.name == 'user' ? 'text-white' : ''">
                                <font-awesome-icon icon="fa-solid fa-users" class="mr-3" />
                                User
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to="/" class="nav-link">
                                <font-awesome-icon icon="fa-solid fa-backward" class="mr-3" />
                                Back
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <font-awesome-icon icon="fa-solid fa-right-from-bracket" class="mr-3" />
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
</template>

<script>
    export default {
        name : 'SidebarView'
    }
</script>
