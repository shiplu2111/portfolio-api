<?php

namespace App\Filament\Resources\HeaderTextResource\Pages;

use App\Filament\Resources\HeaderTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\HeaderText;
class ListHeaderTexts extends ListRecords
{
    protected static string $resource = HeaderTextResource::class;

    protected function getHeaderActions(): array
    {
        if (HeaderText::query()->exists()) {
            return []; // hide the Create button
        }
        return [
            Actions\CreateAction::make(),
        ];
    }
}
