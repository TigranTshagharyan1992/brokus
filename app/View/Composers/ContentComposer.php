<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Helpers\GetData;
class ContentComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct(

    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $content = GetData::getElement(CONTENT);
        $view->with('content', $content);
    }
}
