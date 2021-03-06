<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2016/11/15
 * Time: 10:03
 */
namespace ApigilityOauth2Adapter\DoctrineEntity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;

/**
 * Class OauthAccessToken
 * @package ApigilityOauth2Adapter\DoctrineEntity
 * @Entity @Table(name="oauth_access_tokens")
 */
class OauthAccessToken
{
    /**
     * @Id @Column(type="string", length=40, nullable=false)
     */
    protected $access_token;

    /**
     * @Column(type="string", length=80, nullable=false)
     */
    protected $client_id;

    /**
     * @Column(type="string", length=255, nullable=true)
     */
    protected $user_id;

    /**
     * @Column(type="datetime", nullable=false)
     */
    protected $expires;

    /**
     * @Column(type="string", length=2000, nullable=true)
     */
    protected $scope;
}