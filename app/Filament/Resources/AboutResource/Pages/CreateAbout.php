<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;
}
