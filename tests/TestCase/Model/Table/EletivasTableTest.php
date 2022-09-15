<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EletivasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EletivasTable Test Case
 */
class EletivasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EletivasTable
     */
    public $Eletivas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Eletivas',
        'app.Professores',
        'app.Inscricoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Eletivas') ? [] : ['className' => EletivasTable::class];
        $this->Eletivas = TableRegistry::getTableLocator()->get('Eletivas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Eletivas);

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
