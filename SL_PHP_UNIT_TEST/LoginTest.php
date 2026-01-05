<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/function.php';

class LoginTest extends TestCase
{
    // 1️ Correct username and password
    public function testValidLogin()
    {
        $this->assertEquals("Login successfull", doLogin("admin", "1234"));
    }

    // 2️ Incorrect username
    public function testInvalidUsername()
    {
        $this->assertEquals("Login failed", doLogin("user", "1234"));
    }

    // 3️ Incorrect password
    public function testInvalidPassword()
    {
        $this->assertEquals("Login failed", doLogin("admin", "wrong"));
    }

    // 4️ Both username and password incorrect
    public function testInvalidUsernameAndPassword()
    {
        $this->assertEquals("Login failed", doLogin("user", "wrong"));
    }

    // 5 Empty username
    public function testEmptyUsername()
    {
        $this->assertEquals("Login failed", doLogin("", "1234"));
    }

    // 6️ Empty password
    public function testEmptyPassword()
    {
        $this->assertEquals("Login failed", doLogin("admin", ""));
    }

    // 7️ Empty username and password
    public function testEmptyUsernameAndPassword()
    {
        $this->assertEquals("Login failed", doLogin("", ""));
    }
}
