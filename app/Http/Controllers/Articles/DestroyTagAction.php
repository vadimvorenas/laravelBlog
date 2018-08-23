<?php

namespace App\Http\Controllers\Articles;

use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestroyTagAction extends Controller
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
        $tag::destroy($request->tag);
        return redirect()->route('tags.list');
    }
}
