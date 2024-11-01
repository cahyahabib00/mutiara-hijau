<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Dokumentasi;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DokumentasiResource\Pages;
use App\Filament\Resources\DokumentasiResource\RelationManagers;
use Faker\Core\File;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class DokumentasiResource extends Resource
{
    protected static ?string $model = Dokumentasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                Textarea::make('description'), 
                FileUpload::make('img'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('img'),
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
            'index' => Pages\ListDokumentasis::route('/'),
            'create' => Pages\CreateDokumentasi::route('/create'),
            'edit' => Pages\EditDokumentasi::route('/{record}/edit'),
        ];
    }
}
