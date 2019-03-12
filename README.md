# SDK AWS S3-php
Playing with AWS SDK for php.

## Install dependencies

```bash
composer install
```

> you need to have previously composer [installed](https://getcomposer.org/download/) in your OS.

## Config

You need to add your credentials in `config.php` file

```php
$id_key = 'your id';
$secret_access_key = 'your secret key';
$bucket_name = 'your bucket name to add files';
$region = 'your region';
```

## Methods 

Create object

```php
$s3_sdk = new Sdk_aws_s3();
```

Create Bucket

```php
$s3_sdk->createBucket('your-bucket-name')
```

Get your list of Buckets

```php
$s3_sdk->getBucketList()
```

Upload file a bucket

```php
$s3_sdk->uploadFile('file-name.txt', 'your/path/file-name.txt','bucket-name');
```
