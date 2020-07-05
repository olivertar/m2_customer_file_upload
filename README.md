# M2 Customer register form upload file

This module allows you to attach a file to the registration form.

From the backend you can enable the option so that the user can change the file from their account.

This module has been developed for Magento +2.3.3

## Installation

The extension can be installed via `composer`. To proceed, run these commands in your terminal:

```
cd /to/root/magento/install
composer require orangecat/templatesymlinks
php bin/magento module:enable Orangecat_TemplateSymlinks
php bin/magento setup:upgrade
```
If you need to use it in production mode, these commands will also be necessary:
```
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

## Screenshot
![ScreenShot](https://github.com/olivertar/m2_customer_file_upload/blob/master/screen-shot/register_form.png)

![ScreenShot](https://github.com/olivertar/m2_customer_file_upload/blob/master/screen-shot/system.png)

![ScreenShot](https://github.com/olivertar/m2_customer_file_upload/blob/master/screen-shot/front_account.png)

![ScreenShot](https://github.com/olivertar/m2_customer_file_upload/blob/master/screen-shot/admin_account.png)
