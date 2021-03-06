<?php

namespace SilverStripe\MFA\Tests\BasicMath;

use SilverStripe\Dev\SapphireTest;
use SilverStripe\MFA\Method\Handler\LoginHandlerInterface;
use SilverStripe\MFA\Method\Handler\RegisterHandlerInterface;
use SilverStripe\MFA\Tests\Stub\BasicMath\Method;

class MethodTest extends SapphireTest
{
    public function testGetLoginHandler()
    {
        $method = new Method();
        $this->assertInstanceOf(LoginHandlerInterface::class, $method->getLoginHandler());
    }

    public function testGetRegisterHandler()
    {
        $method = new Method();
        $this->assertInstanceOf(RegisterHandlerInterface::class, $method->getRegisterHandler());
    }
}
