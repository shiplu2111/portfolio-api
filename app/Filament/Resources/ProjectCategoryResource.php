<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectCategoryResource\Pages;
use App\Filament\Resources\ProjectCategoryResource\RelationManagers;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Str;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use App\Models\Project;
class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;

    protected static ?string $navigationIcon = 'heroicon-c-bars-arrow-down';
    protected static ?string $navigationLabel = 'Categories';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->placeholder('E.g. Next JS')
                ->reactive()
                ->afterStateUpdated(function (callable $set, $state) {
                    $set('slug', Str::slug($state));
                })
                ->required(),

                TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->disabled() // Optional: disable if you don't want users to edit
                ->dehydrated(), // Ensure it still gets saved

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\DeleteAction::make()
                ->successNotification(null)
                ->before(function ($record, $action) {
                    $isProduct = Project::where('category_id', $record->id)->first();
                    if ($isProduct) {
                        Notification::make()
                            ->title('Deletion Blocked')
                            ->body('This project cannot be deleted because it is linked to an existing project.')
                            ->icon('heroicon-s-x-circle')
                            ->danger()
                            ->send();

                        // Properly cancel the action
                        $action->cancel();
                    }
                })
                ->after(function ($record) {
                    Notification::make()
                        ->title('Project Deleted')
                        ->body('The project was successfully deleted.')
                        ->icon('heroicon-s-trash')
                        ->success()
                        ->send();
                }),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}
