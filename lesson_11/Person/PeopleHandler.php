<?php

namespace lesson_11\Person;

class PeopleHandler
{

    public array $peoples = [];
    public string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return People[]
     */
    public function getList(): array
    {
        $this->peoples = [];
        $data = array_map('str_getcsv', file($this->fileName));

        foreach ($data as $people) {
            /** @var People $people */

            $people = new People($people[1], $people[2], $people[3], $people[4], (int)$people[0]);
            $this->peoples[] = $people;
        }

        return $this->peoples;
    }

    public function add(People $people): void
    {
        $newPeople = [
            $people->getId(),
            $people->getName(),
            $people->getPhone(),
            $people->getEmail(),
            $people->getAddress()
        ];

        $this->peoples[] = $newPeople;
        $string = implode(',', $newPeople) . PHP_EOL;
        file_put_contents($this->fileName, $string, FILE_APPEND);
    }

    public function delete(int $id): void
    {
        /** @var People[] $peoples */
        $peoplesFromFile = $this->getList();
        $this->peoples = [];
        $string = "";

        foreach ($peoplesFromFile as $people) {
            if ($people->getId() != $id) {
                $string .= $people->getId() . "," . $people->getName() . "," . $people->getPhone() . "," . $people->getEmail() . "," . $people->getAddress() . PHP_EOL;
                $this->peoples[] = $string;
            }
        }
        file_put_contents($this->fileName, $string);
    }

    public function get(int $id): ?People
    {
        /** @var People[] $people */
        foreach ($this->getList() as $people) {
            if ($people->getId() == $id) {
                return $people;
            }
        }

        return null;
    }

    public function update(int $id, string $name = null, string $phone = null, string $email = null, string $address = null)
    {
        $people = $this->get($id);

        if ($people) {
            if ($name) {
                $people->setName($name);
            }
            if ($phone) {
                $people->setPhone($phone);
            }
            if ($email) {
                $people->setEmail($email);
            }
            if ($address) {
                $people->setAddress($address);
            }

            $peoples = $this->getList();
            $this->peoples = [];
            $string = "";
            foreach ($peoples as $item) {
                if ($item->getId() == $id) {
                    $this->peoples[] = $people;
                    $string .= $people->getId() . "," . $people->getName() . "," . $people->getPhone() . "," . $people->getEmail() . "," . $people->getAddress() . "," . PHP_EOL;
                } else {
                    $string .= $item->getId() . "," . $item->getName() . "," . $item->getPhone() . "," . $item->getEmail() . "," . $item->getAddress() . "," . PHP_EOL;
                    $this->peoples[] = $item;
                }
            }

            file_put_contents($this->fileName, $string);
        }

        return $people;
    }
}
