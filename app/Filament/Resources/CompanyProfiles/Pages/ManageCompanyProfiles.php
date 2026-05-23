<?php

namespace App\Filament\Resources\CompanyProfiles\Pages;

use App\Filament\Resources\CompanyProfiles\CompanyProfileResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCompanyProfiles extends ManageRecords
{
    protected static string $resource = CompanyProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
