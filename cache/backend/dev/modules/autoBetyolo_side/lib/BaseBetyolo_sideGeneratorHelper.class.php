<?php

/**
 * betyolo_side module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage betyolo_side
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBetyolo_sideGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'betyolo_side' : 'betyolo_side_'.$action;
  }
}
