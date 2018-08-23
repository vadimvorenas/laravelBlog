<?php

namespace App\Http\Controllers\Articles;

use App\Http\Requests\StoreTagRequest;
use App\Http\Controllers\Controller;
use App\Tags;

class StoreTagAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreTagRequest $request)
    {
        $tag = new Tags();
        $tag->name = $request->get('name');
        $tag->save();

        return redirect()->route('tags.list');
    }
}
