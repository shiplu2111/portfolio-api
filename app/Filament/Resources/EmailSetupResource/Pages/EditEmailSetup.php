<?php

namespace App\Filament\Resources\EmailSetupResource\Pages;

use App\Filament\Resources\EmailSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;
class EditEmailSetup extends EditRecord
{
    protected static string $resource = EmailSetupResource::class;

    protected function getRedirectUrl(): string
    {
        Artisan::call('optimize:clear');
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Email Setup has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
}
