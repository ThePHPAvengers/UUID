<?php

    namespace AppNameSpace;

    use AppNameSpace;

    /**
     * Class AppClassNameTest
     *
     * @package AppNameSpace
     */
    class AppClassNameTest extends \PHPUnit_Framework_TestCase {

        protected $obj = NULL;

        protected function setUp() {
            $this->obj = new AppClassName;
        }

        /**
         *
         */
        public function testClassIs()
        {
            $this->assertInstanceOf(get_class($this->obj),new AppClassName);
        }

        /**
         * @test
         */
        function truetest()
        {
            $this->assertTrue($this->obj->true());
        }

        /**
         * @test
         */
        function nulltest()
        {
            $this->assertNull($this->obj->null());
        }
    }
 