<?php

//インターフェース分離DB抽象

namespace DB;

interface DataInputInterface
{
	public function write(string $key, mixed $data): void;
}

interface DataOutputInterface
{
	public function read(string $key): array;
}

interface DatabaseDriverInterface extends DataInputInterface, DataOutputInterface {}
