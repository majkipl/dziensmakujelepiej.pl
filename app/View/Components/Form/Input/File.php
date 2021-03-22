<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class File extends Component
{
    public function __construct(
        public $name = null,
        public $class = null,
        public $error = '',
        public $required = false,
    )
    {
        $this->name = $name ?? 'form_input_' . Str::random(8);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.file');
    }
}
