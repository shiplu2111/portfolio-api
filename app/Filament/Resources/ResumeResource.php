<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResumeResource\Pages;
use App\Filament\Resources\ResumeResource\RelationManagers;
use App\Models\Resume;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
class ResumeResource extends Resource
{
    protected static ?string $model = Resume::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Resumes';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationGroup = 'Home Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Service Duration')
                ->schema([
                    TextInput::make('start_year')
                    ->label('Start Year')
                    ->placeholder('E.g. 2022')
                    ->required(),

                    TextInput::make('end_year')
                    ->label('End Year')
                    ->placeholder('E.g. 2022')
                    ->required(),
                ]),
                Fieldset::make('Company & Designation')
                ->schema([
                    TextInput::make('title')
                    ->label('Company Name')
                    ->placeholder('E.g. Google')
                    ->required(),

                    TextInput::make('designation')
                    ->label('Designation')
                    ->placeholder('E.g. Web Developer')
                    ->required(),
                ]),

                    TextInput::make('website')
                    ->label('Website')
                    ->url()
                    ->columnSpan('full')
                    ->placeholder('E.g. https://shiplujs.com/'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('start_year') ->label('Start Year'),
                Tables\Columns\TextColumn::make('end_year') ->label('End Year'),
                Tables\Columns\TextColumn::make('title') ->label('Company Name'),
                Tables\Columns\TextColumn::make('designation') ->label('Designation'),
                Tables\Columns\TextColumn::make('website') ->label('Website'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->successNotificationTitle('User updated'),
                Tables\Actions\DeleteAction::make() ->successNotification(null) // Disable default success notification
                    ->after(function ($record) {
                        Notification::make()
                            ->title('Resume Deleted')
                            ->body('The Resume has been successfully deleted.')
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
            'index' => Pages\ListResumes::route('/'),
            'create' => Pages\CreateResume::route('/create'),
            'edit' => Pages\EditResume::route('/{record}/edit'),
        ];
    }
}
