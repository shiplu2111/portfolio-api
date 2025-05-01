<?php

namespace App\Filament\Resources\EducationResource\Pages;

use App\Filament\Resources\EducationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateEducation extends CreateRecord
{
    protected static string $resource = EducationResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Education Created')
            ->body('The Education has been successfully added.')
            ->success()
            ->send();
    }
    protected function getCreatedNotification(): ?Notification
    {
        return null; // disables the default "Created" notification
    }
}
