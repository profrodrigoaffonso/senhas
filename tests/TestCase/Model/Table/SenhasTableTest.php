<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SenhasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SenhasTable Test Case
 */
class SenhasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SenhasTable
     */
    public $Senhas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Senhas',
        'app.Chamadas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Senhas') ? [] : ['className' => SenhasTable::class];
        $this->Senhas = TableRegistry::getTableLocator()->get('Senhas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Senhas);

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
