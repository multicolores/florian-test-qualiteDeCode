<?php

namespace UPJV\Validator;
/**
Ceci est la doc de la classe

@category Test_De_Category
@package  Test_De_Category
@author   Display Name <username@example.com>
@license  test de category
@link     test de category
 */
class EstValide implements ValidatorInterface
{
    /**
     * Fonction build.
     * 
     * @param string $param ceci est le commentaire
     * 
     * @return $this
     */
    public function build(array $param): object
    {
        return $this;
    }
    /**
     * Fonction check.
     * 
     * @param string $input ceci est le commentaire
     * 
     * @return bool
     */
    public function check($input): bool
    {
        return true;
    }
}
