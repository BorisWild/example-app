<?php

namespace App\Filament\App\Resources;

use App\Filament\Resources\ContractResource\Pages;
use App\Filament\Resources\ContractResource\RelationManagers;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContractResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationLabel = 'Contracts';

    protected static ?int $navigationSort = 2;

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
                Toggle::make('is_public')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->toggleable(isToggledHiddenByDefault: true)
                ,
                TextColumn::make('user_id')
                    ->toggleable(isToggledHiddenByDefault: true)
                ,
                TextColumn::make('title')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false)
                ,
                TextColumn::make('text')
                    ->html()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                ,
                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ,
                TextColumn::make('updated_at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false)
                ,
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
            'index' => \App\Filament\App\Resources\ContractResource\Pages\ListContracts::route('/'),
            'create' => \App\Filament\App\Resources\ContractResource\Pages\CreateContract::route('/create'),
            'edit' => \App\Filament\App\Resources\ContractResource\Pages\EditContract::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where(['user_id'=>auth()->user()->id]);
    }
}
