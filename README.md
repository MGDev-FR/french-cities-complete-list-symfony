# :fr: french-cities-complete-list-symfony :fr:
This repo contain a complete list of the french cities loadable with the fixtures bundle of Symfony.

## :computer: How to install
1. Transfer all the files in the respective folders of your project

2. Launch the following command to add the table to your database :

     *php bin/console doctrine:schema:update --force*

3. If you did not have install the fixtures bundle yet, launch the following command on console :

     *composer require --dev orm-fixtures*

4. Then load the following command on console :

     *php bin/console doctrine:fixtures:load*