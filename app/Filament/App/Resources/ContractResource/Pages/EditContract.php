<?php

namespace App\Filament\App\Resources\ContractResource\Pages;

use App\Events\PdfExportEvent;
use App\Filament\App\Resources\ContractResource;
use App\Models\Contract;
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
                    return response()->streamDownload(
function() use ($record){
 echo PdfService::stream($record);
}, $record->id.'.pdf');


                })
                ->label('Export')
                ->color('warning')
                ->icon('heroicon-s-arrow-up-tray')
                ,
        ];
    }
}
