<?php


namespace App\Services\Translators;


use App\Models\Article;
use App\Services\DTO\ArticleDTO;

class ArticleTranslator
{
    public function translate(Article $article): ArticleDTO
    {
//        $articles = Article::query()
//            ->take($limit)
//            ->skip($offset)
//            ->get();
//
//        $result = [];
//        foreach ($articles as $article) {
//            $result[] = (new ArticleDTO(
//                $article->id,
//                $article->title,
//                $article->body,
//                $article->user->name,
//            ))->toArray();
//        }

        return new ArticleDTO(
            $article->id,
            $article->title,
            $article->body,
            $article->user->name,
        );
    }
}
