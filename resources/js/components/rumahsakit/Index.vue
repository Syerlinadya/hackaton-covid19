<template>
    <div>
        <navbar-component></navbar-component>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Data Rumah Sakit</h4>
                        <div class="card card-primary card-outline">
                        <div class="card-body">
                            <router-link class="btn btn-info mb-2" to="/rumahsakit/tambah">
                                <i class="fas fa-plus"></i> Tambah
                            </router-link>
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Rumah Sakit</th>
                                    <th>Alamat</th>
                                    <th>Provinsi</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(r, index) in rumahsakit" :key="index">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ r.nama }}</td>
                                        <td>{{ r.alamat }}</td>
                                        <td>{{ r.nama_provinsi }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <router-link class="btn btn-success" :to="{ name : 'detailrumahsakit' , params : { id : r.id } }">Detail</router-link>                                                        
                                                <router-link class="btn btn-warning" :to="{ name : 'editrumahsakit' , params : { id : r.id } }">Edit</router-link>  
                                                <button type="button" @click="hapus(r.id)" class="btn btn-danger">Hapus</button>                                                      
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
            rumahsakit : []
        }
    },
    created() {
        axios.get('http://localhost:8000/api/rumahsakit')
        .then( res => {
            this.rumahsakit = res.data
        })
    },
    methods : {
        hapus(id) {
            this.axios.delete(`http://localhost:8000/api/rumahsakit/${id}`)
            .then( res => {
                let i = this.rumahsakit.map(item => item.id).indexOf(id);
                this.rumahsakit.splice(i, 1);
            });
        }
    }
}
</script>