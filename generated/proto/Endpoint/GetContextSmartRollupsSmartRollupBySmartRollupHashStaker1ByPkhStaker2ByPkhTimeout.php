<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextSmartRollupsSmartRollupBySmartRollupHashStaker1ByPkhStaker2ByPkhTimeout extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $Smart_rollup_hash;
    protected $pkh;

    /**
     * Returns the timeout of players.
     *
     * @param string $smartRollupHash Smart_rollup_hash (Base58Check-encoded)
     * @param string $pkh             A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     */
    public function __construct(string $smartRollupHash, string $pkh)
    {
        $this->Smart_rollup_hash = $smartRollupHash;
        $this->pkh = $pkh;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{Smart_rollup_hash}', '{pkh}'], [$this->Smart_rollup_hash, $this->pkh], '/context/smart_rollups/smart_rollup/{Smart_rollup_hash}/staker1/{pkh}/staker2/{pkh}/timeout');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
