<?php

namespace Utichawa\Translatable\Test\Model;

use Utichawa\Translatable\Translatable;

class CountryWithCustomTranslationModel extends Country
{
    use Translatable;

    public $table = 'countries';
    public $translationForeignKey = 'country_id';
    public $translationModel = 'Utichawa\Translatable\Test\Model\CountryTranslation';
}
