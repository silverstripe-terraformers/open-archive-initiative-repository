<?php

namespace Terraformers\OpenArchive\Tests\Mocks;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;
use Terraformers\OpenArchive\Extensions\OaiRecordManager;

/**
 * @property string $Title
 * @mixin OaiRecordManager
 */
class FakeDataObject extends DataObject implements TestOnly
{

    private static string $table_name = 'FakeDataObject';

    private static array $db = [
        'Title' => 'Varchar(255)',
    ];

    private static array $extensions = [
        OaiRecordManager::class,
    ];

}
