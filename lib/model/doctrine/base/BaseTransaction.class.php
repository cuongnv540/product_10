<?php

/**
 * BaseTransaction
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $type
 * @property integer $amount
 * @property integer $status
 * @property timestamp $created_at
 * @property sfGuardUser $User
 * 
 * @method integer     getUserId()     Returns the current record's "user_id" value
 * @method integer     getType()       Returns the current record's "type" value
 * @method integer     getAmount()     Returns the current record's "amount" value
 * @method integer     getStatus()     Returns the current record's "status" value
 * @method timestamp   getCreatedAt()  Returns the current record's "created_at" value
 * @method sfGuardUser getUser()       Returns the current record's "User" value
 * @method Transaction setUserId()     Sets the current record's "user_id" value
 * @method Transaction setType()       Sets the current record's "type" value
 * @method Transaction setAmount()     Sets the current record's "amount" value
 * @method Transaction setStatus()     Sets the current record's "status" value
 * @method Transaction setCreatedAt()  Sets the current record's "created_at" value
 * @method Transaction setUser()       Sets the current record's "User" value
 * 
 * @package    betyolo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTransaction extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('transaction');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('type', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('amount', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('created_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}