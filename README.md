## Prerequisites
```
composer Install
```
```
npm Install
```
```
php artisan key:generate
php artisan migrate
```
```
npm run dev
```
### Creating A User

#### Using Tinker
``` <?PHP
php artisan tinker
admin=new App\User
$admin->name="AA"
$admin->email="A@A.com"
$admin->password=Hash::make('AA')
$admin->save()
exit
```


### Also
You can simply put value to DB Directly, you might have to make hash your password using any other 3rd party provider.

# Please note: You might not upload larger videos due to base php max file upload limit, The values of post_max_size, upload_max_filesize and memory_limit by default have the value of 8M, 2M, and 128M respectively. You might need to increase them from php.ini on your device/server.
