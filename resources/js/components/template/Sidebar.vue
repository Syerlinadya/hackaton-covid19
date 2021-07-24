<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <router-link to="/dashboard" class="brand-link">
            <span class="brand-text font-weight-light">Covid-19</span>        
        </router-link>
        
        <!-- Sidebar -->
        <div class="sidebar">             

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Beranda</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name:'siswa'}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Vaksinasi Covid-19</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'buku'}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Rumah Sakit Rujukan</p>
                    </router-link>
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
    
}
</script>