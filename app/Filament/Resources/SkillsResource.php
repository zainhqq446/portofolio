<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Skills;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SkillsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SkillsResource\RelationManagers;

class SkillsResource extends Resource
{
    protected static ?string $model = Skills::class;

    protected static ?string $navigationIcon = 'heroicon-o-badge-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('paragraf')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('judul1')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('isi1')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('judul2')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('isi2')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('judul3')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('isi3')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('judul4')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('isi4')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('judul5')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('isi5')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('judul6')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('isi6')
                        ->required()
                        ->maxLength(255),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paragraf'),
                Tables\Columns\TextColumn::make('judul1'),
                Tables\Columns\TextColumn::make('isi1'),
                Tables\Columns\TextColumn::make('judul2'),
                Tables\Columns\TextColumn::make('isi2'),
                Tables\Columns\TextColumn::make('judul3'),
                Tables\Columns\TextColumn::make('isi3'),
                Tables\Columns\TextColumn::make('judul4'),
                Tables\Columns\TextColumn::make('isi4'),
                Tables\Columns\TextColumn::make('judul5'),
                Tables\Columns\TextColumn::make('isi5'),
                Tables\Columns\TextColumn::make('judul6'),
                Tables\Columns\TextColumn::make('isi6'),
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkills::route('/create'),
            'edit' => Pages\EditSkills::route('/{record}/edit'),
        ];
    }    
}
