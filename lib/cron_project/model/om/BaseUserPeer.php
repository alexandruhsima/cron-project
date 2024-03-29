<?php


/**
 * Base static class for performing query and update operations on the 'user' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.9 on:
 *
 * Tue 03 Sep 2013 04:11:14 PM EEST
 *
 * @package propel.generator.lib.cron_project.model.om
 */
abstract class BaseUserPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'cron_project';

    /** the table name for this class */
    const TABLE_NAME = 'user';

    /** the related Propel class for this table */
    const OM_CLASS = 'User';

    /** the related TableMap class for this table */
    const TM_CLASS = 'UserTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the id field */
    const ID = 'user.id';

    /** the column name for the sysame_id field */
    const SYSAME_ID = 'user.sysame_id';

    /** the column name for the forename field */
    const FORENAME = 'user.forename';

    /** the column name for the surname field */
    const SURNAME = 'user.surname';

    /** the column name for the street_name field */
    const STREET_NAME = 'user.street_name';

    /** the column name for the street_number field */
    const STREET_NUMBER = 'user.street_number';

    /** the column name for the postbox field */
    const POSTBOX = 'user.postbox';

    /** the column name for the zip_code field */
    const ZIP_CODE = 'user.zip_code';

    /** the column name for the city field */
    const CITY = 'user.city';

    /** the column name for the country field */
    const COUNTRY = 'user.country';

    /** the column name for the email field */
    const EMAIL = 'user.email';

    /** the column name for the phone_home field */
    const PHONE_HOME = 'user.phone_home';

    /** the column name for the phone_mobile field */
    const PHONE_MOBILE = 'user.phone_mobile';

    /** the column name for the phone_work field */
    const PHONE_WORK = 'user.phone_work';

    /** the column name for the permission field */
    const PERMISSION = 'user.permission';

    /** the column name for the permission_email field */
    const PERMISSION_EMAIL = 'user.permission_email';

    /** the column name for the permission_sms field */
    const PERMISSION_SMS = 'user.permission_sms';

    /** the column name for the date_of_birth field */
    const DATE_OF_BIRTH = 'user.date_of_birth';

    /** the column name for the customer_type field */
    const CUSTOMER_TYPE = 'user.customer_type';

    /** the column name for the sysame_updated_at field */
    const SYSAME_UPDATED_AT = 'user.sysame_updated_at';

    /** the column name for the created_at field */
    const CREATED_AT = 'user.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'user.updated_at';

    /** the column name for the deleted_at field */
    const DELETED_AT = 'user.deleted_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of User objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array User[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. UserPeer::$fieldNames[UserPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'SysameId', 'Forename', 'Surname', 'StreetName', 'StreetNumber', 'Postbox', 'ZipCode', 'City', 'Country', 'Email', 'PhoneHome', 'PhoneMobile', 'PhoneWork', 'Permission', 'PermissionEmail', 'PermissionSms', 'DateOfBirth', 'CustomerType', 'SysameUpdatedAt', 'CreatedAt', 'UpdatedAt', 'DeletedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'sysameId', 'forename', 'surname', 'streetName', 'streetNumber', 'postbox', 'zipCode', 'city', 'country', 'email', 'phoneHome', 'phoneMobile', 'phoneWork', 'permission', 'permissionEmail', 'permissionSms', 'dateOfBirth', 'customerType', 'sysameUpdatedAt', 'createdAt', 'updatedAt', 'deletedAt', ),
        BasePeer::TYPE_COLNAME => array (UserPeer::ID, UserPeer::SYSAME_ID, UserPeer::FORENAME, UserPeer::SURNAME, UserPeer::STREET_NAME, UserPeer::STREET_NUMBER, UserPeer::POSTBOX, UserPeer::ZIP_CODE, UserPeer::CITY, UserPeer::COUNTRY, UserPeer::EMAIL, UserPeer::PHONE_HOME, UserPeer::PHONE_MOBILE, UserPeer::PHONE_WORK, UserPeer::PERMISSION, UserPeer::PERMISSION_EMAIL, UserPeer::PERMISSION_SMS, UserPeer::DATE_OF_BIRTH, UserPeer::CUSTOMER_TYPE, UserPeer::SYSAME_UPDATED_AT, UserPeer::CREATED_AT, UserPeer::UPDATED_AT, UserPeer::DELETED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'SYSAME_ID', 'FORENAME', 'SURNAME', 'STREET_NAME', 'STREET_NUMBER', 'POSTBOX', 'ZIP_CODE', 'CITY', 'COUNTRY', 'EMAIL', 'PHONE_HOME', 'PHONE_MOBILE', 'PHONE_WORK', 'PERMISSION', 'PERMISSION_EMAIL', 'PERMISSION_SMS', 'DATE_OF_BIRTH', 'CUSTOMER_TYPE', 'SYSAME_UPDATED_AT', 'CREATED_AT', 'UPDATED_AT', 'DELETED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'sysame_id', 'forename', 'surname', 'street_name', 'street_number', 'postbox', 'zip_code', 'city', 'country', 'email', 'phone_home', 'phone_mobile', 'phone_work', 'permission', 'permission_email', 'permission_sms', 'date_of_birth', 'customer_type', 'sysame_updated_at', 'created_at', 'updated_at', 'deleted_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. UserPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'SysameId' => 1, 'Forename' => 2, 'Surname' => 3, 'StreetName' => 4, 'StreetNumber' => 5, 'Postbox' => 6, 'ZipCode' => 7, 'City' => 8, 'Country' => 9, 'Email' => 10, 'PhoneHome' => 11, 'PhoneMobile' => 12, 'PhoneWork' => 13, 'Permission' => 14, 'PermissionEmail' => 15, 'PermissionSms' => 16, 'DateOfBirth' => 17, 'CustomerType' => 18, 'SysameUpdatedAt' => 19, 'CreatedAt' => 20, 'UpdatedAt' => 21, 'DeletedAt' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'sysameId' => 1, 'forename' => 2, 'surname' => 3, 'streetName' => 4, 'streetNumber' => 5, 'postbox' => 6, 'zipCode' => 7, 'city' => 8, 'country' => 9, 'email' => 10, 'phoneHome' => 11, 'phoneMobile' => 12, 'phoneWork' => 13, 'permission' => 14, 'permissionEmail' => 15, 'permissionSms' => 16, 'dateOfBirth' => 17, 'customerType' => 18, 'sysameUpdatedAt' => 19, 'createdAt' => 20, 'updatedAt' => 21, 'deletedAt' => 22, ),
        BasePeer::TYPE_COLNAME => array (UserPeer::ID => 0, UserPeer::SYSAME_ID => 1, UserPeer::FORENAME => 2, UserPeer::SURNAME => 3, UserPeer::STREET_NAME => 4, UserPeer::STREET_NUMBER => 5, UserPeer::POSTBOX => 6, UserPeer::ZIP_CODE => 7, UserPeer::CITY => 8, UserPeer::COUNTRY => 9, UserPeer::EMAIL => 10, UserPeer::PHONE_HOME => 11, UserPeer::PHONE_MOBILE => 12, UserPeer::PHONE_WORK => 13, UserPeer::PERMISSION => 14, UserPeer::PERMISSION_EMAIL => 15, UserPeer::PERMISSION_SMS => 16, UserPeer::DATE_OF_BIRTH => 17, UserPeer::CUSTOMER_TYPE => 18, UserPeer::SYSAME_UPDATED_AT => 19, UserPeer::CREATED_AT => 20, UserPeer::UPDATED_AT => 21, UserPeer::DELETED_AT => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'SYSAME_ID' => 1, 'FORENAME' => 2, 'SURNAME' => 3, 'STREET_NAME' => 4, 'STREET_NUMBER' => 5, 'POSTBOX' => 6, 'ZIP_CODE' => 7, 'CITY' => 8, 'COUNTRY' => 9, 'EMAIL' => 10, 'PHONE_HOME' => 11, 'PHONE_MOBILE' => 12, 'PHONE_WORK' => 13, 'PERMISSION' => 14, 'PERMISSION_EMAIL' => 15, 'PERMISSION_SMS' => 16, 'DATE_OF_BIRTH' => 17, 'CUSTOMER_TYPE' => 18, 'SYSAME_UPDATED_AT' => 19, 'CREATED_AT' => 20, 'UPDATED_AT' => 21, 'DELETED_AT' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'sysame_id' => 1, 'forename' => 2, 'surname' => 3, 'street_name' => 4, 'street_number' => 5, 'postbox' => 6, 'zip_code' => 7, 'city' => 8, 'country' => 9, 'email' => 10, 'phone_home' => 11, 'phone_mobile' => 12, 'phone_work' => 13, 'permission' => 14, 'permission_email' => 15, 'permission_sms' => 16, 'date_of_birth' => 17, 'customer_type' => 18, 'sysame_updated_at' => 19, 'created_at' => 20, 'updated_at' => 21, 'deleted_at' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = UserPeer::getFieldNames($toType);
        $key = isset(UserPeer::$fieldKeys[$fromType][$name]) ? UserPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(UserPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, UserPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return UserPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. UserPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(UserPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(UserPeer::ID);
            $criteria->addSelectColumn(UserPeer::SYSAME_ID);
            $criteria->addSelectColumn(UserPeer::FORENAME);
            $criteria->addSelectColumn(UserPeer::SURNAME);
            $criteria->addSelectColumn(UserPeer::STREET_NAME);
            $criteria->addSelectColumn(UserPeer::STREET_NUMBER);
            $criteria->addSelectColumn(UserPeer::POSTBOX);
            $criteria->addSelectColumn(UserPeer::ZIP_CODE);
            $criteria->addSelectColumn(UserPeer::CITY);
            $criteria->addSelectColumn(UserPeer::COUNTRY);
            $criteria->addSelectColumn(UserPeer::EMAIL);
            $criteria->addSelectColumn(UserPeer::PHONE_HOME);
            $criteria->addSelectColumn(UserPeer::PHONE_MOBILE);
            $criteria->addSelectColumn(UserPeer::PHONE_WORK);
            $criteria->addSelectColumn(UserPeer::PERMISSION);
            $criteria->addSelectColumn(UserPeer::PERMISSION_EMAIL);
            $criteria->addSelectColumn(UserPeer::PERMISSION_SMS);
            $criteria->addSelectColumn(UserPeer::DATE_OF_BIRTH);
            $criteria->addSelectColumn(UserPeer::CUSTOMER_TYPE);
            $criteria->addSelectColumn(UserPeer::SYSAME_UPDATED_AT);
            $criteria->addSelectColumn(UserPeer::CREATED_AT);
            $criteria->addSelectColumn(UserPeer::UPDATED_AT);
            $criteria->addSelectColumn(UserPeer::DELETED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.sysame_id');
            $criteria->addSelectColumn($alias . '.forename');
            $criteria->addSelectColumn($alias . '.surname');
            $criteria->addSelectColumn($alias . '.street_name');
            $criteria->addSelectColumn($alias . '.street_number');
            $criteria->addSelectColumn($alias . '.postbox');
            $criteria->addSelectColumn($alias . '.zip_code');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.phone_home');
            $criteria->addSelectColumn($alias . '.phone_mobile');
            $criteria->addSelectColumn($alias . '.phone_work');
            $criteria->addSelectColumn($alias . '.permission');
            $criteria->addSelectColumn($alias . '.permission_email');
            $criteria->addSelectColumn($alias . '.permission_sms');
            $criteria->addSelectColumn($alias . '.date_of_birth');
            $criteria->addSelectColumn($alias . '.customer_type');
            $criteria->addSelectColumn($alias . '.sysame_updated_at');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.deleted_at');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UserPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UserPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(UserPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 User
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = UserPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return UserPeer::populateObjects(UserPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            UserPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(UserPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      User $obj A User object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            UserPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A User object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof User) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or User object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(UserPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   User Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(UserPeer::$instances[$key])) {
                return UserPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (UserPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        UserPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to user
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = UserPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = UserPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = UserPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UserPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (User object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = UserPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + UserPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UserPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            UserPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(UserPeer::DATABASE_NAME)->getTable(UserPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseUserPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseUserPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new UserTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return UserPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a User or Criteria object.
     *
     * @param      mixed $values Criteria or User object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from User object
        }

        if ($criteria->containsKey(UserPeer::ID) && $criteria->keyContainsValue(UserPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(UserPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a User or Criteria object.
     *
     * @param      mixed $values Criteria or User object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(UserPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(UserPeer::ID);
            $value = $criteria->remove(UserPeer::ID);
            if ($value) {
                $selectCriteria->add(UserPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(UserPeer::TABLE_NAME);
            }

        } else { // $values is User object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(UserPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the user table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(UserPeer::TABLE_NAME, $con, UserPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UserPeer::clearInstancePool();
            UserPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a User or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or User object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            UserPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof User) { // it's a model object
            // invalidate the cache for this single object
            UserPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UserPeer::DATABASE_NAME);
            $criteria->add(UserPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                UserPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(UserPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            UserPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given User object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      User $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(UserPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(UserPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(UserPeer::DATABASE_NAME, UserPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return User
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = UserPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(UserPeer::DATABASE_NAME);
        $criteria->add(UserPeer::ID, $pk);

        $v = UserPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return User[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(UserPeer::DATABASE_NAME);
            $criteria->add(UserPeer::ID, $pks, Criteria::IN);
            $objs = UserPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseUserPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUserPeer::buildTableMap();

