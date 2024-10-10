<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MangaUpdateResource\Pages;
use App\Models\MangaUpdate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MangaUpdateResource extends Resource
{
    protected static ?string $model = MangaUpdate::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('raw_url')
                    ->required()
                    ->maxLength(255)
                    ->url(),
                Forms\Components\TextInput::make('last_chapter')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\DateTimePicker::make('last_checked_at'),
                Forms\Components\TextInput::make('negative_identifier')
                    ->maxLength(255),
                Forms\Components\TextInput::make('chat_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('raw_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_chapter')
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_checked_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('negative_identifier')
                    ->searchable(),
                Tables\Columns\TextColumn::make('chat_id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMangaUpdates::route('/'),
            'create' => Pages\CreateMangaUpdate::route('/create'),
            'edit' => Pages\EditMangaUpdate::route('/{record}/edit'),
        ];
    }
}
