<?php
declare(strict_types=1);//严格参数类型模式
class Person{
    public function age(int $age) : int {
        return $age;
    }

    public function name(string $name) : string {
        return $name;
    }

    public function isAlive(bool $alive) : string{
        return ($alive)?"YES":"NO";
    }

    public function getAddress() : Address{
        return new Address();
    }
}
class Address{
    public function getAddress(){
        return ['street' => 'street 1','country' => 'pak'];
    }
}
$person = new Person();
echo $person->name('hedongji');
echo $person->age(30);
echo $person->isAlive(true);