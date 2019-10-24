# Contact form package

## This is the contact form package to save contact query to database and send email to admin

[![Issues](https://img.shields.io/github/issues/amoungui/contact-form?style=flat-square)](https://github.com/amoungui/contact-form/issues)

[![Stars](https://img.shields.io/github/stars/amoungui/contact-form?style=flat-square)](https://github.com/amoungui/contact-form/stargazers)

### Installation ###
 
Add Contact form to your composer.json file 
```
    composer require amoungui/contact-form
```

### Publish ###
 
The last required step is to publish views, config, migrations in your application with :
```
    php artisan vendor:publish
```
  
The next required step is to modify the config file to config/contact.php :
```
    return [
        'send_email_to'=> 'abcd@abc.com'
    ];
```
Change the value of parameter: send_email_to, with your own admin adress

Congratulations, you have successfully installed Amoungui !