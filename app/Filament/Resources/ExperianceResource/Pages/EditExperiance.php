<?php

namespace App\Filament\Resources\ExperianceResource\Pages;

use App\Filament\Resources\ExperianceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExperiance extends EditRecord
{
    protected static string $resource = ExperianceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
