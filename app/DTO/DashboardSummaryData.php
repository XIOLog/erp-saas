<?php

namespace App\DTO;

final readonly class DashboardSummaryData
{
    public function __construct(
        public string $accountName,
        public string $userName,
    ) {}
}
