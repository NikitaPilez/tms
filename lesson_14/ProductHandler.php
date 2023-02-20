<?php

class ProductHandler
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=courses", "root", "Qwerty123!");
    }

    public function find(int $id): Product
    {
        // достать данные
        $statement = $this->connection->prepare("SELECT * FROM products WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
        $result = $statement->fetch();

        // вернуть объект
        return new Product($result["name"], $result["manufacturer"], $result["count"], $result["price"], $result["currency"]);
    }

    public function getAll()
    {
        // достаем все данные
        $result = $this->connection->query("SELECT * from products");
        $data = $result->fetchAll();
        $products = [];

        // создаем массив объектов Product
        foreach ($data as $product) {
            $products[] = new Product($product["name"], $product["manufacturer"], $product["count"], $product["price"], $product["currency"]);
        }

        return $products;
    }

    public function create(string $name, string $manufacturer, int $count, float $price, string $currency): Product
    {
        // создание с помощью sql
        $sql = "INSERT INTO products (name, manufacturer, count, price, currency) VALUES (:name, :manufacturer, :count, :price, :currency)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ":name" => $name,
            ":manufacturer" => $manufacturer,
            ":count" => $count,
            ":price" => $price,
            ":currency" => $currency,
        ]);

        // вернуть объект
        return new Product($name, $manufacturer, $count, $price, $currency);
    }

    public function delete(int $id)
    {
        // удаление с помощью sql
        $statement = $this->connection->prepare("DELETE FROM products WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
    }

    public function update(int $id, string $name = null, string $manufacturer = null, int $count = null, float $price = null, string $currency = null)
    {
        // запрос sql
        $sql = "UPDATE products SET name = :name, manufacturer = :manufacturer, count = :count, price = :price, currency = :currency WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $product = $this->find($id);

        // подставляем только обновленные данные
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