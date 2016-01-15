<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 15/01/2016
 * Time: 07:58
 */

namespace Guilherme\SON;

class HelloPackageTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHello()
    {
        $hello = new HelloPackage();
        $string = $hello->getHello();
        $this->assertNotNull($string);
        $this->assertInternalType('string',$string);
        $this->assertNotEquals(0,strlen($string));
    }
}