<?php

namespace App\Filament\Employee\Resources\ContactSectionResource\Pages;

use App\Filament\Employee\Resources\ContactSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactSection extends EditRecord
{
    protected static string $resource = ContactSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}