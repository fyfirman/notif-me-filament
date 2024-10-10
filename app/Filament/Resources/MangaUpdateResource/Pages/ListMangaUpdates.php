<?php

namespace App\Filament\Resources\MangaUpdateResource\Pages;

use App\Filament\Resources\MangaUpdateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMangaUpdates extends ListRecords
{
    protected static string $resource = MangaUpdateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
