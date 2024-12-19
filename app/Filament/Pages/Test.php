<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;

class Test extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('actions')
                ->modal()
                ->extraModalFooterActions([
                    Action::make('download')
                        ->action(function() {
                            // This works, but causes the containing modal to reopen when it is next closed.
                            // I cannot use url() instead of action() because I also need to run other logic.
                            $this->redirect('https://central.github.com/deployments/desktop/desktop/latest/win32');
                        })
                ])
        ];
    }
}
