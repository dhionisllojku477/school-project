<?php
class User {
    private $name;
    private $email;
    function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getEmail(): string {
        return $this->email;
    }
}
$user1 = new User('John Doe', 'johndoe@example.com');
echo $user1->getName(); // Output: John Doe
echo $user1->getEmail(); // Output: johndoe@example.com