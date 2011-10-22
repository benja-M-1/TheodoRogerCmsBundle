<?php

namespace Theodo\RogerCmsBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * RoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoleRepository extends EntityRepository
{
    const ROLE_USER   = 'ROLE_USER';
    const ROLE_ADMIN  = 'ROLE_ADMIN';
    const ROLE_CLIENT = 'ROLE_CLIENT';

    const ROLE_USER_NAME   = 'Designer';
    const ROLE_ADMIN_NAME  = 'Administrator';
    const ROLE_CLIENT_NAME = 'Client';

    /**
     * Return available roles
     * 
     * @return array
     * @author Vincent Guillon <vincentg@theodo.fr>
     * @since 2011-06-24
     */
    public static function getAvailableRoles()
    {
        return array(
            self::ROLE_USER   => self::ROLE_USER_NAME,
            self::ROLE_ADMIN  => self::ROLE_ADMIN_NAME,
            self::ROLE_CLIENT => self::ROLE_CLIENT_NAME,
        );
    }
}