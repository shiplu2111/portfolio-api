<?php

namespace App\Filament\Resources\GeneralSettingResource\Pages;

use App\Filament\Resources\GeneralSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\GeneralSetting;

class ListGeneralSettings extends ListRecords
{
    protected static string $resource = GeneralSettingResource::class;

    protected function getHeaderActions(): array
    {
        if (GeneralSetting::query()->exists()) {
            return []; // hide the Create button
        }
        return [
            Actions\CreateAction::make(),
        ];
    }
}
