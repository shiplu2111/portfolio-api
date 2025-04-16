<?php

namespace App\Filament\Resources\CounterResource\Pages;
use Filament\Notifications\Notification;
use App\Filament\Resources\CounterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCounter extends CreateRecord
{
    protected static string $resource = CounterResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Counter Created')
            ->body('The new counter has been successfully added.')
            ->success()
            ->send();
    }
    protected function getCreatedNotification(): ?Notification
    {
        return null; // disables the default "Created" notification
    }
}
