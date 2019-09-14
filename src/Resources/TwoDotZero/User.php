<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * User
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class User extends DataTransferObject
{
    use CastsDates;

    /**
     * User's account type.
     *
     * @var string
     */
    public $account_type;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon
     */
    public $created_at;

    /**
     * Time until deletion. **undocumented**
     *
     * @var \Carbon\Carbon|null
     */
    public $time_until_deletion;

    /**
     * Enabled. **undocumented**
     *
     * @var bool
     */
    public $enabled;

    /**
     * Switch ID. **undocumented**
     *
     * @var string
     */
    public $switch_id;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Full user's name to be used for display in the UI.
     *
     * @var string|null
     */
    public $display_name;

    /**
     * User's email address.
     *
     * @var string|null
     */
    public $email;

    /**
     * The timestamp of users email verification.
     *
     * @var \Carbon\Carbon|null
     */
    public $email_verified_at;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * URL of the default-sized user's avatar.
     *
     * @var string|null
     */
    public $image_source;

    /**
     * On object containing URLs for different sizes of the user's avatar.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\UserImage|null
     */
    public $images;

    /**
     * Indicated whether this user is the primary user for the account.
     *
     * @var bool
     */
    public $is_primary_user;

    /**
     * Permissions.
     *
     * @var string|null
     */
    public $permissions;

    /**
     * Use the `restricted_outlet_ids` instead. **deprecated**
     *
     * @var string|null
     */
    public $restricted_outlet_id;

    /**
     * A list of outlet IDs the user is associated with.
     *
     * @var array|null
     */
    public $restricted_outlet_ids;

    /**
     * The timestamp of the user's last activity in the system.
     *
     * @var \Carbon\Carbon|null
     */
    public $seen_at;

    /**
     * Daily sales target for the user.
     *
     * @var int|double|null
     */
    public $target_daily;

    /**
     * Monthly sales target for the user.
     *
     * @var int|double|null
     */
    public $target_monthly;

    /**
     * Weekly sales target for the user.
     *
     * @var int|double|null
     */
    public $target_weekly;

    /**
     * Last update timestamp in UTC.
     *
     * @var \Carbon\Carbon
     */
    public $updated_at;

    /**
     * User's username used for login.
     *
     * @var string
     */
    public $username;

    /**
     * Auto-incrementing object version number.
     *
     * @var int
     */
    public $version;

}
