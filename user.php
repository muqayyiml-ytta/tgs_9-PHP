<?php

class User
{
    public $username;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

// Membuat objek
$user = new User();

// Mengubah username
$user->setUsername("admin123");

// Menampilkan username
echo "Username: " . $user->getUsername();
