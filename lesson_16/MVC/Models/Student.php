<?php

namespace MVC\Models;

use PDO;

class Student
{

    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");
    }

    public function get(int $id)
    {
        $statement = $this->connection->prepare("SELECT * FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
        return $statement->fetch();
    }

    public function getAll()
    {
        $result = $this->connection->query("SELECT * from students");
        return $result->fetchAll();
    }

    public function create(string $name, string $description, string $email, string $phone, string $country): Student
    {
        $sql = "INSERT INTO students (name, description, email, phone, country) VALUES (:name, :description, :email, :phone, :country)";
        $statement = $this->connection->prepare($sql);
        $result = $statement->execute([
            ":name" => $name,
            ":description" => $description,
            ":email" => $email,
            ":phone" => $phone,
            ":country" => $country,
        ]);

        return [
            "name" => $name,
            "description" => $description,
            "email" => $email,
            "phone" => $phone,
            "country" => $country,
        ];
    }

    public function delete(int $id)
    {
        $statement = $this->connection->prepare("DELETE FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
    }

    public function update(int $id, string $name = null, string $description = null, string $email = null, string $phone = null, string $country = null)
    {
        $sql = "UPDATE students SET name = :name, description = :description, email = :email, phone = :phone, country = :country WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $student = $this->get($id);

        $statement->execute([
            ":id" => $id,
            ":name" => $name ?: $student["name"],
            ":description" => $description ?: $student["description"],
            ":email" => $email ?: $student["email"],
            ":phone" => $phone ?: $student["phone"],
            ":country" => $country ?: $student["country"],
        ]);

        return $this->get($id);
    }
}
