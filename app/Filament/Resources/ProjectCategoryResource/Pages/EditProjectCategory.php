<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use App\Filament\Resources\ProjectCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use App\Models\ProjectCategory;
use App\Models\Project;
class EditProjectCategory extends EditRecord
{
    protected static string $resource = ProjectCategoryResource::class;
    protected function getRedirectUrl(): string
    {
        Notification::make()
        ->title('Updated successfully')
        ->success()
        ->icon('heroicon-s-check-circle')
        ->body('Project Category has been successfully updated.')
        ->send();
        return $this->getResource()::getUrl('index');

    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
    ->successNotification(null) // Disable default success notification
    ->before(function ($record, $action) {
        $isProduct = Project::where('category_id', $record->id)->first();

        if ($isProduct) {
            Notification::make()
                ->title('Deletion Blocked')
                ->body('This project category cannot be deleted because it is linked to an existing project.')
                ->icon('heroicon-s-x-circle')
                ->danger()
                ->send();

            // Properly cancel the deletion
            $action->cancel();
        }
    })
    ->after(function ($record) {
        Notification::make()
            ->title('Project Category Deleted')
            ->body('The project category has been successfully deleted.')
            ->icon('heroicon-s-trash')
            ->success()
            ->send();
    })
        ];
    }
}
