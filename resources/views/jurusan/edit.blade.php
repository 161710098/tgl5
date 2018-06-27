@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Edit Data jurusan
          <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('jurusan.update',$jurusan->id) }}" method="post" >
            <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}
            <div class="form-group {{ $errors->has('nama_jur') ? ' has-error' : '' }}">
              <label class="control-label">Jurusan</label>  
              <input type="text" name="nama_jur" value="{{ $jurusan->nama_jur }}" class="form-control"  required>
              @if ($errors->has('nama_jur'))nama_jur
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jur') }}</strong>
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