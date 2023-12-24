<?php

namespace App\Filament\App\Resources;

use App\Filament\Resources\FeedResource\Pages;
use App\Filament\Resources\FeedResource\RelationManagers;
use App\Models\Contract;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FeedResource extends Resource
{
    protected static ?string $model = Contract::class;
    protected static ?string $modelLabel = 'Feed';
    protected static ?string $pluralModelLabel = 'Feed';
    protected static ?string $navigationLabel = 'Feed';
    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->maxLength(255)
                ->columnSpanFull(),
            RichEditor::make('text')
                ->disableToolbarButtons([
                    'attachFiles',
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return ContractResource::table($table);

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
            'index' => \App\Filament\App\Resources\FeedResource\Pages\ListFeeds::route('/'),
            //'create' => Pages\CreateFeed::route('/create'),
            //'edit' => Pages\EditFeed::route('/{record}/edit'),
            'view' => \App\Filament\App\Resources\FeedResource\Pages\ViewFeed::route('/{record}/view'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where(['is_public'=>1]);
    }
}
