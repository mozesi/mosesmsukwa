<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Work;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('profile_id')
                ->relationship('profile', 'first_name')
                ->required(),
                Forms\Components\TextInput::make('employer')
                ->label('Employer')
                ->required(),
                Forms\Components\DatePicker::make('start_date')
                ->label('Start Date'),
                Forms\Components\DatePicker::make('end_date')
                ->label('End Date'),
                Forms\Components\TextInput::make('job_description')
                ->label('Job details'),
                Forms\Components\TextInput::make('key_achievements')
                ->label('Key achievements'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('employer'),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}
