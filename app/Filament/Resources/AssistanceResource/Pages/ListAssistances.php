<?php

namespace App\Filament\Resources\AssistanceResource\Pages;

use App\Filament\Resources\AssistanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssistances extends ListRecords
{
    protected static string $resource = AssistanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
