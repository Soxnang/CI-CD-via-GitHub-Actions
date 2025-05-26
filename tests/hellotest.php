<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/index.php';

class HelloTest extends TestCase {
    public function testHelloWorld() {
        $this->assertEquals("Hello, World!", helloWorld());
    }
}
