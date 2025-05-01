<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmailSetupResource\Pages;
use App\Filament\Resources\EmailSetupResource\RelationManagers;
use App\Models\EmailSetup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Str;
use Filament\Forms\Components\Textarea;
use Michaeld555\FilamentCroppie\Components\Croppie;
use Filament\Forms\Components\Fieldset;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Schema;
class EmailSetupResource extends Resource
{
    protected static ?string $model = EmailSetup::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Email Setup';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 10;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('mail_driver')
                ->label('Driver')
                ->placeholder('E.g. smtp')
                ->required(),

                TextInput::make('mail_host')
                ->label('Host')
                ->placeholder('E.g. mailpit')
                ->required(),

                TextInput::make('mail_port')
                ->integer()
                ->label('Port')
                ->placeholder('E.g. 1025')
                ->required(),

                TextInput::make('mail_username')
                ->label('Username')
                ->placeholder('E.g. mail.shiplujs.com')
                ->required(),

                TextInput::make('mail_password')
                ->label('Password')
                ->password()
                ->revealable()
                ->placeholder('Enter your password')
                ->required(),

                TextInput::make('mail_encryption')
                ->label('Encryption')
                ->placeholder('E.g. tls')
                ->required(),

                TextInput::make('mail_from_address')
                ->email()
                ->label('From Address')
                ->suffixIcon('heroicon-o-envelope')
                ->placeholder('E.g. me@shiplujs.com')
                ->required(),

                TextInput::make('mail_from_name')
                ->label('From Name')
                ->suffixIcon('heroicon-o-user')
                ->placeholder('E.g. shiplujs')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mail_driver')->label('Driver'),
                Tables\Columns\TextColumn::make('mail_host')->label('Host'),
                Tables\Columns\TextColumn::make('mail_port')->label('Port'),
                Tables\Columns\TextColumn::make('mail_username')->label('Username'),
                Tables\Columns\TextColumn::make('mail_encryption')->label('Encryption'),
                Tables\Columns\TextColumn::make('mail_from_address')->label('From Address'),
                Tables\Columns\TextColumn::make('mail_from_name')->label('From Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEmailSetups::route('/'),
            'edit' => Pages\EditEmailSetup::route('/{record}/edit'),
            ...(Schema::hasTable('email_setups') && EmailSetup::query()->exists() ? [] : [
                'create' => Pages\CreateEmailSetup::route('/create'),
            ]),
        ];
    }
}
