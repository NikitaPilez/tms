<?php

class MySQLQueryBuilder implements SQLQueryBuilder
{

    protected $query;

    protected function reset(): void
    {
        $this->query = new MySQLQueryBuilder();
    }
    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();
        $this->query->select = "SELECT " . implode(", ", $fields) . " FROM " . $table;

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    public function limit(int $count, int $offset = 0): SQLQueryBuilder
    {
        if ($offset) {
            $this->query->limit = " LIMIT " . $offset . ", " . $count;
        } else {
            $this->query->limit = " LIMIT " . $count;
        }

        return $this;
    }

    public function orderBy(string $column, string $direction = "ASC"): SQLQueryBuilder
    {
        $this->query->order = " ORDER BY " . $column . " " . $direction;

        return $this;
    }

    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->select;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        if (isset($query->order)) {
            $sql .= $query->order;
        }
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        $sql .= ";";

        return $sql;
    }
}
