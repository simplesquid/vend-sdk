<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
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

class Workflows extends Resource
{
    public function listCustomFields(
        string $entity,
    ): Response {
        return $this->connector->send(new ListCustomFields($entity));
    }

    public function createCustomField(): Response
    {
        return $this->connector->send(new CreateCustomField());
    }

    public function updateCustomField(
        string $customFieldId,
    ): Response {
        return $this->connector->send(new UpdateCustomField($customFieldId));
    }

    public function deleteCustomField(
        string $customFieldId,
    ): Response {
        return $this->connector->send(new DeleteCustomField($customFieldId));
    }

    public function getCustomFieldValues(
        string $entity,
        string $entityId,
    ): Response {
        return $this->connector->send(new GetCustomFieldValues($entity, $entityId));
    }

    public function setCustomFieldValues(): Response
    {
        return $this->connector->send(new SetCustomFieldValues());
    }

    public function listRemoteRules(): Response
    {
        return $this->connector->send(new ListRemoteRules());
    }

    public function createRemoteRule(): Response
    {
        return $this->connector->send(new CreateRemoteRule());
    }

    public function deleteRemoteRule(
        string $remoteRuleId,
    ): Response {
        return $this->connector->send(new DeleteRemoteRule($remoteRuleId));
    }

    public function listRules(): Response
    {
        return $this->connector->send(new ListRules());
    }

    public function createRule(): Response
    {
        return $this->connector->send(new CreateRule());
    }

    public function deleteRule(
        string $ruleId,
    ): Response {
        return $this->connector->send(new DeleteRule($ruleId));
    }
}
