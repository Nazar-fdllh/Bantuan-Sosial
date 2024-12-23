<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilResource\Pages;
use App\Filament\Resources\ProfilResource\RelationManagers;
use App\Models\Profil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('profil_images'),
                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
                Forms\Components\TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->unique(),
                Forms\Components\Textarea::make('bio')
                    ->label('Bio'),
                Forms\Components\TextInput::make('keahlian')
                    ->label('Keahlian'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar'),
                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nim')
                    ->label('NIM')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('bio')
                    ->label('Bio')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('keahlian')
                    ->label('Keahlian')
                    ->searchable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}