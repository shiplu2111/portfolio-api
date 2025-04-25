<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralSettingResource\Pages;
use App\Filament\Resources\GeneralSettingResource\RelationManagers;
use App\Models\GeneralSetting;
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
use Illuminate\Support\Facades\Schema;
class GeneralSettingResource extends Resource
{
    protected static ?string $model = GeneralSetting::class;
    protected static ?string $navigationIcon = 'heroicon-m-wrench-screwdriver';
    protected static ?string $navigationLabel = 'General Settings';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 10;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name')
                ->label('Site Name')
                ->placeholder('E.g. Shiplu JS')
                // ->columnSpan('full')
                ->required(),


                TextInput::make('email')
                ->label('Email')
                ->placeholder('E.g. me@shiplujs.com')
                ->required(),

                Croppie::make('logo')
                ->label('Logo')
                ->viewportType('square')
                ->viewportHeight(67)
                ->viewportWidth(176)
                ->imageResizeTargetWidth(176)
                ->imageResizeTargetHeight(67)
                ->disk('public') // Storage disk
                ->directory('site') // Storage directory
                ->required()
                ->columnSpan('full')
                ->imageFormat('png')
                ->imageResizeMode('cover'),


                Croppie::make('preloader')
                ->label('Preloader')
                ->viewportType('square')
                ->viewportHeight(100)
                ->viewportWidth(100)
                ->imageResizeTargetWidth(100)
                ->imageResizeTargetHeight(100)
                ->disk('public') // Storage disk
                ->directory('site') // Storage directory
                // ->required()
                ->imageResizeMode('cover'),

                Croppie::make('favicon')
                ->label('Favicon')
                ->viewportType('square')
                ->viewportHeight(100)
                ->viewportWidth(100)
                ->imageResizeTargetWidth(100)
                ->imageResizeTargetHeight(100)
                ->disk('public') // Storage disk
                ->directory('site') // Storage directory
                ->required()
                ->imageResizeMode('cover'),

                TextInput::make('phone')
                ->label('Phone')
                ->placeholder('E.g. +8801711002919')
                ->required(),


                TextInput::make('address')
                ->label('Address')
                ->placeholder('E.g. Block 1, Road 1, House 1')
                ->required(),


                TextInput::make('city')
                ->label('City')
                ->placeholder('E.g. Dhaka')
                ->required(),


                TextInput::make('district')
                ->label('District')
                ->placeholder('E.g. Dhaka')
                ->required(),


                TextInput::make('country')
                ->label('Country')
                ->placeholder('E.g. Bangladesh')
                ->required(),


                TextInput::make('postal_code')
                ->label('Postal Code')
                ->placeholder('E.g. 1205')
                ->required(),


                TextInput::make('copyright')
                ->label('Copyright text')
                ->placeholder('E.g. @ 2020 Shiplu JS. All rights reserved.')
                ->required(),


                TextInput::make('map')
                ->label('Map Link')
                ->placeholder('E.g. Google Map Link')
                ->required(),



                Repeater::make('social_link')
                ->schema([
                    Hidden::make('id')
                    ->default(fn () => (string) Str::uuid()),
                    TextInput::make('name')
                        ->label('Name')
                        ->placeholder('E.g. Facebook')
                        ->required(),

                        TextInput::make('icon')
                        ->label('Icon Use React Icon')
                        ->placeholder('E.g. FaFacebookF')
                        ->required(),

                        TextInput::make('url')
                        ->label('URL')
                        ->placeholder('E.g. https://www.facebook.com/shiplujs')
                        ->required(),
                ])
                ->columnSpan('full')
                ->label('Social Link')
                ->addActionLabel('Add Social Link')
                ->default([
                    [
                        'id' => (string) Str::uuid(),
                        'social_link' => '',
                    ],
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('site_name')->label('Site Name'),
                ImageColumn::make('logo')->label('Logo'),
                ImageColumn::make('favicon')->circular()->label('Favicon'),
                ImageColumn::make('preloader')->circular()->label('Preloader'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Phone'),
                Tables\Columns\TextColumn::make('address')->label('Address'),
                Tables\Columns\TextColumn::make('city')->label('City'),
                Tables\Columns\TextColumn::make('district')->label('District'),
                Tables\Columns\TextColumn::make('country')->label('Country'),

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
            'index' => Pages\ListGeneralSettings::route('/'),
            'edit' => Pages\EditGeneralSetting::route('/{record}/edit'),
            ...(Schema::hasTable('general_settings') && GeneralSetting::query()->exists() ? [] : [
                'create' => Pages\CreateGeneralSetting::route('/create'),
            ]),
        ];
    }
}
