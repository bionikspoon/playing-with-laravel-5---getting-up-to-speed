<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Tag;


/**
 * Class TagsController
 *
 * @package App\Http\Controllers
 */
class TagsController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     *
     * @return \Illuminate\View\View
     */
    public function show(Tag $tag)
    {
        $articles = $tag->articles;

        return view('articles.index', compact('articles'));
    }

}
