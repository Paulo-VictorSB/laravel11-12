<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PessoasLinguas extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $pessoa,
        public array $linguas
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pessoas-linguas');
    }

    public function shouldRender(): bool
    {
        //  só renderiza o componente se uma pessoa fala mais do que uma língua
        return count($this->linguas) > 1;
    }

    public function colorName(): bool
    {
        // se a pessoa for o joão, destaca o nome
        return $this->pessoa == 'João';
    }
}
