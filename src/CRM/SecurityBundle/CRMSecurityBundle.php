<?php

namespace CRM\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CRMSecurityBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
