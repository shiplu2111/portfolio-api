<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
class EditAbout extends EditRecord
{
    protected static string $resource = AboutResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }
    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('About has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }

}
