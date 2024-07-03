@extends('layouts.app')

@section('content')
	<h1>Ecco i Treni</h1>
	{{-- <p>{{ $treni[0]->Company }}</p> --}}
	<div class="container">
		<div class="row">
			@foreach ($treni as $treno)
				<div class="card m-3" style="width: 18rem;">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Compagnia: {{ $treno->Company }}</li>
						<li class="list-group-item">Da: {{ $treno->Departure_station }} alle {{ $treno->Departure_time }}</li>
						<li class="list-group-item">A: {{ $treno->Arrival_station }} alle {{ $treno->Arrival_time }}</li>
						<li class="list-group-item">COD: {{ $treno->Train_code }}</li>
						{{-- MOLTO BRUTTO IL LAYOUT MA MI RICORDA CHE POSSO METTERE I TERNARI DOVE VOGLIO --}}
						<li class="list-group-item {{ $treno->On_time == true ? 'bg-success' : 'd-none' }}">In Orario:
							{{ $treno->On_time == true ? 'SI' : 'NO' }}</li>
						<li class="list-group-item {{ $treno->On_time == true ? 'd-none' : 'bg-danger' }}">Cancellato:
							{{ $treno->Cancelled == true ? 'SI' : 'NO' }}</li>
					</ul>
				</div>
			@endforeach
		</div>
	</div>
@endsection
