@extends('layouts.app')


@section('content')

 
    <div class="container">
     <div class="row margin-custom">
     	<div class="col-md-12">
     		 <div class="card">
		      	<div class="card-body">
		      		<div class="row">
		      			<div class="col-md-5">

                            <img src="{{asset($produk->image)}}"  width="100%" class=" mr-1">
		      			</div>
		      			<div class="col-md-7">
		      				<h1>{{$produk->nama_produk}}</h1>
		      				<hr>
                            <div class="alert alert-success" role="alert">
                              <span class="text-alert ml-3">Dapatkan diskon dengan me-masukan kode diskon!</span>
                            </div>
		      				<h1 class="price-produk-style">{{$produk->price_produk}}</h1>
                            <h5 class="display-one"><i class="fas fa-shield-alt"></i> Tersedia >200 barang</h5>
                            <h5 class="display-two">Masukan Jumlah yang di inginkan.</h5>
                        	<br>
                        	<a href="" class="btn btn-success btn-block shadow-sell no-bords">Beli Besok</a>
                        	
                           <div class="display-trust mt-3">
                                <h5 class="display-one"><i class="fas fa-shield-alt"></i> Jaminan 100% uang aman</h5>
                           </div>
                           <div class="display-trust-2 font">
                               <h5 class="display-two">Uang pasti kembali.sistem pembayaran bebas penipuan.</h5>
                                <h5 class="display-two">Barang tidak sesuai pesanan? ikuti langkah disini</h5>
                           </div>
		      			</div>
		      		</div>
		      	</div>
		      </div>
     	</div>

     	
     </div>


     <div class="row mt-3">
     	<div class="col-md-9">
     		<div class="card p-5 top-border">
     			<div class="card-body font">
                    <div class="row  mt-4">
                        <div class="col-md-2 line-hets">
                            <p>Informasi</p>
                        </div>
                        <div class="col-md-5 line-hets">
                            <p><i class="fas fa-tag text-certs"></i> Kondisi : <span class="badge badge-primary">New</span></p>
                            <p> <i class="fas fa-shopping-cart text-certs"></i> Terjual : bagus</p>
                            <p><i class="fas fa-eye text-certs"></i> Dilihat : bagus</p>
                        </div>
                         <div class="col-md-5 line-hets">
                            <p> <i class="fas fa-heart  text-certs"> </i> Difavoritkan : bagus</p>
                            <p><i class="far fa-clock text-certs"></i> Diperbarui   : bagus</p>
                        </div>
                    </div><hr>
                      <div class="row">
                        <div class="col-md-2 line-hets">
                            <p>Spesifikasi</p>
                        </div>
                        <div class="col-md-5 line-hets">
                            <p>Kategori : bagus</p>
                            <p>Berat : {{$produk->berat}}</p>
                            <p>Merek : {{$produk->merek}}</p>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-2 line-hets">
                            <p>Deskripsi</p>
                        </div>
                        <div class="col-md-10 ">
                            <p>{!!$produk->desc_produk!!}</p>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-2 line-hets">
                            <p>Catatan</p>
                        </div>
                        <div class="col-md-10 ">
                            <p>{!!$produk->catatan_produk!!}</p>
                        </div>
                    </div>
                </div>
     		</div>
      
     	</div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('img/aa.jpeg')}}" width="100%" class="rounded-circle" height="50%">
                        </div>
                        <div class="col-md-6 line-hetz">
                           <h5 class="dropand-profile">Evan Fadhal</h5>
                           <h5 class="dropand-profile">Dunia</h5>
                           <h5 class="display-two"><i class="fas fa-map-marker-alt"></i> DEPOK</h5>
                        </div>
                    </div>        
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
     </div>


    </div>




@endsection