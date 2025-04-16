<?php

namespace App\Filament\Resources\CounterResource\Pages;
use Filament\Notifications\Notification;
use App\Filament\Resources\CounterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCounter extends EditRecord
{
    protected static string $resource = CounterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Counter has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
    protected function getSavedNotification(): ?Notification
    {
        return null; // disables default update notification
    }

}
