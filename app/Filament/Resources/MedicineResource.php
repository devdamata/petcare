<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicineResource\Pages;
use App\Filament\Resources\MedicineResource\RelationManagers;
use App\Models\Medicine;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicineResource extends Resource
{
    protected static ?string $model = Medicine::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    protected static ?string $navigationGroup = 'Saúde';
    protected static ?string $navigationLabel = 'Medicamentos';
    protected static ?string $pluralModelLabel = 'Medicamentos';
    protected static ?string $modelLabel = 'Medicamento';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('pet_id')
                ->label('Pet')
                ->relationship('pet', 'name')
                ->required(),

            TextInput::make('name')
                ->label('Nome do Medicamento')
                ->placeholder('Ex: NexGard, Bravecto, Milbemax...')
                ->required()
                ->maxLength(255),

            Select::make('type')
                ->label('Tipo')
                ->options([
                    'vermifugo' => 'Vermífugo',
                    'antipulgas' => 'Antipulgas',
                    'outro' => 'Outro',
                ])
                ->required(),

            DatePicker::make('application_date')
                ->label('Data de Aplicação')
                ->required(),

            DatePicker::make('next_application_date')
                ->label('Próxima Aplicação')
                ->helperText('Deixe em branco se não houver renovação.'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('pet.name')
                    ->label('Pet')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Medicamento')
                    ->searchable(),

                TextColumn::make('type')
                    ->label('Tipo')
                    ->badge()
                    ->colors([
                        'primary' => 'vermifugo',
                        'success' => 'antipulgas',
                        'warning' => 'outro',
                    ])
                    ->formatStateUsing(fn ($state) => ucfirst($state)),

                TextColumn::make('application_date')
                    ->label('Aplicado em')
                    ->date('d/m/Y'),

                TextColumn::make('next_application_date')
                    ->label('Próxima Aplicação')
                    ->date('d/m/Y')
                    ->placeholder('—'),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Tipo')
                    ->options([
                        'vermifugo' => 'Vermífugo',
                        'antipulgas' => 'Antipulgas',
                        'outro' => 'Outro',
                    ]),
            ])
            ->defaultSort('application_date', 'desc');
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
            'index' => Pages\ListMedicines::route('/'),
            'create' => Pages\CreateMedicine::route('/create'),
            'edit' => Pages\EditMedicine::route('/{record}/edit'),
        ];
    }
}
