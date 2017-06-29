<?php

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jobeet_jobs = Doctrine_Core::getTable('JobeetJob')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->jobeet_job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobeetJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeet_job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeet_job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $jobeet_job->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jobeet_job = $form->save();

      $this->redirect('job/edit?
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 362

Call Stack:
    0.0003     356952   1. {main}() /Applications/MAMP/htdocs/jobeet/symfony:0
    0.0023     516312   2. include("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php") /Applications/MAMP/htdocs/jobeet/symfony:14
    0.0896    3670256   3. sfSymfonyCommandApplication->run() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0952    3673816   4. sfTask->runFromCLI() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0954    3674136   5. sfBaseTask->doRun() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.1038    4034064   6. sfDoctrineGenerateModuleTask->execute() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.1097    4467416   7. sfDoctrineGenerateModuleTask->executeGenerate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:99
    0.1107    4479648   8. sfGeneratorManager->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.1153    4599808   9. sfModelGenerator->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:126
    0.1360    5966152  10. sfGenerator->generatePhpFiles() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1360    5966216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1365    5993456  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1404    6000824  13. include("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php:30
    0.1404    6000824  14. sfModelGenerator->getPrimaryKeyUrlParams() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php:11
    0.1404    6000880  15. sfDoctrineGenerator->getColumnGetter() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.1404    6000880  16. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1404    6001256  17. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1404    6002008  18. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$jobeet_job->get());
    }
  }
}
