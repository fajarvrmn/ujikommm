@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12  ">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li class="active">Akun admin</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					
					<h2 class="panel-title">Akun admin</h2>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>No </th>
								<th>Username</th>
								<th>Email</th>
								
								<th colspan="3">Action</th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($akun as $data)
							<tr>
							<td>{{$no++}}</td>
							<td>{{$data->name}}</td>
							<td>{{$data->email}}</td>
							
						
						
								
								<td>
	

              
           
									<form  action="{{route('Akun.destroy', $data->id )}}" method="post">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" >
										<input  class="btn btn-danger" type="submit" value="Delete" >
										{{csrf_field()}}
									</form>
								</td>
				</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
