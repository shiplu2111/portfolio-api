<?php

namespace App\Filament\Resources\HeaderTextResource\Pages;

use App\Filament\Resources\HeaderTextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditHeaderText extends EditRecord
{
    protected static string $resource = HeaderTextResource::class;

    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Header Text has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
}
