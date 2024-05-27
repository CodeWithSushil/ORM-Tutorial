<?php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]

class User {
  
  #[ORM\Id]
  #[ORM\Column(type: 'integer')]
  #[ORM\GeneratedValue]
  private int|null $id = null;
  #[ORM\Column(type: 'string')]
  private string $name;
  private string $email;
  private string $password;
  
  public function getId():int|null
  {
    return $this->id;
  }
  
  public function setName(string $name):void
  {
    $this->name=$name;
  }

  public function setEmail(string $email):void
  {
    $this->email=$email;
  }

  public function setPassword(string $password):void
  {
    $this->password=$password;
  }
  
  public function getName():string
  {
    return $this->name;
  }
}
