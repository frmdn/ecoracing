@extends('ui.template')


@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<div class="card flex-fill">
<div class="card-header">

<h5 class="card-title mb-0">List Karyawan</h5>




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Agency</th>
      <th scope="col">Inisial</th>
      <th scope="col">Alamat Agency</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($agency as $a)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td>{{ $a->nama_agency }}</td>
      <td>{{ $a->singkatan_agency }}</td>
      <td>{{ $a->alamat_kantor }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

				</div>
				</div>
				</div>
			</main>


@endsection



