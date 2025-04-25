<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
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
class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Education';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Resume';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('institute')
                ->label('Institute')
                ->placeholder('E.g. Oxford University')
                ->columnSpan('full')
                ->required(),

                TextInput::make('address')
                ->label('Institute address')
                ->placeholder('E.g. Dhaka, Bangladesh')
                ->columnSpan('full')
                ->required(),

                TextInput::make('subject')
                ->label('Subject/Course')
                ->placeholder('E.g. Computer Science')
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('institute')->label('Institute'),
                Tables\Columns\TextColumn::make('address')->label('Institute address'),
                Tables\Columns\TextColumn::make('subject')->label('Subject/Course'),
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
                        ->title('Testimonial  Deleted')
                        ->body('The Testimonial has been successfully deleted.')
                        ->icon('heroicon-s-trash')
                        ->success()
                        ->send();
                }),
                Tables\Actions\ViewAction::make(),// Disable default success notification
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
