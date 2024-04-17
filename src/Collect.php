<?php

namespace Collect;

class Collect {

    public function isLogged(): bool {
        if (app()->auth::check()) {
            return true;
        }
        return false;
    }

    public function logout(): bool {
        if ($this->isLogged()) {
            app()->auth::logout();
            return true;
        }
        return false;
    }

    public function getNickname() {
        if ($this->isLogged()) {
            $user = app()->auth::user();
            return $user['nickname'];
        }
        return null;
    }

    public function getEmail() {
        if ($this->isLogged()) {
            $user = app()->auth::user();
            return $user['email'];
        }
        return null;
    }

}
