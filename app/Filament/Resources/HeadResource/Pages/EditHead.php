<?php

namespace App\Filament\Resources\HeadResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\HeadResource;
use Filament\Resources\Pages\EditRecord;

class EditHead extends EditRecord
{
    protected static string $resource = HeadResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(head $record){
                    if(record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
