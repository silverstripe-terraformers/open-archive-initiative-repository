<?php

namespace Terraformers\OpenArchive\Documents;

use Terraformers\OpenArchive\Formatters\OaiRecordFormatter;

class ListRecordsDocument extends RecordsDocument
{

    public function __construct(?OaiRecordFormatter $formatter = null)
    {
        parent::__construct($formatter);

        $this->setRequestVerb(OaiDocument::VERB_LIST_RECORDS);
    }

    public function shouldIncludeMetadata(): bool
    {
        return true;
    }

    public function getRecordsHolderName(): string
    {
        return 'ListRecords';
    }

}
