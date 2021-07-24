<template>
    <div> 
        <navbar-component></navbar-component>
        <br>
        <div class="container ">
            <div class="row">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Cari Info Vaksin Covid-19" aria-label="Search"
                        aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://covid19.go.id/storage/app/uploads/public/60f/a9d/f3a/60fa9df3a03c2631844942.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="https://covid19.go.id/berita/data-vaksinasi-covid-19-update-23-juli-2021">DATA VAKSINASI COVID-19 (UPDATE PER 23 JULI 2021)</a> </h5>
                            <a href="https://covid19.go.id/berita/data-vaksinasi-covid-19-update-23-juli-2021" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
img{
    width: 100px;
}
.card-title a{
    color: black;
    text-decoration: none;
}
</style>