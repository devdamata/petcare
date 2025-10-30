<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VaccineResource\Pages;
use App\Filament\Resources\VaccineResource\RelationManagers;
use App\Models\Vaccine;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VaccineResource extends Resource
{
    protected static ?string $model = \App\Models\Vaccine::class;
    protected static ?string $navigationIcon = 'heroicon-o-eye-dropper';
    protected static ?string $navigationGroup = 'Saúde';
    protected static ?string $navigationLabel = 'Vacinas';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('pet_id')
                ->label('Pet')
                ->relationship('pet', 'name')
                ->required(),
            TextInput::make('name')->label('Nome da Vacina')->required(),
            DatePicker::make('application_date')->label('Data de Aplicação')->required(),
            DatePicker::make('next_application_date')->label('Próxima Aplicação'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('pet.name')->label('Pet')->sortable(),
            TextColumn::make('name')->label('Vacina'),
            TextColumn::make('application_date')->label('Aplicada em')->date(),
            TextColumn::make('next_application_date')->label('Próxima')->date(),
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
            'index' => Pages\ListVaccines::route('/'),
            'create' => Pages\CreateVaccine::route('/create'),
            'edit' => Pages\EditVaccine::route('/{record}/edit'),
        ];
    }
}
