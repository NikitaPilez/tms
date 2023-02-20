<?php

class ProductHandler
{
    private PDO $connection;
    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=courses", "nik", "Qwerty123!");
    }

    public function getAll()
    {
        $result = $this->connection->query("SELECT * from products");

        $products = [];

        while($row = $result->fetch()) {
            $product = new Product($row["name"], $row["manufacturer"], $row["price"], $row["currency"], $row["count"]);
            $products[] = $product;
        }

        return $products;
    }

    public function find(int $id)
    {
        $sql = "SELECT * FROM products where id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch();
        return new Product($result["name"], $result["manufacturer"], $result["price"], $result["currency"], $result["count"]);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM products where id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(":id", $id);
        return $statement->execute();
    }

    public function create(string $name, string $manufacturer, float $price, string $currency, ?int $count = 0)
    {
        $sql = "INSERT INTO products (name, manufacturer, count, price, currency) VALUES (:name, :manufacturer, :count, :price, :currency)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ":name" => $name,
            ":manufacturer" => $manufacturer,
            ":count" => $count,
            ":price" => $price,
            ":currency" => $currency,
        ]);

        return new Product($name, $manufacturer, $price, $currency, $count);
    }

    public function update(int $id, ?string $name = null, ?string $manufacturer = null, ?float $price = null, ?string $currency = null, ?int $count = null)
    {
        $product = $this->find($id);
        $sql = "UPDATE products SET name = :name, manufacturer = :manufacturer, count = :count, price = :price, currency = :currency WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ":id" => $id,
            ":name" => $name ?: $product->getName(),
            ":manufacturer" => $manufacturer ?: $product->getManufacturer(),
            ":count" => $count ?: $product->getCount(),
            ":price" => $price ?: $product->getPrice(),
            ":currency" => $currency ?: $product->getCurrency(),
        ]);

        return $this->find($id);
    }
}
