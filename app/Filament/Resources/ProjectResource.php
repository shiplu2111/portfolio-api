<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Hidden;
class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-s-globe-alt';
    protected static ?string $navigationLabel = 'Projects';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->reactive()
                ->afterStateUpdated(fn($set, $state) => $set('slug', Str::slug($state)))
                ->required()
                ->maxLength(255),

            TextInput::make('slug')
                ->disabled()
                ->dehydrated()
                ->required(),

                RichEditor::make('short_description')
                ->columnSpan('full')->required()
                ->maxLength(255),

                RichEditor::make('description')->columnSpan('full')->required(),

                Repeater::make('related_service')
                ->schema([
                    Hidden::make('id')
                    ->default(fn () => (string) Str::uuid()),
                    TextInput::make('service')
                        ->label('Service Name')
                        ->required(),
                ])
                ->columnSpan('full')
                ->label('Related Services')
                ->addActionLabel('Add Related Service')
                ->default([
                    [
                        'id' => (string) Str::uuid(),
                        'service' => '',
                    ],
                ]),

                Select::make('category_id')
                // ->multiple()
                ->label('Category')
                ->options(\App\Models\ProjectCategory::pluck('title','id')->toArray())
                ->searchable()
                ->required(),

            TextInput::make('client')
                ->maxLength(255),

            TextInput::make('location')
                ->maxLength(255),
                TextInput::make('published_at')
                ->label('Published Date'),

            FileUpload::make('image')
            ->required()
            ->label('Cover Image')
            ->image()
            ->directory('projects/cover')
            ->imagePreviewHeight('150'),
            FileUpload::make('project_image_1')
                ->image()
                ->directory('projects/images')->imagePreviewHeight('150'),

            FileUpload::make('project_image_2')
                ->image()
                ->directory('projects/images')->imagePreviewHeight('150'),

            FileUpload::make('project_image_3')
                ->image()
                ->directory('projects/images')->imagePreviewHeight('150'),

            Textarea::make('project_summery'),

            TagsInput::make('tags')
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table->columns([
            TextColumn::make('title')->searchable()->sortable(),
            TextColumn::make('client'),
            TextColumn::make('location'),
            TextColumn::make('published_at'),
        ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
