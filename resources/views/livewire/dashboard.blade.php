<div class="flex flex-col gap-6">
    <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
        <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Workspace Overview</h2>
        <dl class="mt-4 grid gap-4 md:grid-cols-2">
            <div class="space-y-1">
                <dt class="text-sm font-medium text-neutral-500 dark:text-neutral-400">Account</dt>
                <dd class="text-base font-semibold text-neutral-900 dark:text-neutral-100">{{ $summary->accountName }}</dd>
            </div>
            <div class="space-y-1">
                <dt class="text-sm font-medium text-neutral-500 dark:text-neutral-400">User</dt>
                <dd class="text-base font-semibold text-neutral-900 dark:text-neutral-100">{{ $summary->userName }}</dd>
            </div>
        </dl>
    </div>
</div>
