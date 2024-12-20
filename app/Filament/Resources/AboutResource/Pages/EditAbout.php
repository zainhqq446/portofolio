<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Models\about;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AboutResource;

class EditAbout extends EditRecord
{
    protected static string $resource = AboutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(about $record){
                    if(record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
