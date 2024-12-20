<?php

namespace App\Filament\Resources\HeadResource\Pages;

use App\Filament\Resources\HeadResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeads extends ListRecords
{
    protected static string $resource = HeadResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
