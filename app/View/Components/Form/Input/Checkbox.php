<?php

namespace App\View\Components\Panel\Form\Input;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * @param $name
     * @param $class
     * @param $classWrapper
     * @param $error
     * @param $required
     * @param $checked
     */
    public function __construct(
        public $name = null,
        public $class = null,
        public $classWrapper = null,
        public $error = '',
        public $required = false,
        public $checked = false,
    )
    {
        $this->name = $name ?? 'form_input_' . Str::random(8);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input.checkbox');
    }
}
