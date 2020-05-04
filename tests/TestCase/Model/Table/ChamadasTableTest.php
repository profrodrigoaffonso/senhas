<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChamadasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChamadasTable Test Case
 */
class ChamadasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChamadasTable
     */
    public $Chamadas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Chamadas',
        'app.Senhas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Chamadas') ? [] : ['className' => ChamadasTable::class];
        $this->Chamadas = TableRegistry::getTableLocator()->get('Chamadas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chamadas);

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
