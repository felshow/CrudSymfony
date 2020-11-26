<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private $firstName;
    private $lastName;
    private $email;
    private $username;
    private $password;
    private $createdAt;
    private $updateAt;

    public function getId(): ?int
    {
        return $this->id;
    }
}
