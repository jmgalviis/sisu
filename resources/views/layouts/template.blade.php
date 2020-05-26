@extends('layouts.app')

@section('content')
@include('layouts.menu')
<div class="right-column">
	@include('layouts.usernavbar')
	<main class="main-content p-5">
		@yield('main')
	</main>
</div>
@endsection()
