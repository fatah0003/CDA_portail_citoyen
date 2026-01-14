<?php

namespace App\Tests\Helper;

use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

trait CsrfHelper
{
    private function getCsrfToken(string $tokenId): string
    {
        /** @var CsrfTokenManagerInterface $manager */
        $manager = static::getContainer()->get('security.csrf.token_manager');

        return $manager->getToken($tokenId)->getValue();
    }
}
