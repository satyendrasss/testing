## Installation Via Composer
If your computer already has PHP and Composer installed, you may create a new Laravel project by using Composer directly. After the application has been created, you may start Laravel's local development server using the Artisan CLI's `serve` command:

[Create a first laravel project using composer.]()


```bash
	composer create-project laravel/laravel:^8.0 example-app
 
	cd example-app
	 
	php artisan serve
```

## The Laravel Installer
Or, you may install the Laravel Installer as a global Composer dependency:

[We can also create a project using Laravel installation.]()

```bash
	composer global require laravel/installer
 
	laravel new example-app
	 
	cd example-app
	 
	php artisan serve
```

