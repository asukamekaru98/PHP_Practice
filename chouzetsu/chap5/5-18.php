<?php

// インターフェース分離DBベンダー

namespace VendorDB;

use DB\DatabaseDriverInterface;

class VendorDatabaseDriver implements DatabaseDriverInterface
{
	public function write(string $key, mixed $data): void
	{
		// 主キーにデータを保存
	}

	public function read(string $key): array
	{
		// return キーで取得したデータ
		return [];
	}
}
