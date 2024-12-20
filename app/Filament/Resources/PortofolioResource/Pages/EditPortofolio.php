<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use App\Models\portofolio;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PortofolioResource;

class EditPortofolio extends EditRecord
{
    protected static string $resource = PortofolioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if(record->gambar){
                        Storage::disk('public')->delete($record->gambar);
                    }
                }
            ),
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if(record->gambar1){
                        Storage::disk('public')->delete($record->gambar1);
                    }
                }
            ),
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if(record->gambar2){
                        Storage::disk('public')->delete($record->gambar2);
                    }
                }
            ),
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if(record->gambar3){
                        Storage::disk('public')->delete($record->gambar3);
                    }
                }
            ),
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if(record->gambar4){
                        Storage::disk('public')->delete($record->gambar4);
                    }
                }
            ),
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if(record->gambar5){
                        Storage::disk('public')->delete($record->gambar5);
                    }
                }
            )
        ];
    }
}
