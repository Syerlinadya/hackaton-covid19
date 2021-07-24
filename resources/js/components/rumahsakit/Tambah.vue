<template>
    <div>
        <navbar-component></navbar-component>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Form Tambah Rumah Sakit</h4>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Rumah Sakit Baru</h3>
                        </div>
                        <form @submit.prevent="tambah">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Rumah Sakit</label>
                                    <input type="text" class="form-control" v-model="rumahsakit.nama">
                                </div>                                       
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea rows="4" class="form-control" v-model="rumahsakit.alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-control" v-model="rumahsakit.provinsi_id">                                                   
                                        <option v-for="p in provinsi" :key="p.id" :value="p.id" >{{ p.nama_provinsi }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <router-link to="/rumahsakit">Kembali</router-link> 
                            </div>
                        </form>
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
            rumahsakit : {},
            provinsi : {}
        }
    },
    created() {        
        axios.get('http://localhost:8000/api/provinsi')
        .then( res => {
            this.provinsi = res.data
        })
    },
    methods : {
        tambah() {
            axios.post('http://localhost:8000/api/rumahsakit', this.rumahsakit)
            .then( res => {
                this.$router.push({
                    name:"rumahsakit"
                });
            })
            .catch( err => console.log(err))
        }
    }
}
</script>