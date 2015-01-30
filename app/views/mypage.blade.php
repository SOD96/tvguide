@extends('layouts.master')
	

	@section('sidebar')
		@parent
		<li>this is item 3 created ont he flyu</li>
	@stop
	
	@section('content')
		@if ($name)
			<p>Hello, {{ $name }}</p>
		@else
			<p>Hello, unknown user</p>
		@endif

		<p>Welcome to my awesome wbesite</p>
	@stop
