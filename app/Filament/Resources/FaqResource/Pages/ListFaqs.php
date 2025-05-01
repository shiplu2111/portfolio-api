<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Faq;
use Filament\Notifications\Notification;
class ListFaqs extends ListRecords
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        if (Faq::query()->exists()) {
            return []; // hide the Create button
        }
        return [
            Actions\CreateAction::make(),
        ];
    }
}
