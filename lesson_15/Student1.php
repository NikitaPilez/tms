<?php

class Student1
{
    private PDO $connection;
    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");
    }

    public function search(string $name = null, string $country = null, bool $isFullContain = false)
    {
        $operator = $isFullContain ? " = " : " LIKE ";

        if ($name && $country) {
            $sql = "SELECT * FROM students WHERE name" . $operator . " :name AND country = :country";
        } else if ($name && !$country) {
            $sql = "SELECT * FROM students WHERE name" . $operator . " :name";
        } else if (!$name && $country) {
             $sql = "SELECT * FROM students WHERE country = :country";
        } else {
            $sql = "SELECT * FROM students";
        }
        $statement = $this->connection->prepare($sql);
        if ($name) {
            $statement->bindValue(":name", $isFullContain ? $name : "%$name%");
        }
        if ($country) {
            $statement->bindValue(":country", $country);
        }
        $statement->execute();

        return $statement->fetchAll();
    }
}
