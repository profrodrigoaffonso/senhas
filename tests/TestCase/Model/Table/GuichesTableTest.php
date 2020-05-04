<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuichesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuichesTable Test Case
 */
class GuichesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GuichesTable
     */
    public $Guiches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Guiches',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Guiches') ? [] : ['className' => GuichesTable::class];
        $this->Guiches = TableRegistry::getTableLocator()->get('Guiches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Guiches);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
