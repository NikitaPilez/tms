<?php

namespace TMS\Lessons;

interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $count, int $offset = 0): SQLQueryBuilder;

    public function getSQL(): string;
}
