<?php

/**
 * Class for CiviRules Group Contact add action.
 *
 * Adds a user to a group
 *
 * @author Jaap Jansma (CiviCooP) <jaap.jansma@civicoop.org>
 * @license AGPL-3.0
 */

class CRM_CivirulesActions_Tag_Remove extends CRM_CivirulesActions_Tag_Tag {

  /**
   * Method to set the api action
   *
   * @return string
   * @access protected
   */
  protected function getApiAction() {
    return 'delete';
  }

}