
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1706    6953136  13. sfModelGenerator->getPrimaryKeyUrlParams() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.1706    6953192  14. sfDoctrineGenerator->getColumnGetter() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.1706    6953192  15. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1706    6953568  16. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1706    6954320  17. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$jobeet_job->get()) ?> ">

<?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1715    6953136  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.1715    6953512  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1715    6954264  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></a></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1727    6953136  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1727    6953512  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1728    6954264  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1733    6953136  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1733    6953512  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1733    6954264  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1738    6953136  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1738    6953512  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1738    6954264  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1743    6953136  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1743    6953512  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1743    6954264  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1748    6969520  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1748    6969896  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1748    6970648  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1753    6969520  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1753    6969896  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1753    6970648  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1757    6969520  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1757    6969896  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1757    6970648  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1762    6969520  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1762    6969896  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1762    6970648  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1767    6969520  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1767    6969896  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1767    6970648  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1772    6969520  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1772    6969896  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1772    6970648  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1833    6985904  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1833    6986280  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1833    6987032  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1841    6985904  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1841    6986280  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1841    6987032  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1847    6985904  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1848    6986280  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1848    6987032  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1863    6985904  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1863    6986280  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1863    6987032  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1876    6985904  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1876    6986280  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1876    6987032  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1692    6921216  11. sfGenerator->evalTemplate() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1697    6949896  12. require("/Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php") /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1883    6985904  13. sfInflector::camelize() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1883    6986280  14. sfToolkit::pregtr() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:31
    0.1883    6987032  15. preg_replace() /Applications/MAMP/htdocs/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

() ?></td>
    </tr>
    <?php endforeach; ?>
