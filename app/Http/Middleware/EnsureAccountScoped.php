<?php

namespace App\Http\Middleware;

use App\Repositories\AccountRepository;
use App\Services\AccountContext;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAccountScoped
{
    public function __construct(
        private readonly AccountRepository $accountRepository,
        private readonly AccountContext $accountContext,
    ) {}

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (! $user) {
            return $next($request);
        }

        $account = $this->accountRepository->findById($user->account_id);

        if (! $account) {
            abort(403, 'Account not found for the authenticated user.');
        }

        $this->accountContext->set($account);

        return $next($request);
    }
}
