<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ContactResource;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

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
