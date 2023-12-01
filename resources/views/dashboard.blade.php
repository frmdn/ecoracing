@extends('ui.template')


@section('content')

<main class="content">
				<div class="container-fluid p-0">

					
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Import
</button> -->

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" name="file">
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
      </form>
    </div>
  </div>
</div> -->

<div class="card flex-fill">
<div class="card-header">

<h5 class="card-title mb-0">List Karyawan</h5>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $user->nama }}</td>
      <td>{{ $user->nik }}</td>
      <td>{{ $user->loker }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

				</div>
			</main>


@endsection