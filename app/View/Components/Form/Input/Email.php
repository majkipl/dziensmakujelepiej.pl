<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Email extends Component
{
    /**
     * @param $name
     * @param $class
     * @param $classWrapper
     * @param $error
     * @param $max
     * @param $placeholder
     * @param $required
     * @param $value
     */
    public function __construct(
        public $name = null,
        public $class = null,
        public $classWrapper = null,
        public $error = '',
        public $max = null,
        public $placeholder = '',
        public $required = false,
        public $value = null
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
        return view('components.form.input.email');
    }
}
