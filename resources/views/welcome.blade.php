@extends('layouts.app')


@section('content')

<section class="heading-sec">
    <div class="container">
        <div class="row justify-content-center margin-custom rows">
            <div class="col-md-8">
                <div class="display-4">menjual barang original</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="btn btn-success">lihat product</div> 
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>

<div class="container">

			<div class="row mt-5 font">
				<div class="col-lg-7">
					<h2 class="category-utama">Produk</h2>
					<hr>
				</div>
			</div>
			<section class="content-dua">
				
				<div class="row">

					@foreach ($produks as $produk)
					<div class="col-md-3">
						<div class="card clickables mt-3">
							<img class="card-img-top" src="/storage/{{$produk->image}}" alt="Card image cap">
							<div class="card-body len-het">
								<h5 class="text-welcome-produk"><a href="{{route('showit', ['produk' => $produk->id])}}">{{$produk->nama_produk}}</a></h5>
								<h3 class="price-welcome-page">{{$produk->price_produk}}  <i class="fas fa-tags mb-2 tags-price"></i> </h2>
							</div>
						</div>
					</div>
					@endforeach

				</div>

				<div class="row mt-3"> {{$produks->links()}}</div>

			</section>
</div>






@endsection