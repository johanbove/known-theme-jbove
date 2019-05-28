<?php

namespace Themes\Jbove {

    class Controller extends \Idno\Common\Theme
    {
        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'jbove', dirname(__FILE__) . '/languages/'
                )
            );
        }
    }

}

