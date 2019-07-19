<?php
    // src/Model/Table/ArticlesTable.php

// add this use statement right below the namespace declaration to import
// the Validator class
use Cake\Validation\Validator;

// Add the following method.
function validationDefault(Validator $validator)
{
    $validator
        ->allowEmptyString('title', false)
        ->minLength('title', 10)
        ->maxLength('title', 255)

        ->allowEmptyString('body', false)
        ->minLength('body', 10);

    return $validator;
}