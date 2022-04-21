@extends('Pegawai.layouts')
@section('content')
<div class="card">
  <div class="card-header">Lihat Data Pegawai</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $Pegawai->Nama }}</h5>
        <h5 class="card-title">Jabatan : {{ $Pegawai->Jabatan }}</h5>
        <p class="card-text">Umur : {{ $Pegawai->Umur }}</p>
        <p class="card-text">Jenis Kelamin : {{ $Pegawai->jk}}</p>
        <p class="card-text">Alamat: {{ $Pegawai->Alamat}}</p>
        <input TYPE="button" VALUE="KEMBALI"  class="btn btn-success" onClick="history.go(-1);">
  </div>
      
    </hr>
  
  </div>
</div>