<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextContractsByContractIdEntrypoint extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $contract_id;

    /**
     * Return the list of entrypoints of the contract.
     *
     * @param string $contractId      a contract identifier encoded in b58check
     * @param array  $queryParameters {
     *
     *     @var string $normalize_types Whether types should be normalized (annotations removed, combs flattened) or kept as they appeared in the original script.
     * }
     */
    public function __construct(string $contractId, array $queryParameters = [])
    {
        $this->contract_id = $contractId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{contract_id}'], [$this->contract_id], '/context/contracts/{contract_id}/entrypoints');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['normalize_types']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('normalize_types', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdEntrypointsGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdEntrypointsGetResponse200', 'json');
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
