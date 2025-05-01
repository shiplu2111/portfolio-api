<?php

namespace App\Filament\Resources\HeaderTextResource\Pages;

use App\Filament\Resources\HeaderTextResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateHeaderText extends CreateRecord
{
    protected static string $resource = HeaderTextResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Text  Created')
            ->body('The Header Text has been successfully added.')
            ->success()
            ->send();
    }
    protected function getCreatedNotification(): ?Notification
    {
        return null; // disables the default "Created" notification
    }
}
