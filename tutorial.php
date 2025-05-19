<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://web.cse.ru/1c/ws/Web1C.1cws?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://web.cse.ru/1c/ws/Web1C.1cws?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Calc ServiceType
 */
$calc = new \ServiceType\Calc($options);
/**
 * Sample call for Calc operation/method
 */
if ($calc->Calc(new \StructType\Calc()) !== false) {
    print_r($calc->getResult());
} else {
    print_r($calc->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \ServiceType\Delete($options);
/**
 * Sample call for DeleteDocuments operation/method
 */
if ($delete->DeleteDocuments(new \StructType\DeleteDocuments()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteGMH operation/method
 */
if ($delete->DeleteGMH(new \StructType\DeleteGMH()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetDocuments operation/method
 */
if ($get->GetDocuments(new \StructType\GetDocuments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFormsForDocuments operation/method
 */
if ($get->GetFormsForDocuments(new \StructType\GetFormsForDocuments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListOfDocuments operation/method
 */
if ($get->GetListOfDocuments(new \StructType\GetListOfDocuments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReferenceData operation/method
 */
if ($get->GetReferenceData(new \StructType\GetReferenceData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserInfo operation/method
 */
if ($get->GetUserInfo(new \StructType\GetUserInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Put ServiceType
 */
$put = new \ServiceType\Put($options);
/**
 * Sample call for PutReferenceData operation/method
 */
if ($put->PutReferenceData(new \StructType\PutReferenceData()) !== false) {
    print_r($put->getResult());
} else {
    print_r($put->getLastError());
}
/**
 * Sample call for PutUserInfo operation/method
 */
if ($put->PutUserInfo(new \StructType\PutUserInfo()) !== false) {
    print_r($put->getResult());
} else {
    print_r($put->getLastError());
}
/**
 * Samples for Report ServiceType
 */
$report = new \ServiceType\Report($options);
/**
 * Sample call for Report operation/method
 */
if ($report->Report(new \StructType\Report()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \ServiceType\Save($options);
/**
 * Sample call for SaveDocuments operation/method
 */
if ($save->SaveDocuments(new \StructType\SaveDocuments()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveDocumentsCello operation/method
 */
if ($save->SaveDocumentsCello(new \StructType\SaveDocumentsCello()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveAckansCello operation/method
 */
if ($save->SaveAckansCello(new \StructType\SaveAckansCello()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveGenresCello operation/method
 */
if ($save->SaveGenresCello(new \StructType\SaveGenresCello()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveWaybillOffice operation/method
 */
if ($save->SaveWaybillOffice(new \StructType\SaveWaybillOffice()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveOwnerOfTheGoods operation/method
 */
if ($save->SaveOwnerOfTheGoods(new \StructType\SaveOwnerOfTheGoods()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Tracking ServiceType
 */
$tracking = new \ServiceType\Tracking($options);
/**
 * Sample call for Tracking operation/method
 */
if ($tracking->Tracking(new \StructType\Tracking()) !== false) {
    print_r($tracking->getResult());
} else {
    print_r($tracking->getLastError());
}
/**
 * Samples for Measurement ServiceType
 */
$measurement = new \ServiceType\Measurement($options);
/**
 * Sample call for Measurement operation/method
 */
if ($measurement->Measurement(new \StructType\Measurement()) !== false) {
    print_r($measurement->getResult());
} else {
    print_r($measurement->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \ServiceType\_Print($options);
/**
 * Sample call for PrintDocument operation/method
 */
if ($print->PrintDocument(new \StructType\PrintDocument()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \ServiceType\Check($options);
/**
 * Sample call for CheckClientNumber operation/method
 */
if ($check->CheckClientNumber(new \StructType\CheckClientNumber()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckPlannedDeliveryDate operation/method
 */
if ($check->CheckPlannedDeliveryDate(new \StructType\CheckPlannedDeliveryDate()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
/**
 * Sample call for UpdateClientProducts operation/method
 */
if ($update->UpdateClientProducts(new \StructType\UpdateClientProducts()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateDocument operation/method
 */
if ($update->UpdateDocument(new \StructType\UpdateDocument()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
/**
 * Sample call for CreateGMH operation/method
 */
if ($create->CreateGMH(new \StructType\CreateGMH()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Ping ServiceType
 */
$ping = new \ServiceType\Ping($options);
/**
 * Sample call for Ping operation/method
 */
if ($ping->Ping(new \StructType\Ping()) !== false) {
    print_r($ping->getResult());
} else {
    print_r($ping->getLastError());
}
