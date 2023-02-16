<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

abstract class BaseTable extends Component
{
    use WithPagination;

    abstract protected function mount(): void;

    abstract protected function render(): View;

    abstract protected function getHeader(): array;

    abstract protected function getData(): Paginator;

    abstract protected function getPerPage(): int;
}
