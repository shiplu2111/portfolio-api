<?php

namespace App\Filament\Resources\EducationResource\Pages;

use App\Filament\Resources\EducationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
class EditEducation extends EditRecord
{
    protected static string $resource = EducationResource::class;

    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Testimonial has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->successNotification(null) // Disable default success notification
            ->after(function ($record) {
                Notification::make()
                    ->title('Testimonial Deleted')
                    ->body('The Testimonial has been successfully deleted.')
                    ->icon('heroicon-s-trash')
                    ->success()
                    ->send();
            }),
        ];
    }
}
