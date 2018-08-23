<?php

namespace App\Http\Controllers\Articles;

use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditTagAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EditTagAction $request, $id)
    {
        $tag = new Tags();

        return view('tags.formEdit', ['tags' => $tag::find( $id)]);

    }
}
