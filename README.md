# eupago-laravel-package
This package helps to generate references to service "eupago.pt"

<!-- language: php -->
    $eupago = Eupago::getInstance();
    //required fields
    $eupago->setApiKey('demo-5b72-04a6-7847-5f6');
    $eupago->setTransactionId('orderid');

    $result = $eupago->generateReferenceMB();

    // get information about reference
    $eupago->referenceInformation($result->referencia);
