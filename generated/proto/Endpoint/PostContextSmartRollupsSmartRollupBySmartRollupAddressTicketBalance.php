<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class PostContextSmartRollupsSmartRollupBySmartRollupAddressTicketBalance extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $smart_rollup_address;

    /**
     * Access the smart rollup's balance of ticket with specified ticketer, content type, and content.
     *
     * @param string $smartRollupAddress smart_rollup_address (Base58Check-encoded)
     */
    public function __construct(string $smartRollupAddress, ?\Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressTicketBalancePostBody $requestBody = null)
    {
        $this->smart_rollup_address = $smartRollupAddress;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{smart_rollup_address}'], [$this->smart_rollup_address], '/context/smart_rollups/smart_rollup/{smart_rollup_address}/ticket_balance');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressTicketBalancePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
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
