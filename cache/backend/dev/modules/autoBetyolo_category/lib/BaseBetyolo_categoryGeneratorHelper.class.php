<?php

/**
 * betyolo_category module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage betyolo_category
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBetyolo_categoryGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'betyolo_category' : 'betyolo_category_'.$action;
  }
}
