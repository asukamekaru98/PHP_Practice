<?php
// 分けすぎたデータベースドライバ

interface WritingDatabaseDriverInterface
{
	public function write(string $key, mixed $data): void;
}

interface ReadingDatabaseDriverInterface
{
	public function read(string $key): void;
}

class WritingDatabaseDriverVer2 implements WritingDatabaseDriverInterface
{
	public function write(string $key, mixed $data): void
	{
		// Write data to the database
	}
}

class ReadingDatabaseDriverVer2 implements ReadingDatabaseDriverInterface
{
	public function read(string $key): void
	{
		// Read data from the database
	}
}