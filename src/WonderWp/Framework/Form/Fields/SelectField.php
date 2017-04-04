<?php

namespace WonderWp\Framework\Form\Fields;

class SelectField extends AbstractField
{
    use AbstractOptionsField;

    /** @inheritdoc */
    public function __construct($name, $value = null, $displayRules = [], $validationRules = [])
    {
        parent::__construct($name, $value, $displayRules, $validationRules);

        $this->tag = 'select';
    }
}
