<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileStorageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileStorageTable Test Case
 */
class FileStorageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FileStorageTable
     */
    public $FileStorage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.file_storage',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FileStorage') ? [] : ['className' => 'App\Model\Table\FileStorageTable'];
        $this->FileStorage = TableRegistry::get('FileStorage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FileStorage);

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
