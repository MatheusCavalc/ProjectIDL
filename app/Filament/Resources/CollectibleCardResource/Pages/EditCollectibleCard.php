<?php

namespace App\Filament\Resources\CollectibleCardResource\Pages;

use App\Filament\Resources\CollectibleCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollectibleCard extends EditRecord
{
    protected static string $resource = CollectibleCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
