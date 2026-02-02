<?php
/**
 * Tests for FoundryLink
 */

use PHPUnit\Framework\TestCase;
use Foundrylink\Foundrylink;

class FoundrylinkTest extends TestCase {
    private Foundrylink $instance;

    protected function setUp(): void {
        $this->instance = new Foundrylink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Foundrylink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
