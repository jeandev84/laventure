<?php

declare(strict_types=1);

namespace App\Service\Hash;

/**
 * EncryptedPassword (Когда буду реализовать компонент Security уже этот класс не нужно будет)
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Service\Hash
*/
class EncryptedPassword
{
    /**
     * @param string $plainPassword
     * @return string
    */
    public static function encrypt(string $plainPassword): string
    {
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }
}
