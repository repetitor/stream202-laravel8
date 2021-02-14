<?php

namespace App\Services;


use App\Models\Article;
use App\Services\DTO\ArticleDTO;
use App\Services\Translators\ArticlesListTranslator;
use App\Services\Translators\ArticleTranslator;

/**
 * Class ArticlesService
 */
class ArticlesService
{
    /**
     * @var ArticlesListTranslator
     */
    private $articlesListTranslator;
    /**
     * @var ArticleTranslator
     */
    private $articleTranslator;

    /**
     * ArticlesService constructor.
     * @param ArticlesListTranslator $articlesListTranslator
     * @param ArticleTranslator $articleTranslator
     */
    public function __construct(
        ArticlesListTranslator $articlesListTranslator,
        ArticleTranslator $articleTranslator
    )
    {
        $this->articlesListTranslator = $articlesListTranslator;
        $this->articleTranslator = $articleTranslator;
    }

    public function getArticlesList(int $limit, int $offset): array
    {
        return $this->articlesListTranslator->translate($limit, $offset);
    }

    public function getArticle(int $id): ?ArticleDTO
    {
        $article = Article::find($id);

        if (! $article) {
            return null;
        }

        return $this->articleTranslator->translate($article);
    }
}
