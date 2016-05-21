<?php

namespace Recipy\Extension\Twig;

use Twig_Extension;

/**
 * Class User
 * @package Recipy\Extension\Twig
 */
class User extends Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function getFunctions() : array
    {
        return [
            new \Twig_SimpleFunction('isLogged', function () {
                return $this->isLogged();
            })
        ]; // TODO: Change the autogenerated stub
    }

    /**
     * Returns the login status
     *
     * @return bool
     */
    protected function isLogged() : bool
    {
        return !!($_SESSION['user']['id'] ?? true);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName() : string
    {
        return 'user';
    }
}
