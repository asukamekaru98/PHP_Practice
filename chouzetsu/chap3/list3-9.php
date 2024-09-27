<?php
//ニュースサイトの安定した抽象パッケージ

interface ArticleRepositoryInterface
{
	public function fetch($id): Article;
}

interface ArticlePresentaterInterface
{
	public function format(Article $article);
}

class ArticleOperation
{
	public function __construct(
		protected ArticleRepositoryInterface $repository,
		protected ArticlePresentaterInterface $presenter
	) {}

	public function show($id)
	{
		$article = $this->repository->fetch($id);
		return $this->presenter->format($article);
	}
}

class Article {}
