@extends('default')



@section('title')
	Hello index
@endsection

@section('css')
	<style>
		@media print{
			.hidden-print{display: none}
		}
	</style>
@endsection

@section('main')
<button class="hidden-print" onclick="window.print()">Print</button>

<form action="" class ="form-inline">
	<input type="search" value = "{{ request('search') }}" class = "form-control; hidden-print" placeholder = "Find..." name ="search" size = 60>
	<button class="btn btn-warning"><i class ="fa fa-search; hidden-print"></i></button>
</form>

<h1>Articles List</h1>
@php
	$var=10;
@endphp

@isset($var)
	variable exist
@else
	variable doesn't exist
@endisset

@empty($var)
	variable empty
@else
	variable not empty
@endempty

@forelse($articles as $article)
	@if($loop->first)
		First Article
	@endif
	@if($loop->last)
	Last Article
	@endif
		@include('articles._article')
@empty
	<h3>No Articles to Display</h3>
@endforelse
{!! $articles->appends(['search' => request('search')])->links() !!}
@endsection