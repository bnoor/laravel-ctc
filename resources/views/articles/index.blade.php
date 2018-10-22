@extends('default')

@section('main')
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
@endsection

@section('title')
	Hello index
@endsection