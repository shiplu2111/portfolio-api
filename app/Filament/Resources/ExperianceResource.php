<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperianceResource\Pages;
use App\Filament\Resources\ExperianceResource\RelationManagers;
use App\Models\Experiance;
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
use Michaeld555\FilamentCroppie\Components\Croppie;
use Filament\Notifications\Notification;
use Filament\Forms\Components\RichEditor;
class ExperianceResource extends Resource
{
    protected static ?string $model = Experiance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Experiance';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Resume';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company_name')
                ->label('Company Name')
                ->placeholder('E.g. Sara Inovations')
                ->columnSpan('full')
                ->required(),

                TextInput::make('address')
                ->label('Address')
                ->placeholder('E.g. Dhaka, Bangladesh')
                ->columnSpan('full')
                ->required(),

                TextInput::make('website_url')
                ->label('Website URL')
                ->placeholder('E.g. https://sara-inovations.com')
                ->columnSpan('full')
                ->required(),

                TextInput::make('position')
                ->label('Designation')
                ->placeholder('E.g. Senior Web Designer')
                ->columnSpan('full')
                ->required(),

                TextInput::make('start_date')
                ->label('Start Date')
                ->placeholder('E.g. Jan 2022')
                // ->columnSpan('full')
                ->required(),

                TextInput::make('end_date')
                ->label('End Date')
                ->placeholder('E.g. Jan 2026 or Present')
                // ->columnSpan('full')
                ->required(),
                RichEditor::make('description')
                ->label('Description')
                ->required()
                ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')->label('Company Name'),
                Tables\Columns\TextColumn::make('address')->label('Address'),
                Tables\Columns\TextColumn::make('position')->label('Designation'),
                Tables\Columns\TextColumn::make('start_date')->label('Start Date'),
                Tables\Columns\TextColumn::make('end_date')->label('End Date'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make() ->successNotification(null) // Disable default success notification
                ->after(function ($record) {
                    Notification::make()
                        ->title('Experiance Deleted')
                        ->body('The Experiance has been successfully deleted.')
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
            'index' => Pages\ListExperiances::route('/'),
            'create' => Pages\CreateExperiance::route('/create'),
            'edit' => Pages\EditExperiance::route('/{record}/edit'),
        ];
    }
}
