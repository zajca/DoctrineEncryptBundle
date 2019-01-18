<?php declare(strict_types=1);


namespace Zajca\Bundle\EncryptBundle\Encryption;


use ParagonIE\HiddenString\HiddenString;

interface EncryptionInterface
{
    /**
     * @param string $data
     *
     * @return string
     */
    public function encrypt(string $data) : string;
    /**
     * @param string $data
     *
     * @return HiddenString
     */
    public function decrypt(string $data) : HiddenString;
}
