<?php

namespace App\Filament\Resources\AssistanceResource\Pages;

use App\Filament\Resources\AssistanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssistance extends EditRecord
{
    protected static string $resource = AssistanceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
