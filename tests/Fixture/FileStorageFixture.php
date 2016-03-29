<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FileStorageFixture
 *
 */
class FileStorageFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'file_storage';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'foreign_key' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'model' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'filename' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'filesize' => ['type' => 'integer', 'length' => 16, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mime_type' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'extension' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'hash' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'path' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'adapter' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '943f592e-3fe5-443a-b5ee-39e40cd42f85',
            'user_id' => '709ac018-1c15-4c7f-9e82-ea255763a26f',
            'foreign_key' => '989d80fc-1fa3-40c9-a0e8-318193b41144',
            'model' => 'Lorem ipsum dolor sit amet',
            'filename' => 'Lorem ipsum dolor sit amet',
            'filesize' => 1,
            'mime_type' => 'Lorem ipsum dolor sit amet',
            'extension' => 'Lor',
            'hash' => 'Lorem ipsum dolor sit amet',
            'path' => 'Lorem ipsum dolor sit amet',
            'adapter' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-03-21 09:20:55',
            'modified' => '2016-03-21 09:20:55'
        ],
    ];
}
