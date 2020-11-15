@extends('template.base')

@section('content')
	<div class="container"> 
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Kategori
					</div>
					<div class="card-body">
						<h3>{{$kategori->nama}}</h3>
						<hr>
						<p>
							Rp. {{number_format($kategori->harga)}} |
							Stok : {{$kategori->stok}} |
							Berat : {{$kategori->berat}} gr
						</p>
						<p>
							{!! nl2br($kategori->deskripsi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection