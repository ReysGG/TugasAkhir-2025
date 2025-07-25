<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MataKuliahResource\Pages;
use App\Filament\Admin\Resources\MataKuliahResource\RelationManagers;
use App\Models\MataKuliah;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MataKuliahResource extends Resource
{
    protected static ?string $model = MataKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('program_studi_id')
                    ->relationship(name: 'programStudi', titleAttribute: 'nama_prodi')
                    ->label('Program Studi')
                    ->required(),
                Forms\Components\TextInput::make('kode_mk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_matakuliah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sks')
                    ->required()
                    ->numeric(),
                Select::make('dosens')
                    ->relationship('dosens', 'nama_dosen')
                    ->multiple()
                    ->preload()
                    ->label('Dosen Pengampu'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('programStudi.nama_prodi')
                    ->label('Program Studi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_mk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_matakuliah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dosens.nama_dosen')
                    ->label('Dosen Pengampu')
                    ->searchable(), // Anda bisa menambahkan search,
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
            'index' => Pages\ListMataKuliahs::route('/'),
            'create' => Pages\CreateMataKuliah::route('/create'),
            'edit' => Pages\EditMataKuliah::route('/{record}/edit'),
        ];
    }
}
