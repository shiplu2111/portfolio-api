<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
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
class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'About Me';
    protected static ?string $navigationGroup = 'Home Page';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->placeholder('E.g. Years of Experience')
                ->columnSpan('full')
                ->required(),

                TextInput::make('designation')
                ->label('Designation')
                ->placeholder('E.g. Experience Designer')
                ->required(),



                TextInput::make('testimonial_name')
                ->label('Reviewer Name')
                ->placeholder('Enter the name of the testimonial giver')
                ->required(),



                Textarea::make('description')
                ->label('Description')
                ->required()
                ->columnSpan('full'),

                FileUpload::make('image')
                ->directory('about')
                ->imageResizeMode('cover')
                ->imageEditor()
                ->label('Main Image')
                ->required(),
                FileUpload::make('testimonial_image')
                ->directory('testimonial_image')
                ->imageResizeMode('cover')
                ->imageEditor()
                ->required(),

                FileUpload::make('designation_image')
                ->directory('designation_image')
                ->imageResizeMode('cover')
                ->imageEditor()
                ->required(),
                // FileUpload::make('designation_image')
                // ->directory('designation_image')
                // ->imageResizeMode('cover')
                // ->label('Reviewer Image')
                // ->imageEditor()
                // ->required(),
                Repeater::make('services')
                ->schema([
                    Hidden::make('id')
                    ->default(fn () => (string) Str::uuid()),
                    TextInput::make('service')
                        ->label('Service Name')
                        ->required(),
                ])
                ->columnSpan('full')
                ->label('Services')
                ->addActionLabel('Add Service')
                ->default([
                    [
                        'id' => (string) Str::uuid(),
                        'service' => '',
                    ],
                ])

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\TextColumn::make('testimonial_name')->label('Reviewer Name'),
                ImageColumn::make('testimonial_image')->circular()->label(' Reviewer Image'),
                ImageColumn::make('image')->circular(),
                Tables\Columns\TextColumn::make('description'),
                // Tables\Columns\TextColumn::make('services'),

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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
