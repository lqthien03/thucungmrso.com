<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class GoogleAnalytics extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.google-analytics';
    protected static ?string $navigationGroup = 'Hệ thống';
}
