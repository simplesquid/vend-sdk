<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\CreateCustomField;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\CreateRemoteRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\CreateRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\DeleteCustomField;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\DeleteRemoteRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\DeleteRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\GetCustomFieldValues;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\ListCustomFields;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\ListRemoteRules;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\ListRules;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\SetCustomFieldValues;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\UpdateCustomField;

class Workflows extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createCustomField(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateCustomField($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createRemoteRule(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateRemoteRule($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createRule(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateRule($payload));
    }

    public function deleteCustomField(
        string $customFieldId,
    ): Response {
        return $this->connector->send(new DeleteCustomField($customFieldId));
    }

    public function deleteRemoteRule(
        string $remoteRuleId,
    ): Response {
        return $this->connector->send(new DeleteRemoteRule($remoteRuleId));
    }

    public function deleteRule(
        string $ruleId,
    ): Response {
        return $this->connector->send(new DeleteRule($ruleId));
    }

    public function getCustomFieldValues(
        string $entity,
        string $entityId,
    ): Response {
        return $this->connector->send(new GetCustomFieldValues($entity, $entityId));
    }

    public function listCustomFields(
        string $entity,
    ): Response {
        return $this->connector->send(new ListCustomFields($entity));
    }

    public function listRemoteRules(): Response
    {
        return $this->connector->send(new ListRemoteRules());
    }

    public function listRules(): Response
    {
        return $this->connector->send(new ListRules());
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function setCustomFieldValues(
        array $payload,
    ): Response {
        return $this->connector->send(new SetCustomFieldValues($payload));
    }

    public function updateCustomField(
        string $customFieldId,
    ): Response {
        return $this->connector->send(new UpdateCustomField($customFieldId));
    }
}