@extends('layouts.admin')
@section('content')
<div class="container-fluid">

	<div class="row">
	<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Absensi 
			  	<div class="panel-title pull-right"><a href="{{ route('absen.create') }}">Tambah</a>
			  	</div>
			  </div>

			  <link rel = "stylesheet" type="text/css" href="/css/search.min.css"/>
               <script type="text/javascript" src="/css/searchh.min.js"></script>
             </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
			  		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

				  <table class="table" id="myTable">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Tanggal Absen</th>
					  <th>Kelas</th>
					  <th>Siswa</th>
					  <th>Keterangan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($absen as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->tgl_absen }}</td>
				    	<td>{{ $data->siswa->kelas->kelas }}</td>
				    	<td>{{ $data->siswa->nama }}</td>
				    	<td>{{ $data->keterangan}}</td>


				    	
<td>
	<a class="btn btn-warning" href="{{ route('absen.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('absen.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('absen.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <script>
	function myFunction(){
       var input, filter, table, tr, td, i;
       input = document.getElementById("myInput");
       filter = input.value.toupperCase();
      table = document.getElementById("myTable");
      tr = document.getElementById("tr");
       for(i = 0; i < tr.length; i++){
       	td = tr[i].getElementByIdTagName("td")[3];

       	if (td){
       		if (td.innerHTML.toupperCase().indexOf(filter)> -1)
       			tr[i].style.display = "";
       	}else {
       		tr[i].style.display ="none";
          }
       	}
       }
	





				  </script>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection