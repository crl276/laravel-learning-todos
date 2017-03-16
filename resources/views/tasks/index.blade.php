@extends('layouts.app')

@section('content')

<div class="panel-body">

	@include('common.errors')

	<form action="/task" method="POST" class="form-horizontal">
		{{ csrf_field() }}
	</form>
</div>