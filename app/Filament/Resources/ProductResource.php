<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationGroup = 'Quản lý sản phẩm';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
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


                                Forms\Components\RichEditor::make('describe')
                                    ->label('Mô tả')
                                    ->required()
                                    ->columnSpan('full'),
                                Forms\Components\Textarea::make('content')
                                    ->label('Nội dung')
                                    ->required()
                                    ->columnSpan('full'),
                            ])
                            ->columns(2),


                        Forms\Components\Section::make('Thông tin sản phẩm')
                            ->schema([
                                // Forms\Components\TextInput::make('code_product')
                                //     ->label('Mã sản phẩm')
                                //     ->required()
                                //     ->maxLength(6),

                                Forms\Components\TextInput::make('old_price')
                                    ->label('Giá cũ')
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0)
                                    ->required()
                                    ->prefix('VNĐ'),

                                Forms\Components\TextInput::make('new_price')
                                    ->label('Giá mới')
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0)
                                    ->required()
                                    ->prefix('VNĐ'),

                                // Forms\Components\TextInput::make('discount')
                                //     ->label('Chiết khấu')
                                //     ->numeric()
                                //     ->default(0)
                                //     ->minValue(0)
                                //     ->required()
                                //     ->prefix('VNĐ'),

                            ])
                            ->columns(2)
                            ->collapsible(),


                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([

                        Forms\Components\Section::make()
                            ->schema([

                                Forms\Components\Select::make('category_level1_id')
                                    ->label('Danh mục cấp 1')
                                    ->relationship(name: 'category_level1', titleAttribute: "tittle")
                                    ->required(),

                                Forms\Components\Select::make('category_level2_id')
                                    ->label('Danh mục cấp 2')
                                    ->relationship(name: 'category_level2', titleAttribute: "tittle")
                                    ->required(),
                                Forms\Components\Select::make('tag_product_id')
                                    ->label('Tag sản phẩm')
                                    ->relationship(name: 'tag_product', titleAttribute: "tittle")
                                    ->required(),
                            ])->columns(2),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Hình ảnh')

                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
                Forms\Components\Section::make('Nội dung SEO')
                    ->schema([
                        Forms\Components\Grid::make()
                            // ->relationship('seo')
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
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
