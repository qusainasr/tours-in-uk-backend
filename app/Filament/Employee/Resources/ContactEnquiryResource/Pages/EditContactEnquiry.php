<?php

namespace App\Filament\Employee\Resources\ContactEnquiryResource\Pages;

use App\Filament\Employee\Resources\ContactEnquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactEnquiry extends EditRecord
{
    protected static string $resource = ContactEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
