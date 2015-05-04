<?php namespace App\Http\Composers;

use App\Article;
use Illuminate\Contracts\View\View;

/**
 * Class NavigationComposer
 *
 * @package App\Http\Composers
 */
class NavigationComposer
{
    /**
     * @var Article
     */
    protected $article;

    /**
     * @param Article $article
     */
    function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('latest', $this->article->latest()->first());
    }
}
