<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FileStorage Entity.
 *
 * @property string $id
 * @property string $user_id
 * @property \App\Model\Entity\User $user
 * @property string $foreign_key
 * @property string $model
 * @property string $filename
 * @property int $filesize
 * @property string $mime_type
 * @property string $extension
 * @property string $hash
 * @property string $path
 * @property string $adapter
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class FileStorage extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
       // 'pdf_files' => true,
    ];
}
