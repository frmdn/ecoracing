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
      <th scope="col">Nama SPV</th>
      <th scope="col">Kode SPV</th>
      <th scope="col">Nama Agency</th>
      <th scope="col">Jumlah SF</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($spv as $a)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td>{{ $a->nama_spv }}</td>
      <td>{{ $a->kode_spv }}</td>
      <td>{{ $a->agency->nama_agency }}</td>
      <td>{{ $a->salesforce_count }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

				</div>
				</div>
				</div>
			</main>


@endsection



