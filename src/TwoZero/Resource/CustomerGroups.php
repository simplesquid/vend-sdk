<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\AddCustomersToCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\CreateCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\DeleteCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\DeleteCustomersFromCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\GetCustomerGroupById;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\GetCustomerGroupCustomers;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\ListCustomerGroups;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\UpdateCustomerGroup;
use SimpleSquid\Vend\TwoZero\Resource;

class CustomerGroups extends Resource
{
	/**
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listCustomerGroups(?int $before, ?int $pageSize, ?bool $deleted): Response
	{
		return $this->connector->send(new ListCustomerGroups($before, $pageSize, $deleted));
	}


	public function createCustomerGroup(): Response
	{
		return $this->connector->send(new CreateCustomerGroup());
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function getCustomerGroupById(string $customerGroupId): Response
	{
		return $this->connector->send(new GetCustomerGroupById($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function updateCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new UpdateCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function deleteCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function getCustomerGroupCustomers(string $customerGroupId, ?int $before, ?int $pageSize): Response
	{
		return $this->connector->send(new GetCustomerGroupCustomers($customerGroupId, $before, $pageSize));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function addCustomersToCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new AddCustomersToCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function deleteCustomersFromCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomersFromCustomerGroup($customerGroupId));
	}
}
