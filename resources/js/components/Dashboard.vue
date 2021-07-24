<template>
    <div>
        <navbar-component></navbar-component>
        <sidebar-component></sidebar-component>
        <div class="content-wrapper">            
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>          
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Kasus Konfirmasi</h5>
                                    <p class="card-text">
                                        3,082,410
                                    </p>
                                </div>
                            </div>
                            <div class="card card-warning card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Kasus Aktif</h5>
                                    <p class="card-text">
                                        569,901
                                    </p>
                                </div>
                            </div>
                            <div class="card card-green card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Sembuh</h5>
                                    <p class="card-text">
                                        2,431,911
                                    </p>
                                </div>
                            </div>
                            <div class="card card-danger card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Meninggal</h5>
                                    <p class="card-text">
                                        80,598
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</template>

<script>
export default {
  
}
</script>