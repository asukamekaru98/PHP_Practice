<?php
// ニュースサイトの不安定な具象パッケージ

interface ArticleRepositoryInterface
{
	public function fetch($id): Article;
}

interface ArticlePresentaterInterface
{
	public function format(Article $article);
}

class ArticleRepository implements ArticleRepositoryInterface
{
	public function fetch($id): Article
	{
		// ToDo
		return new Article();
	}
}

class ArticlePresentater implements ArticlePresentaterInterface
{
	public function format(Article $id)
	{
		// ToDo
	}
}

class Article {}
