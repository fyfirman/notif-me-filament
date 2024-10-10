<?php

namespace App\Filament\Resources\MangaUpdateResource\Pages;

use App\Filament\Resources\MangaUpdateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMangaUpdate extends EditRecord
{
    protected static string $resource = MangaUpdateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
