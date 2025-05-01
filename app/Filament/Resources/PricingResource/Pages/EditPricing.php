<?php

namespace App\Filament\Resources\PricingResource\Pages;

use App\Filament\Resources\PricingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
class EditPricing extends EditRecord
{
    protected static string $resource = PricingResource::class;

    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Pricing Package has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->successNotification(null) // Disable default success notification
            ->after(function ($record) {
                Notification::make()
                    ->title('Pricing Package Deleted')
                    ->body('The Pricing Package has been successfully deleted.')
                    ->icon('heroicon-s-trash')
                    ->success()
                    ->send();
            }),
        ];
    }

}
