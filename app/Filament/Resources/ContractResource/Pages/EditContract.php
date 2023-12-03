<?php

namespace App\Filament\Resources\ContractResource\Pages;

use App\Events\PdfExportEvent;
use App\Models\Contract;
use App\Filament\Resources\ContractResource;
use App\Services\PdfService;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditContract extends EditRecord
{
    protected static string $resource = ContractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('export')->
                action(function (Contract $record) {
                    PdfService::download($record);
                })
                ->label('Export')
                ->color('warning')
                ->icon('heroicon-s-arrow-up-tray')
                ,
        ];
    }
}
