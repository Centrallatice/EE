<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EleveBundle\Service;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
/**
 * Description of IntergerEncoder
 *
 * @author sylvain.dupont
 */
class IntegerEncoder implements PasswordEncoderInterface
{

    public function encodePassword($raw,$salt)
    {
        return intval($raw); // Custom function for password encrypt
    }
    public function isPasswordValid($encoded, $raw, $salt)
    {   
        return $encoded === $this->encodePassword($raw,$salt);
    }

}