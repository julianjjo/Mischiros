<?php

namespace Mischiros\UsuariosBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MischirosUsuariosBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
