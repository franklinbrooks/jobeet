<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 362

Call Stack:
    0.0003     356952   1. {main}() /Applications/MAMP/htdocs/jobeet/symfony:0
    0.0023     516312   2. include('/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php') /Applications/MAMP/htdocs/jobeet/symfony:14
    0.0896    3670256   3. sfSymfonyCommandApplication->run() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0952    3673816   4. sfTask->runFromCLI() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0954    3674136   5. sfBaseTask->doRun() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.1038    4034064   6. sfDoctrineGenerateModuleTask->execute() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.1097    4467416   7. sfDoctrineGenerateModuleTask->executeGenerate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:99
    0.1107    4479648   8. sfGeneratorManager->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.1153    4599808   9. sfModelGenerator->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:126
    0.1360    5966152  10. sfGenerator->generatePhpFiles() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1453    5971840  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1457    6000928  12. require('/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1668    6947472  13. sfModelGenerator->getPrimaryKeyUrlParams() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:8
    0.1668    6947528  14. sfDoctrineGenerator->getColumnGetter() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.1668    6947528  15. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1668    6947904  16. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1668    6948656  17. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$form->getObject()->get() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('job/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'job/delete?
Warning: preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead in /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 362

Call Stack:
    0.0003     356952   1. {main}() /Applications/MAMP/htdocs/jobeet/symfony:0
    0.0023     516312   2. include('/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php') /Applications/MAMP/htdocs/jobeet/symfony:14
    0.0896    3670256   3. sfSymfonyCommandApplication->run() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0952    3673816   4. sfTask->runFromCLI() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0954    3674136   5. sfBaseTask->doRun() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.1038    4034064   6. sfDoctrineGenerateModuleTask->execute() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.1097    4467416   7. sfDoctrineGenerateModuleTask->executeGenerate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:99
    0.1107    4479648   8. sfGeneratorManager->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.1153    4599808   9. sfModelGenerator->generate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:126
    0.1360    5966152  10. sfGenerator->generatePhpFiles() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1453    5971840  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1457    6000928  12. require('/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1676    6947472  13. sfModelGenerator->getPrimaryKeyUrlParams() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:29
    0.1676    6947528  14. sfDoctrineGenerator->getColumnGetter() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.1676    6947528  15. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1676    6947904  16. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1676    6948656  17. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$form->getObject()->get(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
