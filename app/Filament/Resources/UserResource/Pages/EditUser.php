<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ActionGroup::make([
                Actions\Action::make('access api')
                    ->color('success')
                    ->action(function (User $record) {
                        $record->tokens()->delete();
                        $token = $record->createToken('api_token')->plainTextToken;

                        Notification::make()
                            ->title('Token created')
                            ->body($token)
                            ->success()
                            ->persistent()
                            ->send();
                    }),
            ]),
        ];
    }
}
