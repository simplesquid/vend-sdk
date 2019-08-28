<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Customer
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Customer extends DataTransferObject
{
    use CastsDates;

    /**
     * Customer's unpaid balance.
     *
     * @var int|double|null
     */
    public $balance;

    /**
     * Company name.
     *
     * @var string|null
     */
    public $company_name;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * Custom field 1. Can be used to store random data.
     *
     * @var string|null
     */
    public $custom_field_1;

    /**
     * Custom field 2.
     *
     * @var string|null
     */
    public $custom_field_2;

    /**
     * Custom field 3.
     *
     * @var string|null
     */
    public $custom_field_3;

    /**
     * Custom field 4.
     *
     * @var string|null
     */
    public $custom_field_4;

    /**
     * Customer code used for claiming loyalty.
     *
     * @var string|null
     */
    public $customer_code;

    /**
     * Customer group ID.
     *
     * @var string|null
     */
    public $customer_group_id;

    /**
     * Birthday.
     *
     * @var \Carbon\Carbon|null
     */
    public $date_of_birth;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Indicates whether the customer opted out of email communications.
     *
     * @var bool|null
     */
    public $do_not_email;

    /**
     * Customer's email address.
     *
     * @var string|null
     */
    public $email;

    /**
     * Enable loyalty.
     *
     * @var bool|null
     */
    public $enable_loyalty;

    /**
     * Fax no.
     *
     * @var string|null
     */
    public $fax;

    /**
     * Customer's first name.
     *
     * @var string
     */
    public $first_name;

    /**
     * Customer's gender. Can be `M`, `F` or null.
     *
     * @var string|null
     */
    public $gender;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Customer's last name.
     *
     * @var string
     */
    public $last_name;

    /**
     * Customer's loyalty balance.
     *
     * @var int|double|null
     */
    public $loyalty_balance;

    /**
     * Mobile phone no.
     *
     * @var string|null
     */
    public $mobile;

    /**
     * Customers full name. **deprecated**
     *
     * @var string|null
     */
    public $name;

    /**
     * Customer note.
     *
     * @var string|null
     */
    public $note;

    /**
     * Phone no.
     *
     * @var string|null
     */
    public $phone;

    /**
     * Physical address, line 1.
     *
     * @var string|null
     */
    public $physical_address_1;

    /**
     * Physical address, line 2.
     *
     * @var string|null
     */
    public $physical_address_2;

    /**
     * Physical address, city.
     *
     * @var string|null
     */
    public $physical_city;

    /**
     * Physical address, country code.
     *
     * @var string|null
     */
    public $physical_country_id;

    /**
     * Physical address, post code.
     *
     * @var string|null
     */
    public $physical_postcode;

    /**
     * Physical address, state.
     *
     * @var string|null
     */
    public $physical_state;

    /**
     * Physical address, suburb.
     *
     * @var string|null
     */
    public $physical_suburb;

    /**
     * Postal address, line 1.
     *
     * @var string|null
     */
    public $postal_address_1;

    /**
     * Postal address, line 2.
     *
     * @var string|null
     */
    public $postal_address_2;

    /**
     * Postal address, city.
     *
     * @var string|null
     */
    public $postal_city;

    /**
     * Postal address, country code.
     *
     * @var string|null
     */
    public $postal_country_id;

    /**
     * Postal address, post code.
     *
     * @var string|null
     */
    public $postal_postcode;

    /**
     * Postal address, state.
     *
     * @var string|null
     */
    public $postal_state;

    /**
     * Postal address, suburb.
     *
     * @var string|null
     */
    public $postal_suburb;

    /**
     * Twitter handle.
     *
     * @var string|null
     */
    public $twitter;

    /**
     * Last update timestamp in UTC.
     *
     * @var string|null
     */
    public $updated_at;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

    /**
     * Website URL.
     *
     * @var string|null
     */
    public $website;

    /**
     * Customer's spending this year.
     *
     * @var int|double|null
     */
    public $year_to_date;

}
