<?php

/**
 * Vérifie les chaines
 * 
 * @license GNU public License V3
 */

namespace UPJV\Validator;
/**
 * Class EstValide, fonction build & check
 */
class EstValide implements ValidatorInterface
{
    /**
     * Fonction build.
     * 
     * @param string $param ceci est le commentaire
     * 
     * @return object
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
