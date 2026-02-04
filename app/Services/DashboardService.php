<?php

namespace App\Services;

use App\DTO\DashboardSummaryData;
use App\Repositories\UserRepository;

class DashboardService
{
    public function __construct(
        private readonly AccountContext $accountContext,
        private readonly UserRepository $userRepository,
    ) {}

    public function summaryForCurrentUser(): DashboardSummaryData
    {
        $user = $this->userRepository->current();
        $account = $this->accountContext->get();

        return new DashboardSummaryData(
            accountName: $account->name,
            userName: $user->name,
        );
    }
}
