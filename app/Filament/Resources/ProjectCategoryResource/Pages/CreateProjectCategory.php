<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use App\Filament\Resources\ProjectCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateProjectCategory extends CreateRecord
{
    protected static string $resource = ProjectCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Project Category Created')
            ->body('The Project Category has been successfully added.')
            ->success()
            ->send();
    }
    protected function getCreatedNotification(): ?Notification
    {
        return null; // disables the default "Created" notification
    }
}
