<?php
/**
 *User Model File
 *
 * User Model
 *
 * @copyright           Copyright 2007-2008, 3HN Deisngs.
* @author                       Baz L
* @link                 http://www.WebDevelopment2.com/
 */

/**
 * User Model Class
 *
 * @author      Baz L
  */
class User extends AppModel {

  var $name = 'User';
  
/**
 * Validation for user Model
 *
 * Key validation: password, new_password is not empty. Contains rules for confirm_password and confirm_email => identicalFieldValues validation
 * @todo email should also be checkUnique
 *
 * @var array
 * @access private
 */
  var $validate = array(
    'username' => 'notEmpty',
    'password' => 'notEmpty',
    'email' => array(
      'rule' => array('email', true),
      'message' => 'Please supply a valid email address.'
    )
  );

  //The Associations below have been created with all possible keys, those that are not needed can be removed
  var $belongsTo = array(
      'Group' => array('className' => 'Group',
                'foreignKey' => 'group_id',
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'counterCache' => ''),
  );
}
?>
