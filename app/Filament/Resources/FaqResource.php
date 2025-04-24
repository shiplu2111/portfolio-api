<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
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
class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'FAQ';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 10;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Header Text')
                ->placeholder('Professional Solutions For Your Digital Product Design and development')
                ->columnSpan('full')
                ->required(),

                Croppie::make('image_one')
                ->label('Image One')
                ->viewportType('square')
                ->viewportHeight(410)
                ->viewportWidth(397)
                ->columnSpan('full')
                ->imageFormat('webp')->directory('about'),

                Croppie::make('image_two')
                ->label('Image Two')
                ->viewportType('square')
                ->viewportHeight(410)
                ->viewportWidth(397)
                ->columnSpan('full')
                ->imageFormat('webp')->directory('about'),

                Repeater::make('faqs')
                ->schema([
                    Hidden::make('id')
                    ->default(fn () => (string) Str::uuid()),
                    TextInput::make('question')
                    ->label('Question')
                    ->required(),
                    TextInput::make('answer')
                    ->label('Answer')
                    ->required(),
                ])
                ->columnSpan('full')
                ->label('FAQs')
                ->addActionLabel('Add Faq')
                ->default([
                    [
                        'id' => (string) Str::uuid(),
                        'faq' => '',
                    ],
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                ImageColumn::make('image_one')->label(' Image One'),
                ImageColumn::make('image_two')->label(' Image Two'),
                // Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
