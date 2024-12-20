<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Portofolio;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortofolioResource\Pages;
use App\Filament\Resources\PortofolioResource\RelationManagers;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                Forms\Components\TextInput::make('paragraf')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kerja1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kerja2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kerja3')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('gambar')
                    ->required()->image()->disk('public'),
                    Forms\Components\FileUpload::make('gambar1')
                    ->required()->image()->disk('public'),
                    Forms\Components\FileUpload::make('gambar2')
                    ->required()->image()->disk('public'),
                    Forms\Components\FileUpload::make('gambar3')
                    ->required()->image()->disk('public'),
                    Forms\Components\FileUpload::make('gambar4')
                    ->required()->image()->disk('public'),
                    Forms\Components\FileUpload::make('gambar5')
                    ->required()->image()->disk('public')
            ])        
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paragraf'),
                Tables\Columns\TextColumn::make('kerja1'),
                Tables\Columns\TextColumn::make('kerja2'),
                Tables\Columns\TextColumn::make('kerja3'),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\ImageColumn::make('gambar1'),
                Tables\Columns\ImageColumn::make('gambar2'),
                Tables\Columns\ImageColumn::make('gambar3'),
                Tables\Columns\ImageColumn::make('gambar4'),
                Tables\Columns\ImageColumn::make('gambar5'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                    foreach($records as $key => $value){
                        if($value->gambar){
                            Storage::disk('public')->delete(value->gambar);
                        }
                    }
                }),
                Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                    foreach($records as $key => $value){
                        if($value->gambar1){
                            Storage::disk('public')->delete(value->gambar1);
                        }
                    }
                }),
                Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                    foreach($records as $key => $value){
                        if($value->gambar2){
                            Storage::disk('public')->delete(value->gambar2);
                        }
                    }
                }),
                Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                    foreach($records as $key => $value){
                        if($value->gambar3){
                            Storage::disk('public')->delete(value->gambar3);
                        }
                    }
                }),
                Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                    foreach($records as $key => $value){
                        if($value->gambar4){
                            Storage::disk('public')->delete(value->gambar4);
                        }
                    }
                }),
                Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                    foreach($records as $key => $value){
                        if($value->gambar5){
                            Storage::disk('public')->delete(value->gambar5);
                        }
                    }
                }),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
        ];
    }    
}
