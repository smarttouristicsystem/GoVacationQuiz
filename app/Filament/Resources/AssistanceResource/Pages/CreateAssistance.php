<?php

namespace App\Filament\Resources\AssistanceResource\Pages;

use App\Filament\Resources\AssistanceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAssistance extends CreateRecord
{
    protected static string $resource = AssistanceResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
