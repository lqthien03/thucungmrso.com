<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryLevel1Resource\Pages;
use App\Filament\Resources\CategoryLevel1Resource\RelationManagers;
use App\Models\Category_level1;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryLevel1Resource extends Resource
{
    protected static ?string $model = Category_level1::class;
    protected static ?string $navigationGroup = 'Quản lý sản phẩm';
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        // dd(Category_level1::all());
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Nội dung sản phẩm')
                            ->schema([
                                Forms\Components\TextInput::make('tittle')
                                    ->label('Tiêu đề')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, string $state, Forms\Set $set) {
                                        $set('link', Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('link')
                                    ->label('Link')
                                    ->disabled()
                                    ->dehydrated()
                                    ->required(),
                                Forms\Components\Textarea::make('describe')
                                    ->label('Nội dung')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan('full'),
                                Forms\Components\Toggle::make('display')
                                    ->default(true),
                                Forms\Components\Toggle::make('outstand')
                                    ->default(true),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 3]),

                // Forms\Components\Group::make()
                //     ->schema([
                //         Forms\Components\Section::make()
                //             ->schema([
                //                 Forms\Components\FileUpload::make('image')
                //                     ->label('Hình ảnh')
                //             ]),
                //     ])
                //     ->columnSpan(['lg' => 1]),
                Forms\Components\Section::make('Nội dung SEO')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->relationship('seo')
                            ->schema([
                                Forms\Components\TextInput::make('seo_tittle')
                                    ->required()
                                    ->maxValue(50)
                                    ->live(onBlur: true),
                                Forms\Components\TextInput::make('seo_keyword')
                                    ->required()
                                    ->maxValue(50)
                                    ->live(onBlur: true),
                                Forms\Components\Textarea::make('seo_description')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->columnSpan('full'),
                            ]),
                    ])
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Số thứ tự'),
                // Tables\Columns\ImageColumn::make('image')
                //     ->label('Hình ảnh'),
                Tables\Columns\TextColumn::make('tittle')
                    ->label('Tiêu đề'),
                Tables\Columns\ToggleColumn::make('display')
                    ->label('Hiển thị'),
                Tables\Columns\ToggleColumn::make('outstand')
                    ->label('Nổi bật'),
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
            'index' => Pages\ListCategoryLevel1s::route('/'),
            'create' => Pages\CreateCategoryLevel1::route('/create'),
            'edit' => Pages\EditCategoryLevel1::route('/{record}/edit'),
        ];
    }
}
