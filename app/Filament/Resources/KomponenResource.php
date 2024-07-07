<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KomponenResource\Pages;
use App\Filament\Resources\KomponenResource\RelationManagers;
use App\Models\Komponen;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KomponenResource extends Resource
{
    protected static ?string $model = Komponen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kriteria_id')
                ->relationship('kriteria', 'name')
                ->required()
                ->label('Kriteria'),
                TextInput::make('name')
                ->label('Nama')
                ->required(),
                TextInput::make('score')
                ->numeric(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kriteria.name')->label('kriteria')->sortable(),
                TextColumn::make('name')
                ->label('Nama'),
                TextColumn::make('score')
                ->label('Score')
                
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
            'index' => Pages\ListKomponens::route('/'),
            'create' => Pages\CreateKomponen::route('/create'),
            'edit' => Pages\EditKomponen::route('/{record}/edit'),
        ];
    }
}
