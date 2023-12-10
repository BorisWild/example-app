<?php

namespace App\Filament\App\Resources\ContractResource\Pages;

use App\Filament\App\Resources\ContractResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContract extends CreateRecord
{
    protected static string $resource = ContractResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
