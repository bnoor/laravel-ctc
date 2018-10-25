<h4>{!! $loop->iteration !!} - {!! $article->name_formated !!}</h4> 
<p>{!! str_limit($article -> body, 50,'<a href="#">...</a>') !!}</p> 

<p>Created By: {!! $article->user->name !!}</p>

<p> {!! $article->publication_date !!}</p>
<hr>

@component('button')
	Read Next
@endcomponent