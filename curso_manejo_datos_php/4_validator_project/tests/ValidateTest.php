<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_mail()
    {
        $email = Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@rimorsoft.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://tekiagency.com');
        $this->assertTrue($url);

        $url = Validate::url('tekiagency.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('123456');
        $this->assertTrue($password);

        $password = Validate::password('123');
        $this->assertFalse($password);
    }
}
