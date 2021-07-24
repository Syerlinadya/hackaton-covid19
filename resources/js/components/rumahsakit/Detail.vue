<template>
    <div>
        <navbar-component></navbar-component>
        <br><br>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Detail Rumah Sakit </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header">
                            <div class="card-body text-justify">
                                <h5 class="mb-3">{{rumahsakit.nama}}</h5>
                                <h6>Alamat : {{rumahsakit.alamat}}</h6>
                                

                                <h6>Provinsi: {{rumahsakit.nama_provinsi}}</h6>
                                
                                 <button type="button" @click="hapus" class="btn btn-danger">Hapus</button>                                                     
                                <router-link class="btn btn-primary" to="/rumahsakit">Kembali</router-link>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
           rumahsakit : {}
        }
    },
    created() {       
        axios.get(`http://localhost:8000/api/rumahsakit/${this.$route.params.id}`)
        .then(res => {
            this.rumahsakit = res.data
        })
        .catch(err => console.log(err))
    }
}
</script>