@extends('layouts.main')

@section('content')
<div class="p-3" style="display: flex; justify-content: space-between;">
  <h1>
    Dompet Keluar
  </h1>
  <a href="/out/create" style="align-self: center">Tambah</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Kode</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nilai</th>
      <th scope="col">Dompet</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     <?php $n=1; ?>
    @foreach ($data as $d)
    <tr>
      <th scope="row">{{ $n; }}</th>
      <td>{{ $d['tanggal'] }}</td>
      <td>{{ $d['kode'] }}</td>
      <td>{{ $d['deskripsi'] }}</td>
      <td>{{ $d->kategori['nama'] }}</td>
      <td>{{ $d['nilai'] }}</td>
      <td>{{ $d->dompet['nama'] }}</td>
      <td></td>
    </tr>
    <?php $n++; ?>
    @endforeach
  </tbody>
</table>
@endsection