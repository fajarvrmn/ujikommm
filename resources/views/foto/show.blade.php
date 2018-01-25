@extends('layouts.zontal')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
				<li class="active">Foto mobil	</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title">Data Foto Mobil</h2>
				</div>
				<div class="panel-body">
					<div>
					<div class="col-md-4">
						<span class="pull-right"> <h3/>Foto Depan</span>
					<img src="{{asset('img/'.$foto->depan)}}" class="img img-responsive img-thumbnail" >
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto Belakang</span>
					<img src="{{asset('img/'.$foto->belakang)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto Samping Kiri</span>
					<img src="{{asset('img/'.$foto->kiri)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto Samping Kanan</span>
					<img src="{{asset('img/'.$foto->kanan)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto lainnya</span>
					<img src="{{asset('img/'.$foto->lainnya1)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto lainnya</span>
					<img src="{{asset('img/'.$foto->lainnya2)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto lainnya</span>
					<img src="{{asset('img/'.$foto->lainnya3)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto lainnya</span>
					<img src="{{asset('img/'.$foto->lainnya4)}}" class="img img-responsive img-thumbnail">
					</div>
					<div class="col-md-4">
						<span class="pull-right"><h3/>Foto lainnya</span>
					<img src="{{asset('img/'.$foto->lainnya5)}}" class="img img-responsive img-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection