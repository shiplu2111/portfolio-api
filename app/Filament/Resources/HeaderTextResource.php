<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeaderTextResource\Pages;
use App\Filament\Resources\HeaderTextResource\RelationManagers;
use App\Models\HeaderText;
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
class HeaderTextResource extends Resource
{
    protected static ?string $model = HeaderText::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Header Text';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 10;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('About Me')
                ->schema([
                    TextInput::make('about_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('about_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Resume')
                ->schema([
                    TextInput::make('resume_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('resume_sub_title')
                    ->label('Short description'),
                ]),

                Fieldset::make('Service')
                ->schema([
                    TextInput::make('service_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('service_sub_title')
                    ->label('Short description'),
                ]),

                Fieldset::make('Skill')
                ->schema([
                    TextInput::make('skill_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('skill_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Project')
                ->schema([
                    TextInput::make('project_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('project_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Testimonial')
                ->schema([
                    TextInput::make('testimonial_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('testimonial_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Priceing Plan')
                ->schema([
                    TextInput::make('price_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('price_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Blog')
                ->schema([
                    TextInput::make('blog_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('blog_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Contact')
                ->schema([
                    TextInput::make('contact_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('contact_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Client')
                ->schema([
                    TextInput::make('client_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('client_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('FAQ')
                ->schema([
                    TextInput::make('faq_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('faq_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Education')
                ->schema([
                    TextInput::make('education_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('education_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Experiance')
                ->schema([
                    TextInput::make('experiance_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('experiance_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Certificate')
                ->schema([
                    TextInput::make('certificate_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('certificate_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Training')
                ->schema([
                    TextInput::make('training_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('training_sub_title')
                    ->label('Short description'),
                ]),


                Fieldset::make('Social Media')
                ->schema([
                    TextInput::make('social_title')
                    ->label('Title')
                    ->required(),


                    TextInput::make('social_sub_title')
                    ->label('Short description'),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('about_title')->label('About Title'),
                Tables\Columns\TextColumn::make('about_sub_title')->label('About Description'),
                Tables\Columns\TextColumn::make('resume_title')->label('Resume Title'),
                Tables\Columns\TextColumn::make('resume_sub_title')->label('Resume Description'),
                Tables\Columns\TextColumn::make('service_title')->label('Service Title'),
                Tables\Columns\TextColumn::make('service_sub_title')->label('Service Description'),
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
            'index' => Pages\ListHeaderTexts::route('/'),
            'edit' => Pages\EditHeaderText::route('/{record}/edit'),
            ...(Schema::hasTable('header_texts') && HeaderText::query()->exists() ? [] : [
                'create' => Pages\CreateHeaderText::route('/create'),
            ]),
        ];
    }
}
