@extends('layouts.app')

@section('content')
	<h1>Ecco i Treni</h1>
	<p>{{ $treni[0]->Company }}</p>
	@foreach ($treni as $treno)
		<p>compagnia: {{ $treno->Company }}</p>
	@endforeach
@endsection
