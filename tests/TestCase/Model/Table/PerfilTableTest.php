<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerfilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerfilTable Test Case
 */
class PerfilTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerfilTable
     */
    public $Perfil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.perfil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Perfil') ? [] : ['className' => 'App\Model\Table\PerfilTable'];
        $this->Perfil = TableRegistry::get('Perfil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Perfil);

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
