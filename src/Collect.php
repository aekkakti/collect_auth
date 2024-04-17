<?php

namespace Collect;

class Collect {
    private $user = [
        'admin' => 'admin',
        'user' => 'user'
    ];

    public function login($username, $password): bool {
        if (isset($this->user[$username]) && $this->user[$username] === $password) {
            $_SESSION['user'] = $username;
            return true;
        }
        return false;
    }

    public function logout() {
        unset($_SESSION['user']);
    }

    public function isLogged(): bool {
        return (isset($_SESSION['user']));
    }

    public function getUsername() {
        return $_SESSION['user'] ?? null;
    }

    public function isAdmin(): bool {
        return $_SESSION['user'] === 'admin';
    }
}