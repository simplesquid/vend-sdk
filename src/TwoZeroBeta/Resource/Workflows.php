<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\CreateCustomField;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\CreateRemoteRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\CreateRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\DeleteCustomField;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\DeleteRemoteRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\DeleteRule;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\GetCustomFields;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\GetCustomFieldValues;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\GetRemoteRules;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\GetRules;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\SetCustomFieldValues;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows\UpdateCustomField;
use SimpleSquid\Vend\TwoZeroBeta\Resource;

class Workflows extends Resource
{
    /**
     * @param  string  $entity The entity type.
     */
    public function getCustomFields(string $entity): Response
    {
        return $this->connector->send(new GetCustomFields($entity));
    }

    public function createCustomField(): Response
    {
        return $this->connector->send(new CreateCustomField());
    }

    /**
     * @param  string  $customFieldId The ID of the custom field that you want to update.
     */
    public function updateCustomField(string $customFieldId): Response
    {
        return $this->connector->send(new UpdateCustomField($customFieldId));
    }

    /**
     * @param  string  $customFieldId The ID of the custom field that you want deleted.
     */
    public function deleteCustomField(string $customFieldId): Response
    {
        return $this->connector->send(new DeleteCustomField($customFieldId));
    }

    /**
     * @param  string  $entity The entity type.
     * @param  string  $entityId The entity ID.
     */
    public function getCustomFieldValues(string $entity, string $entityId): Response
    {
        return $this->connector->send(new GetCustomFieldValues($entity, $entityId));
    }

    public function setCustomFieldValues(): Response
    {
        return $this->connector->send(new SetCustomFieldValues());
    }

    public function getRemoteRules(): Response
    {
        return $this->connector->send(new GetRemoteRules());
    }

    public function createRemoteRule(): Response
    {
        return $this->connector->send(new CreateRemoteRule());
    }

    /**
     * @param  string  $remoteRuleId The ID of the remote business rules that you want deleted.
     */
    public function deleteRemoteRule(string $remoteRuleId): Response
    {
        return $this->connector->send(new DeleteRemoteRule($remoteRuleId));
    }

    public function getRules(): Response
    {
        return $this->connector->send(new GetRules());
    }

    public function createRule(): Response
    {
        return $this->connector->send(new CreateRule());
    }

    /**
     * @param  string  $ruleId The ID of the business rules that you want deleted.
     */
    public function deleteRule(string $ruleId): Response
    {
        return $this->connector->send(new DeleteRule($ruleId));
    }
}
