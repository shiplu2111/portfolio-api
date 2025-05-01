<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Michaeld555\FilamentCroppie\Components\Croppie;
use Filament\Notifications\Notification;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'My Clients';
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationGroup = 'Services';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Name')
                ->placeholder('E.g. Bank of America')
                ->required(),

                Croppie::make('image')
                ->label('Logo')
                ->required()
                ->viewportType('square')
                ->viewportHeight(80)
                ->viewportWidth(129)
                ->imageFormat('webp')->directory('hero'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make() ->successNotification(null) // Disable default success notification
                ->after(function ($record) {
                    Notification::make()
                        ->title('Client Deleted')
                        ->body('The Client has been successfully deleted.')
                        ->icon('heroicon-s-trash')
                        ->success()
                        ->send();
                }),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
