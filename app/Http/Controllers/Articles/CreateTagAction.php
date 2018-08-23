<?php

namespace App\Http\Controllers\Articles;

use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateTagAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tag = new Tags();

        return view('tags.form', ['tags' => $tag]);
    }
}
