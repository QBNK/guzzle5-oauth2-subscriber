<?php namespace Nmrkt\GuzzleOAuth2\GrantType;

use Nmrkt\GuzzleOAuth2\TokenData;
use Nmrkt\GuzzleOAuth2\Signer\ClientCredentials\SignerInterface;

interface GrantTypeInterface
{
    /**
     * Get the token data returned by the OAuth2 server.
     *
     * @return TokenData
     */
    public function getTokenData(SignerInterface $clientCredentialsSigner);
}
