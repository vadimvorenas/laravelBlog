<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReadArticles extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        echo 'это нужный тебе контроллер readarticles';
    }
}