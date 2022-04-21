@extends('Pegawai.layouts')
@section('content')
<div class="card">
  <div class="card-header">Menambahkan Pegawai</div>
  <div class="card-body">
      
      <form action="{{ url('Pegawai') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="Nama" id="Nama" class="form-control"></br>
        <label>Jabatan</label></br>
        <input type="text" name="Jabatan" id="Jabatan" class="form-control"></br>
        <label>Umur</label></br>
        <input type="text" name="Umur" id="Umur" class="form-control"></br>
        <label>Jenis Kelamin</label></br>
        <input type="text" name="jk" id="jk" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="Alamat" id="Alamat" class="form-control"></br>
        <input type="submit" value="SIMPAN" class="btn btn-success"></b>
       
        <input TYPE="button" VALUE="KEMBALI"  class="btn btn-success" onClick="history.go(-1);">
        
    </form>
  
  </div>
</div>
@stop