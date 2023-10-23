<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Audit;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetAuditLogEvents
 *
 * This API returns a list of all the audit log events that match the given filters.
 *
 * **Note**: Not
 * every single change in the system is audited. Currently the audited entities include:
 *
 * | Object
 * | Action                    | Notes |
 * |------------|---------------------------|-------|
 * | customer
 * | form create/update/delete |       |
 * | customer   | api create/update/delete  |       |
 * | customer
 * | csv import                |       |
 * | register   | form create/update/delete |       |
 * | outlet
 * | form create/update/delete |       |
 * | csv import | init                      | Tracks CSV import
 * requests and includes data about the import type (customer, product) and the CSV file line count.
 * |
 * | product*   | create/update/delete      | All actions on products. |
 * | security   |
 * terms_accepted, signin, signout, change_email, change_password, reset_password_confirm,
 * user_switching_succes, user_switching_denied, new_personal_token, update_personal_token,
 * delete_personal_tokenss, issue_oauth_token ||
 * | vend_consignment | insert/update | Receiving,
 * creating and editing purchase orders as well as inventory counts. |
 * | vend_consignment_product |
 * insert/update | Changes to the products in a purchase order. Such as creating purchase orders. |
 * |
 * timeclock | clockin/clockout | Clock event where a user either clocked in or clocked out. |
 *
 * ###
 * Filters
 * - The from and to filters require a full isoformat date, for example
 * `?from=2020-02-03T00:00:00&to=2020-02-05T23:59:59`.
 */
class GetAuditLogEvents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/auditlog_events";
	}


	/**
	 * @param null|string $pageSize The size for a single page of results. By default 100 events will be returned.
	 * @param null|string $offset The number of objects to skip.
	 * @param null|string $from The lower limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param null|string $to The upper limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param null|string $order The sorting order for the results. Sorting is done by the `occurred_at` parameter. The default order is descending.
	 * @param null|string $userId The `id` of the user to filter the events by.
	 * @param null|string $type The `type` of the events to be filtered for the response.
	 */
	public function __construct(
		protected ?string $pageSize = null,
		protected ?string $offset = null,
		protected ?string $from = null,
		protected ?string $to = null,
		protected ?string $order = null,
		protected ?string $userId = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page_size' => $this->pageSize,
			'offset' => $this->offset,
			'from' => $this->from,
			'to' => $this->to,
			'order' => $this->order,
			'user_id' => $this->userId,
			'type' => $this->type,
		]);
	}
}
