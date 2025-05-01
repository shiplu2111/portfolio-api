<?php

namespace App\Filament\Resources\TrainingResource\Pages;

use App\Filament\Resources\TrainingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
class EditTraining extends EditRecord
{
    protected static string $resource = TrainingResource::class;

    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Training has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->successNotification(null) // Disable default success notification
            ->after(function ($record) {
                Notification::make()
                    ->title('Training Deleted')
                    ->body('The Training has been successfully deleted.')
                    ->icon('heroicon-s-trash')
                    ->success()
                    ->send();
            }),
        ];
    }

}
