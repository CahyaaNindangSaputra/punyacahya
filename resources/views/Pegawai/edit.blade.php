@extends('Pegawai.layouts')
@section('content')
<div class="card">
  <div class="card-header">Edit Data Pegawai</div>
  <div class="card-body">
      
      <form action="{{ url('Pegawai/' .$Pegawai->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Pegawai->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="Nama" id="Nama" value="{{$Pegawai->Nama}}" class="form-control"></br>
        <label>Jabatan</label></br>
        <input type="text" name="Jabatan" id="Jabatan" value="{{$Pegawai->Nama}}" class="form-control"></br>
        <label>Umur</label></br>
        <input type="text" name="Umur" id="Umur" value="{{$Pegawai->Umur}}" class="form-control"></br>
        <label>Jenis Kelamin</label></br>
        <input type="text" name="jk" id="jk" value="{{$Pegawai->jk}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="Alamat" id="Alamat" value="{{$Pegawai->Alamat}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></b>
        <input TYPE="button" VALUE="KEMBALI"  class="btn btn-success" onClick="history.go(-1);">
    </form>
  
  </div>
</div>
@stop