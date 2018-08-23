<?php

namespace App\Http\Controllers\Articles;

use App\Http\Requests\EditTagRequest;
use App\Tags;
use App\Http\Controllers\Controller;

class UpdateTagAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EditTagRequest $request)
    {
        $tag = new Tags();
        $tag = $tag::find($request->tag);
        $tag->name = $request->get('name');
        $tag->save();

        return redirect()->route('tags.list');
    }
}
