<?php

namespace App\Filament\Resources\VaccineResource\Pages;

use App\Filament\Resources\VaccineResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVaccine extends CreateRecord
{
    protected static string $resource = VaccineResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
