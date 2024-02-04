<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CardResource\Pages;
use App\Filament\Resources\CardResource\RelationManagers;
use App\Models\Card;
use App\Models\Player;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CardResource extends Resource
{
    protected static ?string $model = Card::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-2-stack';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationGroup = 'Cards';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('player_id')
                    ->required()
                    ->label('Player')
                    ->options(Player::all()->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\Select::make('against_1')
                    ->required()
                    ->label('Against 1')
                    ->options(Team::all()->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\Select::make('against_2')
                    ->required()
                    ->label('Against 2')
                    ->options(Team::all()->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('rating')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('played_champion_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('record_with_champion_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('played_champion_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('record_with_champion_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('week')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('player_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('against_1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('against_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rating')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('played_champion_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('record_with_champion_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('played_champion_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('record_with_champion_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('week')
                    ->searchable(),
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
            'index' => Pages\ListCards::route('/'),
            'create' => Pages\CreateCard::route('/create'),
            'edit' => Pages\EditCard::route('/{record}/edit'),
        ];
    }
}
