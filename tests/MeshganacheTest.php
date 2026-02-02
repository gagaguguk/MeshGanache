<?php
/**
 * Tests for MeshGanache
 */

use PHPUnit\Framework\TestCase;
use Meshganache\Meshganache;

class MeshganacheTest extends TestCase {
    private Meshganache $instance;

    protected function setUp(): void {
        $this->instance = new Meshganache(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Meshganache::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
