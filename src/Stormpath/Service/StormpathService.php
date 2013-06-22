<?php

namespace Stormpath\Service;

use Stormpath\Client\ApiKey;



final class StormpathService
{

    const BASEURI = 'https://api.stormpath.com/v1';

    public static function createClient($accessId, $secretKey)
    {
        ApiKey::getAccessId($accessId);
        ApiKey::setSecretKey($secretKey);
    }

}