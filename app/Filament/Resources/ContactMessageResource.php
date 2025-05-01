<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'view' => Pages\ViewContactMessage::route('/{record}'),
        ];
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('message')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('id') // ✅ Use real column
                ->label('Reply Status')
                ->formatStateUsing(function ($state, $record) {
                    return $record->replies()->exists() ? '✔️ Replied' : '👎 Not Replied';
                })
                ->badge()
                ->color(function ($state, $record) {
                    return $record->replies()->exists() ? 'success' : 'danger';
                }),])
            ->actions([
                // Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ]);
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('email')->required(),
            Forms\Components\TextInput::make('phone')->required(),
            Forms\Components\TextInput::make('subject')->required(),
            Forms\Components\Textarea::make('message')->required()->rows(5),
        ]);
    }
    protected function getFooterWidgets(): array
    {
        return [
            \App\Filament\Resources\ContactMessageResource\Widgets\ContactReplies::class,
        ];
    }
}
