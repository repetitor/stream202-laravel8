<?php

namespace App\Services\Translators;


use App\Models\Article;

use Illuminate\Database\Eloquent\Collection;
//use Illuminate\Support\Collection;

class ArticlesListTranslator
{
    /**
     * @var ArticleTranslator
     */
    private $articleTranslator;

    public function __construct(
        ArticleTranslator $articleTranslator
    )
    {
        $this->articleTranslator = $articleTranslator;
    }

    public function translate(int $limit, int $offset): array
    {
//        $articles = Article::query()
//            ->take($limit)
//            ->skip($offset)
//            ->get();
        $articles = $this->getArticles($limit, $offset);

        $result = [];
        foreach ($articles as $article) {
//            $result[] = (new ArticleDTO(
//                $article->id,
//                $article->title,
//                $article->body,
//                $article->user->name,
//            ))->toArray();
            $dto = $this->articleTranslator->translate($article);
            $result[] = $dto->toArray();
        }

        return $result;
    }

    /*
     * TODO: вынести в отдельный репозиторий
     */
    private function getArticles(int $limit, int $offset): Collection
    {
        return Article::query()
            ->take($limit)
            ->skip($offset)
            ->with([
                'user',
            ])
            ->get();
    }
}
