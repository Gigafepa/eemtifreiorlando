<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InscricoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InscricoesTable Test Case
 */
class InscricoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InscricoesTable
     */
    public $Inscricoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Inscricoes',
        'app.Alunos',
        'app.Eletivas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Inscricoes') ? [] : ['className' => InscricoesTable::class];
        $this->Inscricoes = TableRegistry::getTableLocator()->get('Inscricoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inscricoes);

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
