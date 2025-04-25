<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificateResource\Pages;
use App\Filament\Resources\CertificateResource\RelationManagers;
use App\Models\Certificate;
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
class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Certificates';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Resume';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('provider_name')
                ->label('Provider Name')
                ->placeholder('E.g. Dhaka University')
                ->columnSpan('full')
                ->required(),

                TextInput::make('address')
                ->label('Address')
                ->placeholder('E.g. Dhaka, Bangladesh')
                ->required(),

                TextInput::make('year')
                ->label('Year')
                ->placeholder('E.g. 2025')
                ->required(),

                Croppie::make('certificate')
                ->label('Certificates')
                ->viewportType('square')
                ->viewportHeight(350)
                ->viewportWidth(248)
                ->imageResizeTargetWidth(248)
                ->imageResizeTargetHeight(350)
                ->disk('public') // Storage disk
                ->directory('certificate') // Storage directory
                ->required()
                ->columnSpan('full')
                ->imageResizeMode('cover'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('provider_name')->label('Provider Name'),
                Tables\Columns\TextColumn::make('address')->label('Address'),
                Tables\Columns\TextColumn::make('year')->label('Year'),
                ImageColumn::make('certificate')->label('Certificate'),
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
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificate::route('/create'),
            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }
}
