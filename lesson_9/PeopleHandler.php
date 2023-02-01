<?php

namespace lesson_9;

class PeopleHandler
{
    /**
     * @param string $fileName
     * @return People[]
     */
    public function getPeoplesFromFile(string $fileName): array
    {
        $data = array_map('str_getcsv', file($fileName));

        $peoples = [];

        foreach ($data as $people) {
            /** @var People $people */
            $people = new People($people[0], $people[1], $people[2], $people[3], $people[4], $people[5]);
            $peoples[] = $people;
        }

        return $peoples;
    }
}
