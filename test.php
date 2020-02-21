<?php
use PHPUnit\Framework\TestCase;
include("./func.php");

class Test extends TestCase {

    /**
     * @dataProvider additionProviderUpperCase
     */
    public function testUpperCase($input, $expected) {
        $func = new Func();
        $func->setString($input);
        $func->convertAllCaps();
        $str = $func->getString();
        $this->assertSame($str, $expected);
    }

    public function additionProviderUpperCase()
    {
        return [
            ["hello world", "HELLO WORLD"],
            ["umar wants to eat chicken", "UMAR WANTS TO EAT CHICKEN"],
            ["first blood!", "FIRST BLOOD!"]
        ];
    }

    /**
     * @dataProvider additionProviderAltUpperLowerCase
     */
    public function testAltUpperLowerCase($input, $expected) {
        $func = new Func();
        $func->setString($input);
        $func->convertAltCaps();
        $str = $func->getString();
        $this->assertSame($str, $expected);
    }

    public function additionProviderAltUpperLowerCase()
    {
        return [
            ["hello world", "hElLo wOrLd"],
            ["umar wants to eat chicken", "uMaR WaNtS To eAt cHiCkEn"],
            ["first blood!", "fIrSt bLoOd!"]
        ];
    }
}
