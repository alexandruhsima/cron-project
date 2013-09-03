<?php



/**
 * This class defines the structure of the 'user' table.
 *
 *
 * This class was autogenerated by Propel 1.6.9 on:
 *
 * Tue 03 Sep 2013 04:11:14 PM EEST
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.cron_project.model.map
 */
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.cron_project.model.map.UserTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('user');
        $this->setPhpName('User');
        $this->setClassname('User');
        $this->setPackage('lib.cron_project.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('sysame_id', 'SysameId', 'INTEGER', true, null, null);
        $this->addColumn('forename', 'Forename', 'VARCHAR', false, 120, null);
        $this->addColumn('surname', 'Surname', 'VARCHAR', false, 120, null);
        $this->addColumn('street_name', 'StreetName', 'VARCHAR', false, 255, null);
        $this->addColumn('street_number', 'StreetNumber', 'VARCHAR', false, 45, null);
        $this->addColumn('postbox', 'Postbox', 'VARCHAR', false, 45, null);
        $this->addColumn('zip_code', 'ZipCode', 'VARCHAR', false, 45, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 45, null);
        $this->addColumn('country', 'Country', 'VARCHAR', false, 45, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('phone_home', 'PhoneHome', 'VARCHAR', false, 45, null);
        $this->addColumn('phone_mobile', 'PhoneMobile', 'VARCHAR', false, 45, null);
        $this->addColumn('phone_work', 'PhoneWork', 'VARCHAR', false, 45, null);
        $this->addColumn('permission', 'Permission', 'TINYINT', false, 2, 0);
        $this->addColumn('permission_email', 'PermissionEmail', 'TINYINT', false, 2, 0);
        $this->addColumn('permission_sms', 'PermissionSms', 'TINYINT', false, 2, 0);
        $this->addColumn('date_of_birth', 'DateOfBirth', 'TIMESTAMP', false, null, null);
        $this->addColumn('customer_type', 'CustomerType', 'VARCHAR', false, 45, null);
        $this->addColumn('sysame_updated_at', 'SysameUpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('deleted_at', 'DeletedAt', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UserCar', 'UserCar', RelationMap::ONE_TO_MANY, array('sysame_id' => 'id_user', ), null, null, 'UserCars');
    } // buildRelations()

} // UserTableMap