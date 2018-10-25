<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
	protected $fillable=['name', 'body', 'user_id', 'published_at'];

	public function getNameFormatedAttribute()
	{
		return str_replace(request('search'), '<mark>'.request('search').'</mark>', $this->attributes['name']);
	}

	public function getPublicationDateAttribute()
	{
		return Carbon::parse($this->attributes['published_at'])->diffForHumans();
	}

	public function scopeRecherche($q, $search)
		{
			$q->where('name', 'like', "%$search%")
	        ->orWhere('body', 'like', "%search%");
	   	}

	public function user()
	{
		return $this->belongsTo(User::class);//article belongs to one user
	}
}
