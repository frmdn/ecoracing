@extends('ui.template')


@section('content')

<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="flex-fill w-100">
								<div class="row">
									<div class="col-12">
                  		@foreach ($dataps as $d)
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">{{$d->clusters}}</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{ $d->total_ps}}</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Top 8 PS</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Kode Sales</th>
											<th class="d-none d-xl-table-cell">Team Leader</th>
											<th class="d-none d-xl-table-cell">Agency</th>
											<th class="d-none d-md-table-cell">Total PS</th>
										</tr>
									</thead>
									<tbody>
										@foreach($toptensf as $t)
										<tr>
											<td>{{ $t-> sfname }}</td>
											<td class="d-none d-xl-table-cell">{{ $t-> spv }}</td>
											<td class="d-none d-xl-table-cell">{{ $t-> agensi }}</td>
											<td class="d-none d-md-table-cell">{{ $t-> jml_ps }}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>


				
					</div>

				


			

			</main>

<main class="content">
				<div class="container-fluid p-0">

					
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Import
</button>

<!-- Modal -->
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
</div>



			</main>


      


@endsection