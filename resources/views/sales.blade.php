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
      <th scope="col">Nama Sales</th>
      <th scope="col">Kode Sales</th>
      <th scope="col">Nama SPV</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($salesforce as $s)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td>{{ $s->nama_sf }}</td>
      <td>{{ $s->kode_sf }}</td>
      <td>{{ $s->spv->nama_spv }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
        </div>
				</div>
			</main>


@endsection
