<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        Tag::create([
            'name' => $request->get('name'),
        ]);
        return redirect('/');
    }
}
