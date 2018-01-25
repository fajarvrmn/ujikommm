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
					<p><a class="btn btn-danger" href="{{ route('Foto.create') }}">Tambah</a></p>
					
					@foreach($foto as $data)
					<div class="col-md-3">
						<span class="pull-right"><h4/>No.foto : {{$data->id}}</span>
					<a href="{{route('Foto.show',$data->id)}}">
					<img src="{{asset('img/'.$data->depan)}}" class="img img-responsive img-thumbnail img-circle"></a>
					<form action="{{route('Foto.destroy', $data->id )}}" method="post">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" >
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-danger" type="submit" value="Delete" >
						{{csrf_field()}}
					</form>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection