<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelaMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelaMasterTable Test Case
 */
class TelaMasterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelaMasterTable
     */
    public $TelaMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TelaMaster',
        'app.Senhas',
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
        $config = TableRegistry::getTableLocator()->exists('TelaMaster') ? [] : ['className' => TelaMasterTable::class];
        $this->TelaMaster = TableRegistry::getTableLocator()->get('TelaMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelaMaster);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
