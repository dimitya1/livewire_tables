<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;

class UsersTable extends BaseTable
{
    public Paginator $data;

    public array $header;

    public int $perPage;

    public function mount(): void
    {
        $this->header = $this->getHeader();
        $this->perPage = $this->getPerPage();
    }

    public function render(): View
    {
        return view('livewire.users-table', ['users' => $this->getData()]);
    }

    protected function getData(): Paginator
    {
        return User::paginate($this->getPerPage());
    }

    protected function getHeader(): array
    {
        return config('tables.users.columns');
    }

    protected function getPerPage(): int
    {
        return config('tables.users.per_page') ?? config('app.tables.per_page');
    }
}
