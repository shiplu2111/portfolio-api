<?php

namespace App\Filament\Resources\ExperianceResource\Pages;

use App\Filament\Resources\ExperianceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateExperiance extends CreateRecord
{
    protected static string $resource = ExperianceResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Experiance Created')
            ->body('The Experiance has been successfully added.')
            ->success()
            ->send();
    }
    protected function getCreatedNotification(): ?Notification
    {
        return null; // disables the default "Created" notification
    }
}
