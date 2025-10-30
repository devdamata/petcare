<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PetResource\Pages;
use App\Filament\Resources\PetResource\RelationManagers;
use App\Models\Pet;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PetResource extends Resource
{
    protected static ?string $model = \App\Models\Pet::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Gerenciamento de Pets';
    protected static ?string $navigationLabel = 'Pets';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            FileUpload::make('photo')->label('Foto')->image(),
            TextInput::make('name')->label('Nome')->required(),
            TextInput::make('breed')->label('Raça'),
            Select::make('type')->label('Tipo')->options([
                'cachorro' => 'Cachorro',
                'gato' => 'Gato',
            ])->required(),
            TextInput::make('weight')->label('Peso (kg)')->numeric(),
            TextInput::make('age')->label('Idade')->numeric(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            ImageColumn::make('photo')->label('Foto')->circular(),
            TextColumn::make('name')->label('Nome')->searchable(),
            TextColumn::make('breed')->label('Raça'),
            TextColumn::make('type')->label('Tipo'),
            TextColumn::make('age')->label('Idade'),
        ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('user_id', auth()->id());
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
            'index' => Pages\ListPets::route('/'),
            'create' => Pages\CreatePet::route('/create'),
            'edit' => Pages\EditPet::route('/{record}/edit'),
        ];
    }
}
