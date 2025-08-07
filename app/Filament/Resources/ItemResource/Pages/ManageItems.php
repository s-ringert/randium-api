<?php

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Imports\ItemImporter;
use App\Filament\Resources\ItemResource;
use Filament\Actions;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ManageRecords;

class ManageItems extends ManageRecords
{
    protected static string $resource = ItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ImportAction::make()->importer(ItemImporter::class),
        ];
    }
}
