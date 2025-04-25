<?php

namespace App\Filament\Resources\GeneralSettingResource\Pages;

use App\Filament\Resources\GeneralSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateGeneralSetting extends CreateRecord
{
    protected static string $resource = GeneralSettingResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function afterCreate(): void
    {
        Notification::make()
            ->title('General Setting Created')
            ->body('The General Setting has been successfully added.')
            ->success()
            ->send();
    }
    protected function getCreatedNotification(): ?Notification
    {
        return null; // disables the default "Created" notification
    }
}
