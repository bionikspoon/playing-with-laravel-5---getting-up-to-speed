<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Auth;


/**
 * Class ArticlesController
 *
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    /**
     *
     */
    function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }


    /**
     * @return $this
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    //
    /**
     * @param Article $article
     *
     * @return $this
     *
     */
    public function show(Article $article)
    {

        return view('articles.show')->with('article', $article);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.create')->with('tags', $tags);
    }

    /**
     * @param ArticleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);

        flash()->success('Your article has been created!')->important();

        return redirect('articles');
    }

    /**
     * @param Article $article
     *
     * @return $this
     * @internal param $id
     *
     */
    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * @param Article        $article
     * @param ArticleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $this->syncTags($article, $request->input('tag_list', []));

        $article->update($request->all());

        return redirect('articles');
    }

    /**
     * @param Article $article
     * @param array   $tags
     *
     * @internal param ArticleRequest $request
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    /**
     * @param $request
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('tag_list'));
    }
}
