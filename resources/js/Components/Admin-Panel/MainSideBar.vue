<template>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a :href="route('admin.dashboard.login')" class="brand-link">
            <img src="/images/Admin-panel/panel-logo.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
            <span class="brand-text font-weight-medium">WATER BOARD</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a :href="route('admin.dashboard.login')" class="nav-link active">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="25" height="25"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2Zm0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16Zm0 1c1.018 0 1.985.217 2.858.608L13.295 7.17a5 5 0 0 0-4.83 8.366L7.05 16.95l-.156-.161A7 7 0 0 1 12 5Zm6.392 4.143c.39.872.608 1.84.608 2.857a6.978 6.978 0 0 1-2.05 4.95l-1.414-1.414a5.008 5.008 0 0 0 1.295-4.83l1.561-1.563Zm-2.15-2.8l1.415 1.414l-3.725 3.726A2.003 2.003 0 0 1 12 14a2 2 0 1 1 .517-3.932l3.726-3.725Z" />
                            </svg>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a :href="route('employee.index')" class="nav-link">
                            <p>
                               Employee
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a :href="route('shop.index')" class="nav-link">
                            <p>
                               Shop
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="25" height="25"
                                viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M21.066 20.667c1.227-.682 1.068-3.31-.354-5.874c-.61-1.104-1.36-1.998-2.11-2.623a5.229 5.229 0 0 1-3.1 1.03a5.23 5.23 0 0 1-3.105-1.03c-.75.625-1.498 1.52-2.11 2.623c-1.423 2.563-1.58 5.192-.35 5.874c.548.312 1.126.078 1.722-.496a10.51 10.51 0 0 0-.167 1.874c0 2.938 1.14 5.312 2.543 5.312c.846 0 1.265-.865 1.466-2.188c.2 1.314.62 2.188 1.46 2.188c1.397 0 2.546-2.375 2.546-5.312c0-.66-.062-1.29-.168-1.873c.6.575 1.176.813 1.726.497zM15.5 12.2a4.279 4.279 0 1 0-.003-8.557A4.279 4.279 0 0 0 15.5 12.2zm8.594 2.714a3.514 3.514 0 0 0 0-7.025a3.513 3.513 0 1 0 .001 7.027zm4.28 2.13c-.502-.908-1.116-1.642-1.732-2.155a4.3 4.3 0 0 1-2.546.845c-.756 0-1.46-.207-2.076-.55c.496 1.093.803 2.2.86 3.19c.094 1.516-.38 2.64-1.328 3.165a2.017 2.017 0 0 1-.653.224c-.057.392-.096.8-.096 1.23c0 2.413.935 4.362 2.088 4.362c.694 0 1.04-.71 1.204-1.796c.163 1.08.508 1.796 1.2 1.796c1.145 0 2.09-1.95 2.09-4.36c0-.543-.053-1.06-.14-1.54c.492.473.966.668 1.418.408c1.007-.56.877-2.718-.29-4.82zm-21.468-2.13a3.512 3.512 0 1 0-3.514-3.512a3.515 3.515 0 0 0 3.514 3.514zm2.535 6.622c-1.592-.885-1.738-3.524-.456-6.354a4.242 4.242 0 0 1-2.078.553c-.956 0-1.832-.32-2.55-.846c-.615.512-1.228 1.246-1.732 2.153c-1.167 2.104-1.295 4.262-.287 4.82c.45.258.925.065 1.414-.406a8.83 8.83 0 0 0-.135 1.538c0 2.412.935 4.36 2.088 4.36c.694 0 1.04-.71 1.204-1.795c.165 1.08.51 1.796 1.2 1.796c1.147 0 2.09-1.95 2.09-4.36c0-.433-.04-.842-.097-1.234a2.02 2.02 0 0 1-.66-.226z" />
                            </svg>
                            <p>
                                Permission
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a :href="route('role.management')" class="nav-link">
                                    <p class="ml-4">Role</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a :href="route('admin.permission')" class="nav-link">
                                    <p class="ml-4">Permission</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a :href="route('logout')" method="post" class="nav-link">
                            <!-- <li class="nav-item" v-if="userPermissions.includes('Order Management')" > -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="25" height="20"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32v224c0 17.7 14.3 32 32 32s32-14.3 32-32V32zm-144.5 88.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
                            </svg>
                            <p class="ms-3">
                                Log out
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</template>
<script>
export default {
    name: 'MainSideBar',
    props: {
        userPermissions: {
            type: Array,
            required: true,
        },
    },
    mounted() {
        console.log('userPermissions:', this.userPermissions);
    }
};
</script>
<style>
.sidebar-color {
    /* background: #12181A; */
}
</style>
