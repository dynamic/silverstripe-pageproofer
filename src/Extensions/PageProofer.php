<?php

namespace Dynamic\PageProofer\Extensions;

use Dynamic\PageProofer\Model\PageProoferCode;
use SilverStripe\Core\Extension;
use SilverStripe\Dev\Debug;
use SilverStripe\View\ArrayData;
use SilverStripe\View\Requirements;

/**
 * Class PageProofer
 * @package Dynamic\PageProofer\Extensions
 */
class PageProofer extends Extension
{
    /**
     *
     */
    public function onAfterInit()
    {
        if ($code = PageProoferCode::get_page_proofer()) {
            Requirements::javascript("//app.pageproofer.com/embed/{$code->Code}", ['async' => true]);
        }
    }
}
