<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\About;
use Filament\Notifications\Notification;
class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        if (About::query()->exists()) {
            return []; // hide the Create button
        }
        return [
            Actions\CreateAction::make(),
        ];
    }
}
