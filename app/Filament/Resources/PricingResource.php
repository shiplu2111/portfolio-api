<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingResource\Pages;
use App\Filament\Resources\PricingResource\RelationManagers;
use App\Models\Pricing;
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
class PricingResource extends Resource
{
    protected static ?string $model = Pricing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pricing Package';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->placeholder('E.g. Basic Plan')
                // ->columnSpan('full')
                ->required(),

                TextInput::make('sub_title')
                ->label('Sub Title')
                ->placeholder('E.g. Try Out Basic Plan Save 20%')
                ->required(),


                TextInput::make('price')
                ->label('Price')
                ->placeholder('E.g. 19.95')
                ->required(),

                TextInput::make('currency_symbol')
                ->label('Currency Symbol')
                ->placeholder('E.g. $')
                ->required(),

                TextInput::make('duration')
                ->label('Duration')
                ->placeholder('E.g. Per Month')
                ->required(),

                TextInput::make('description')
                ->label('Short Description')
                ->placeholder('Short Description of the plan')
                ->required(),

                Fieldset::make('Service Include & Not Include')
                ->schema([
                Repeater::make('service_include')
                ->schema([
                    Hidden::make('id')
                    ->default(fn () => (string) Str::uuid()),
                    TextInput::make('service_include')
                        ->label('Service  Include Name')
                        ->placeholder('E.g. Website Design')
                ]),

                Repeater::make('service_not_include')
                ->schema([
                    Hidden::make('id')
                    ->default(fn () => (string) Str::uuid()),
                    TextInput::make('service_not_include')
                        ->label('Service Not Include Name')
                        ->placeholder('E.g. Website Design')

                ])
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('sub_title'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('currency_symbol'),
                Tables\Columns\TextColumn::make('duration'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make() ->successNotification(null) // Disable default success notification
                ->after(function ($record) {
                    Notification::make()
                        ->title('Pricing Package Deleted')
                        ->body('The Pricing Package has been successfully deleted.')
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
            'index' => Pages\ListPricings::route('/'),
            'create' => Pages\CreatePricing::route('/create'),
            'edit' => Pages\EditPricing::route('/{record}/edit'),
        ];
    }
}
