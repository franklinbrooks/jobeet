<?php

/**
 * JobeetCategory filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobeetCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'jobeet_affiliates_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate')),
    ));

    $this->setValidators(array(
      'name'                   => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'jobeet_affiliates_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function add
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 362

Call Stack:
    0.0003     356808   1. {main}() /Applications/MAMP/htdocs/jobeet/symfony:0
    0.0022     516168   2. include('/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php') /Applications/MAMP/htdocs/jobeet/symfony:14
    0.0989    3670112   3. sfSymfonyCommandApplication->run() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.1021    3673352   4. sfTask->runFromCLI() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.1022    3674312   5. sfBaseTask->doRun() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.1165    4036952   6. sfDoctrineBuildTask->execute() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    3.1265    7253792   7. sfTask->run() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    3.1266    7255120   8. sfBaseTask->doRun() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    3.1272    7256568   9. sfDoctrineBuildFiltersTask->execute() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    3.1278    7259872  10. sfGeneratorManager->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:63
    3.1299    7318344  11. sfDoctrineFormFilterGenerator->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:126
    3.1469    7323312  12. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    3.1472    7360712  13. require('/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    3.1493    7361200  14. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    3.1493    7361576  15. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    3.1493    7362328  16. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

ListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.JobeetCategoryAffiliate JobeetCategoryAffiliate')
      ->andWhereIn('JobeetCategoryAffiliate.affiliate_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'JobeetCategory';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'name'                   => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'jobeet_affiliates_list' => 'ManyKey',
    );
  }
}
