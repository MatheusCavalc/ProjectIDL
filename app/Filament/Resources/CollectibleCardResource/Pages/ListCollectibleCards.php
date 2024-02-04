<?php

namespace App\Filament\Resources\CollectibleCardResource\Pages;

use App\Filament\Resources\CollectibleCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollectibleCards extends ListRecords
{
    protected static string $resource = CollectibleCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
