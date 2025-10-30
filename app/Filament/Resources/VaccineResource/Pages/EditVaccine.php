<?php

namespace App\Filament\Resources\VaccineResource\Pages;

use App\Filament\Resources\VaccineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVaccine extends EditRecord
{
    protected static string $resource = VaccineResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
