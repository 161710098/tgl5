@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Edit Data Absensi
          <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('absensi.update',$absensi->id) }}" method="post" >
            <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}




              <div class="form-group {{ $errors->has('nama_siswa') ? ' has-error' : '' }}">
              <label class="control-label">Nama</label>  
              <input type="text" name="a" value="{{ $absensi->siswa->nama_siswa }}" class="form-control"  required>
              @if ($errors->has('nama_siswa'))nama_siswa
              <span class="help-block">
              <strong>{{ $errors->first('nama_siswa') }}</strong>
              </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
              <label class="control-label">Kelas</label>  
              <input type="text" name="b" value="{{ $absensi->kelas->nama_kelas }}" class="form-control"  required>
              @if ($errors->has('nama_kelas'))nama_kelas
              <span class="help-block">
              <strong>{{ $errors->first('nama_kelas') }}</strong>
              </span>
              @endif
            </div>


 
            <div class="form-group">
          <label class="control-label"> Keterangan </label><br>
          <input type="radio" name="c" required="" value="Sakit" <?php if($absensi->keterangan == "Sakit") {echo "checked";} ?>> Sakit
          <input type="radio" name="c" required="" value="Ijin" <?php if($absensi->keterangan == "Ijin") {echo "checked";} ?>> Ijin
          <input type="radio" name="c" required="" value="Alpa" <?php if($absensi->keterangan == "Alpa") {echo "checked";} ?>> Alpa 
        </div>
            
            <div class="form-group {{ $errors->has('d') ? ' has-error' : '' }}">
              <label class="control-label">Tanggal</label>  
              <input type="date" name="d" value="{{ $absensi->tgl }}" class="form-control"  required>
              @if ($errors->has('d'))d
              <span class="help-block">
              <strong>{{ $errors->first('d') }}</strong>
              </span>
              @endif
            </div>

            



           
            

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </div>
</div>
@endsection