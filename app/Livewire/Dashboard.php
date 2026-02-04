<?php

namespace App\Livewire;

use App\Services\DashboardService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public function render(DashboardService $dashboardService): View
    {
        return view('livewire.dashboard', [
            'summary' => $dashboardService->summaryForCurrentUser(),
        ]);
    }
}
