<?php

namespace ThePHPAvengers\UniversallyUniqueID\Tests;

use ThePHPAvengers\UniversallyUniqueID\UUID;

/**
 * Class SingletonTest
 *
 * @package ThePHPAvengers\UniversallyUniqueID\Tests
 * @author James Kirkby <hello@jameskirkby.com>
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{

    public function testUniqueness()
    {
        $firstCall = UUID::getInstance();
        $this->assertInstanceOf('ThePHPAvengers\UniversallyUniqueID\UUID', $firstCall);
        $secondCall = UUID::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = UUID::getInstance();
        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }

    /**
     * @expectedException \ThePHPAvengers\UniversallyUniqueID\SingletonPatternViolationException
     *
     * @return void
     */
    public function testNoCloneAllowed()
    {
        $obj1 = UUID::getInstance();
        $obj2 = clone $obj1;
    }

    /**
     * @expectedException \ThePHPAvengers\UniversallyUniqueID\SingletonPatternViolationException
     *
     * @return void
     */
    public function testNoSerializationAllowed()
    {
        $obj1 = UUID::getInstance();
        $serialized = serialize($obj1);
        $obj2 = unserialize($serialized);
    }
}