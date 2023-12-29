<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FieldSocialLink extends Component
{
    /**
    * @var array|object
    */
    public $social;

    /**
    * @var string
    */
    public $name;

    /**
    * @var string
    */
    public $path;

    /**
    * @var string
    */
    public $placeholder;

    /**
    * @var string
    */
    public $length;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data, $social)
    {
        $this->name = $data['name'];
        $this->path = $data['path'];
        $this->placeholder = $data['placeholder'];
        $this->length = $data['length'];
        $this->social = $social;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.field-social-link');
    }
}
