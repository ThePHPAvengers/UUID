<?php

    class APPClassNameTest extends PHPUnit_Framework_TestCase {

        protected $obj = NULL;

        /**
         * Set up test
         */
        protected function setUp() {
            $this->obj = new APPNameSpace\AppClassName;
        }

        /**
         *
         */
        public function testClassIs()
        {
            $this->assertInstanceOf(get_class($this->obj),new APPNameSpace\AppClassName);
        }

        /**
         * @test
         */
        function testFunc()
        {
            $this->assertTrue($this->obj->func());
        }
    }
 