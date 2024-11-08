<?php

class User {
    private string $userPass;
    private string $userLogin;
    private string $userName;

    public function getUserPass(): string {
        return $this->userPass;
    }

    public function setUserPass(string $userPass): void {
        $this->userPass = $userPass;
    }

    public function getUserLogin(): string {
        return $this->userLogin;
    }

    public function setUserLogin(string $userLogin): void {
        $this->userLogin = $userLogin;
    }

    public function getUserName(): string {
        return $this->userName;
    }

    public function setUserName(string $userName): void {
        $this->userName = $userName;
    }
}