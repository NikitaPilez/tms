<?php

class StudentHandler
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");
    }

    public function find(int $id): Student
    {
        $statement = $this->connection->prepare("SELECT * FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
        $result = $statement->fetch();

        return new Student($id, $result["name"], $result["description"], $result["email"], $result["phone"], $result["country"]);
    }

    public function getAll()
    {
        $result = $this->connection->query("SELECT * from students");
        $data = $result->fetchAll();
        $students = [];

        foreach ($data as $student) {
            $students[] = new Student($student["id"], $student["name"], $student["description"], $student["email"], $student["phone"], $student["country"]);
        }

        return $students;
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

        return new Student($this->connection->lastInsertId(), $name, $description, $email, $phone, $country);
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
        $student = $this->find($id);

        $statement->execute([
            ":id" => $id,
            ":name" => $name ?: $student->getName(),
            ":description" => $description ?: $student->getDescription(),
            ":email" => $email ?: $student->getEmail(),
            ":phone" => $phone ?: $student->getPhone(),
            ":country" => $country ?: $student->getCountry(),
        ]);

        return $this->find($id);
    }

    public function search(string $column, string $value, string $operator)
    {
        $sql = "SELECT * FROM students ";
        if ($column && $value) {
            $sql .= " WHERE " . $column . " " . $operator . " \"" . $value . "\"";
        }

        $result = $this->connection->query($sql);
        return $result->fetchAll();
    }

    public function download()
    {
        $students = $this->getAll();

        $content = [];

        /** @var Student $student */
        foreach ($students as $student) {
            $string = $student->getId() . ";" . $student->getName() . ";" . $student->getDescription() . ";" . $student->getEmail() . ";" . $student->getPhone() . ";" . $student->getCountry() . PHP_EOL;
            $content[] = $string;
        }

        file_put_contents("students.csv", $content);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=students.csv');
        readfile("students.csv");
    }
}
