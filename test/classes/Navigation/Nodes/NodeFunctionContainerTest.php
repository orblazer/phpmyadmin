<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Tests for PhpMyAdmin\Navigation\Nodes\NodeFunctionContainer class
 *
 * @package PhpMyAdmin-test
 */
declare(strict_types=1);

namespace PhpMyAdmin\Tests\Navigation\Nodes;

use PhpMyAdmin\Navigation\NodeFactory;
use PhpMyAdmin\Tests\PmaTestCase;
use PhpMyAdmin\Theme;

/**
 * Tests for PhpMyAdmin\Navigation\Nodes\NodeFunctionContainer class
 *
 * @package PhpMyAdmin-test
 */
class NodeFunctionContainerTest extends PmaTestCase
{
    /**
     * SetUp for test cases
     *
     * @return void
     */
    protected function setUp(): void
    {
        $GLOBALS['server'] = 0;
    }

    /**
     * Test for __construct
     *
     * @return void
     */
    public function testConstructor()
    {
        $parent = NodeFactory::getInstance('NodeFunctionContainer');
        $this->assertArrayHasKey(
            'text',
            $parent->links
        );
        $this->assertStringContainsString(
            'db_routines.php',
            $parent->links['text']
        );
        $this->assertEquals('functions', $parent->real_name);
    }
}
