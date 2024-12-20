<?php

namespace App\Filament\Resources\SkillsResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SkillsResource;

class EditSkills extends EditRecord
{
    protected static string $resource = SkillsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(section $record){
                    if(record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
