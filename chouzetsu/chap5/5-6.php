<?php
// まとまりのあるデータベースドライバ

interface DatabaseDriverInterface
{
	public function write(string $key, mixed $data): void;
	public function read(string $key): void;
}

class DatabaseDriverVer1 implements WritingDatabaseDriverInterface
{
	public function read(string $key): void
	{
		// Read data from the database
	}

	public function write(string $key, mixed $data): void
	{
		// Write data to the database
	}
}
