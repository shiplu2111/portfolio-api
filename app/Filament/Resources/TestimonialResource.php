<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
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
class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Testimonials';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Projects';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Name')
                ->placeholder('E.g. John Doe')
                ->columnSpan('full')
                ->required(),

                TextInput::make('designation')
                ->label('Designation')
                ->placeholder('E.g. Web Designer')
                ->required(),



                TextInput::make('company')
                ->label('Company Name')
                ->placeholder('E.g. Google')
                ->required(),



                Textarea::make('testimonial')
                ->label('Testimonial')
                ->required(),

                // FileUpload::make('image')
                // ->directory('about')
                // ->imageResizeMode('cover')
                // ->imageEditor()
                // ->label('Main Image')
                // ->required(),

                Croppie::make('image')
                ->avatar()
                ->label('Testimonial Image') // Field label
                ->disk('public') // Storage disk
                ->directory('testimonials') // Storage directory
                ->required()
                ->imageFormat('webp')
                ->imageResizeMode('cover'),

            // $table->string('name');
            // $table->string('image');
            // $table->string('company');
            // $table->string('designation');
            // $table->text('testimonial');
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\TextColumn::make('company'),
                ImageColumn::make('image')->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make() ->successNotification(null) // Disable default success notification
                ->after(function ($record) {
                    Notification::make()
                        ->title('Testimonial  Deleted')
                        ->body('The Testimonial has been successfully deleted.')
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
