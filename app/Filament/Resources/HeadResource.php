<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Head;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\HeadResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HeadResource\RelationManagers;

class HeadResource extends Resource
{
    protected static ?string $model = Head::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nav1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nav2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nav3')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nav4')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nav5')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required()->image()->disk('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nav1'),
                Tables\Columns\TextColumn::make('nav2'),
                Tables\Columns\TextColumn::make('nav3'),
                Tables\Columns\TextColumn::make('nav4'),
                Tables\Columns\TextColumn::make('nav5'),
                Tables\Columns\ImageColumn::make('thumbnail'),
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
                        if($value->thumbnail){
                            Storage::disk('public')->delete(value->thumbnail);
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
            'index' => Pages\ListHeads::route('/'),
            'create' => Pages\CreateHead::route('/create'),
            'edit' => Pages\EditHead::route('/{record}/edit'),
        ];
    }    
}
