<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function user($id, $name)
    {
        return "Bonjour id: $id, nom: $name";
    }
}
