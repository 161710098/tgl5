@extends('layouts.admin')
@section('content')
<div class="container-fluid">

	<div class="row">
	<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Kelas
			  	<div class="panel-title pull-right"><a href="{{ route('kelas.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kelas</th>
					  <th>Jurusan</th>
					  <th>Wali Kelas</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($kelas as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kelas }}</td>
				    	<td>{{ $data->jurusan }}</td>
				    	<td>{{ $data->wali_kelas }}</td>
				    	
<td>
	<a class="btn btn-warning" href="{{ route('kelas.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('kelas.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
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
</div>
@endsection