<?php

// このクラスには異なる変更理由が混在している
class ArticleOperation
{
	private Article $article;

	public function draft(Writer $writer): void {}

	public function subscribe(Subscriber $subscriber): void {}
}

class Writer {}

class Subscriber {}
