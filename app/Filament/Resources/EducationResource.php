<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('profile_id')
                ->relationship('profile', 'first_name')
                ->required(),
                Forms\Components\TextInput::make('name')
                ->label('Qualification')
                ->required(),
                Forms\Components\TextInput::make('provider')
                ->label('Institution')
                ->required(),
                Forms\Components\TextInput::make('provider_link')
                ->label('Institution website'),
                Forms\Components\DatePicker::make('start_date')
                ->label('Start Date'),
                Forms\Components\DatePicker::make('end_date')
                ->label('End Date'),
                Forms\Components\TextInput::make('description')
                ->label('Study details'),
                Forms\Components\TextInput::make('certificate_link')
                ->label('Certificate')
                ->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('provider'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('start_date'),
                Tables\Columns\TextColumn::make('end_date'),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
