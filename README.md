# eupago-laravel-package
This package helps to generate references to service "eupago.pt"

### Create instance
```php
$eupago = Eupago::getInstance();
$eupago->setApiKey('demo-5b72-04a6-7847-5f6');
```

### Switch between production and development using sandbox api
```php
$eupago->inDevelopment();
```

### Generate Reference MB
```php
//required field
$eupago->setTransactionId('my-order-identifier');

// generate reference passing value
$result = $eupago->generateReferenceMB(123.43, $dateLimit = null);
```
The parameter <b>$dateLimit</b> use format `Y-m-d`

### Get generated reference information
```php
$result = $eupago->referenceInformation('000000000');
```

##
Created with ♥️ by @pedroladeira in Portugal

