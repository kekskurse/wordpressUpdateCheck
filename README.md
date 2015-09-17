# Wordpress Update Check
A PHP-Script to check if a single Wordpress Instance has some new updates. Its
not soooo nice, it login to the Wordpress, go to the update Page and check if
some text-keys are there. The teyt-keys change on each translation package. 

# Install
Clone this Repro in a Folder, copy the config.sample.php to config.php and
change url/username and password. The sample config is for a German Blog. If
you have another language install all updates and check for some sentions like
"wordpress is up to date", "plugins are up to date", "themes are up to date"
and "translaiton is up to date" . Add all this Sentions to the $tofind array in
the config (And remove the German ones).

If you don`t have composer on your system, install it in the folder of the
Project:
https://getcomposer.org/doc/00-intro.md

Than run ``composer update`` or ``php composer.phar update`` and wait. 

To test run the ``php check.php`` and check if the output is ``Wordpress OK -
No Updates`` (or when you have updates ``There are some updates for
Wordpress``)

#Usage
Include the php script to your monitoring System. You don`t need to check it
oftern. 
