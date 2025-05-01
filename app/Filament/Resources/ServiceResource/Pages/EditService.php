<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Service has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->successNotification(null) // Disable default success notification
            ->after(function ($record) {
                Notification::make()
                    ->title('Service Deleted')
                    ->body('The Service has been successfully deleted.')
                    ->icon('heroicon-s-trash')
                    ->success()
                    ->send();
            }),
        ];
    }
}
