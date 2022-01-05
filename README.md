# Sending Mails Package

#### You can download it via run this command on your terminal
``` Laravel
composer require knowproinsighter/sendingmails
```

It is has some dependencies you can follow the below steps to use this package in your project:

1. First of all run the below command it will create **App\Mail\SendMailToUser.php** file.
```Laravel
php artisan make:mail SendMailToUser
```

2. then return the following code inside **build** method of SendMailToUser.php.
```Laravel
return $this->subject('Congrats, You have successfully registered!')->view('sendingmail::email');
```
**EDIT**:- You can write your own message inside subject as well...

3. Edit Your **.env** file 
```Laravel
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=...... //Fill your username
MAIL_PASSWORD=......// Fill your password
MAIL_ENCRYPTION=tls
```
4. Edit your default sender details inside **Config\mail.php**
```Laravel
'from' => [
  'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
  'name' => env('MAIL_FROM_NAME', 'Example'),
],
```

Now, Package is all setup you can send mail by hiting the URL
```Laravel
localhost:8000/sendmail
```

**Thank you**

_Enjoy Surffing_
