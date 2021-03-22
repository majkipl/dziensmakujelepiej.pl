<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * @param $name
     * @param $items
     * @param $class
     * @param $classWrapper
     * @param $error
     * @param $placeholder
     * @param $required
     * @param $selected
     */
    public function __construct(
        public $name = null,
        public $items = [],
        public $class = null,
        public $classWrapper = null,
        public $error = '',
        public $placeholder = '',
        public $required = false,
        public $selected = null
    )
    {
        $this->name = $name ?? 'form_select_' . Str::random(8);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
