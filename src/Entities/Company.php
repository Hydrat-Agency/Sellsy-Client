<?php

namespace Hydrat\Sellsy\Entities;

use Hydrat\Sellsy\Entities\Address;
use Hydrat\Sellsy\Entities\Contact;
use Hydrat\Sellsy\Entities\Attributes\Acl;
use Hydrat\Sellsy\Contracts\EntityContract;
use Hydrat\Sellsy\Entities\Attributes\Addresses;
use Hydrat\Sellsy\Entities\Attributes\Statistics;
use Hydrat\Sellsy\Entities\Attributes\ContactInfos;
use Spatie\DataTransferObject\FlexibleDataTransferObject;

/**
 * The Company Entity.
 *
 * @package sellsy-connector
 * @author Thomas <thomas@hydrat.agency>
 * @version 1.0
 * @access public
 */
class Company extends FlexibleDataTransferObject implements EntityContract
{
    use Acl,
        Statistics,
        Addresses,
        ContactInfos;
    
    /**
     * <READONLY> Company ID from Sellsy.
     */
    public ?int $id;

    /**
     * Company name.
     */
    public string $name;
    
    /**
     * Company Legal infomation (france format).
     */
    public LegalFrance $legal_france;
    
    /**
     * Company type.
     * May be client, prospect..
     */
    public ?string $type;

    /**
     * Company capital.
     */
    public ?string $capital;
    
    /**
     * Company reference.
     */
    public ?string $reference;
    
    /**
     * Note on company.
     */
    public string $note = '';

    /**
     * Company auxiliary code.
     */
    public ?string $auxiliary_code;
    
    /**
     * Company socials.
     */
    public ?Socials $social;
    
    /**
     * Company rate category id.
     */
    public ?int $rate_category_id;
    
    /**
     * Company accounting code id.
     */
    public ?int $accounting_code_id;
    
    /**
     * Company accounting purchase code id.
     */
    public ?int $accounting_purchase_code_id;
    
    /**
     * Status archived or not.
     */
    public bool $is_archived = false;

    /**
     * Company business segment.
     */
    public ?int $business_segment;
    
    /**
     * Number of employees of company.
     */
    public ?array $number_of_employees;
    
    /**
     * <READONLY> Company main contact ID from Sellsy.
     */
    public ?int $main_contact_id;
    
    /**
     * <READONLY> Company main dunning ID from Sellsy.
     */
    public ?int $dunning_contact_id;
    
    /**
     * <READONLY> Company invoicing contact ID from Sellsy.
     */
    public ?int $invoicing_contact_id;

    /**
     * <READONLY> Company main contact entity.
     */
    public ?Contact $main_contact;

    /**
     * <READONLY> Company dunning contact entity.
     */
    public ?Contact $dunning_contact;

    /**
     * <READONLY> Company invoicing contact entity.
     */
    public ?Contact $invoicing_contact;
    
    /**
     * <READONLY> Company creates date from Sellsy.
     */
    public ?string $created;
    
    /**
     * <READONLY> Company owner from Sellsy.
     */
    public ?array $owner;
}
