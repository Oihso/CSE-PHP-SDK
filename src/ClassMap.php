<?php

declare(strict_types=1);

namespace Oihso\CSESDK;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'Element' => '\\Oihso\\CSESDK\\StructType\\Element',
            'Row' => '\\Oihso\\CSESDK\\StructType\\Row',
            'ResultString' => '\\Oihso\\CSESDK\\StructType\\ResultString',
            'DestinationAddress' => '\\Oihso\\CSESDK\\StructType\\DestinationAddress',
            'CargoPackages' => '\\Oihso\\CSESDK\\StructType\\CargoPackages',
            'Cargo' => '\\Oihso\\CSESDK\\StructType\\Cargo',
            'Products' => '\\Oihso\\CSESDK\\StructType\\Products',
            'Materials' => '\\Oihso\\CSESDK\\StructType\\Materials',
            'Notifications' => '\\Oihso\\CSESDK\\StructType\\Notifications',
            'DestinationInformation' => '\\Oihso\\CSESDK\\StructType\\DestinationInformation',
            'DocumentsPhoto' => '\\Oihso\\CSESDK\\StructType\\DocumentsPhoto',
            'Order' => '\\Oihso\\CSESDK\\StructType\\Order',
            'ResultArray' => '\\Oihso\\CSESDK\\StructType\\ResultArray',
            'ResultPrint' => '\\Oihso\\CSESDK\\StructType\\ResultPrint',
            'ResultArrayPrint' => '\\Oihso\\CSESDK\\StructType\\ResultArrayPrint',
            'ListOfCorrespondences' => '\\Oihso\\CSESDK\\StructType\\ListOfCorrespondences',
            'DeliveryOptions' => '\\Oihso\\CSESDK\\StructType\\DeliveryOptions',
            'ArrayClientAccount' => '\\Oihso\\CSESDK\\StructType\\ArrayClientAccount',
            'Calc' => '\\Oihso\\CSESDK\\StructType\\Calc',
            'CalcResponse' => '\\Oihso\\CSESDK\\StructType\\CalcResponse',
            'DeleteDocuments' => '\\Oihso\\CSESDK\\StructType\\DeleteDocuments',
            'DeleteDocumentsResponse' => '\\Oihso\\CSESDK\\StructType\\DeleteDocumentsResponse',
            'GetDocuments' => '\\Oihso\\CSESDK\\StructType\\GetDocuments',
            'GetDocumentsResponse' => '\\Oihso\\CSESDK\\StructType\\GetDocumentsResponse',
            'GetFormsForDocuments' => '\\Oihso\\CSESDK\\StructType\\GetFormsForDocuments',
            'GetFormsForDocumentsResponse' => '\\Oihso\\CSESDK\\StructType\\GetFormsForDocumentsResponse',
            'GetListOfDocuments' => '\\Oihso\\CSESDK\\StructType\\GetListOfDocuments',
            'GetListOfDocumentsResponse' => '\\Oihso\\CSESDK\\StructType\\GetListOfDocumentsResponse',
            'GetReferenceData' => '\\Oihso\\CSESDK\\StructType\\GetReferenceData',
            'GetReferenceDataResponse' => '\\Oihso\\CSESDK\\StructType\\GetReferenceDataResponse',
            'GetUserInfo' => '\\Oihso\\CSESDK\\StructType\\GetUserInfo',
            'GetUserInfoResponse' => '\\Oihso\\CSESDK\\StructType\\GetUserInfoResponse',
            'PutReferenceData' => '\\Oihso\\CSESDK\\StructType\\PutReferenceData',
            'PutReferenceDataResponse' => '\\Oihso\\CSESDK\\StructType\\PutReferenceDataResponse',
            'PutUserInfo' => '\\Oihso\\CSESDK\\StructType\\PutUserInfo',
            'PutUserInfoResponse' => '\\Oihso\\CSESDK\\StructType\\PutUserInfoResponse',
            'Report' => '\\Oihso\\CSESDK\\StructType\\Report',
            'ReportResponse' => '\\Oihso\\CSESDK\\StructType\\ReportResponse',
            'SaveDocuments' => '\\Oihso\\CSESDK\\StructType\\SaveDocuments',
            'SaveDocumentsResponse' => '\\Oihso\\CSESDK\\StructType\\SaveDocumentsResponse',
            'Tracking' => '\\Oihso\\CSESDK\\StructType\\Tracking',
            'TrackingResponse' => '\\Oihso\\CSESDK\\StructType\\TrackingResponse',
            'SaveDocumentsCello' => '\\Oihso\\CSESDK\\StructType\\SaveDocumentsCello',
            'SaveDocumentsCelloResponse' => '\\Oihso\\CSESDK\\StructType\\SaveDocumentsCelloResponse',
            'SaveAckansCello' => '\\Oihso\\CSESDK\\StructType\\SaveAckansCello',
            'SaveAckansCelloResponse' => '\\Oihso\\CSESDK\\StructType\\SaveAckansCelloResponse',
            'SaveGenresCello' => '\\Oihso\\CSESDK\\StructType\\SaveGenresCello',
            'SaveGenresCelloResponse' => '\\Oihso\\CSESDK\\StructType\\SaveGenresCelloResponse',
            'SaveWaybillOffice' => '\\Oihso\\CSESDK\\StructType\\SaveWaybillOffice',
            'SaveWaybillOfficeResponse' => '\\Oihso\\CSESDK\\StructType\\SaveWaybillOfficeResponse',
            'Measurement' => '\\Oihso\\CSESDK\\StructType\\Measurement',
            'MeasurementResponse' => '\\Oihso\\CSESDK\\StructType\\MeasurementResponse',
            'PrintDocument' => '\\Oihso\\CSESDK\\StructType\\PrintDocument',
            'PrintDocumentResponse' => '\\Oihso\\CSESDK\\StructType\\PrintDocumentResponse',
            'CheckClientNumber' => '\\Oihso\\CSESDK\\StructType\\CheckClientNumber',
            'CheckClientNumberResponse' => '\\Oihso\\CSESDK\\StructType\\CheckClientNumberResponse',
            'CheckPlannedDeliveryDate' => '\\Oihso\\CSESDK\\StructType\\CheckPlannedDeliveryDate',
            'CheckPlannedDeliveryDateResponse' => '\\Oihso\\CSESDK\\StructType\\CheckPlannedDeliveryDateResponse',
            'UpdateClientProducts' => '\\Oihso\\CSESDK\\StructType\\UpdateClientProducts',
            'UpdateClientProductsResponse' => '\\Oihso\\CSESDK\\StructType\\UpdateClientProductsResponse',
            'CreateGMH' => '\\Oihso\\CSESDK\\StructType\\CreateGMH',
            'CreateGMHResponse' => '\\Oihso\\CSESDK\\StructType\\CreateGMHResponse',
            'DeleteGMH' => '\\Oihso\\CSESDK\\StructType\\DeleteGMH',
            'DeleteGMHResponse' => '\\Oihso\\CSESDK\\StructType\\DeleteGMHResponse',
            'UpdateDocument' => '\\Oihso\\CSESDK\\StructType\\UpdateDocument',
            'UpdateDocumentResponse' => '\\Oihso\\CSESDK\\StructType\\UpdateDocumentResponse',
            'Ping' => '\\Oihso\\CSESDK\\StructType\\Ping',
            'PingResponse' => '\\Oihso\\CSESDK\\StructType\\PingResponse',
            'SaveOwnerOfTheGoods' => '\\Oihso\\CSESDK\\StructType\\SaveOwnerOfTheGoods',
            'SaveOwnerOfTheGoodsResponse' => '\\Oihso\\CSESDK\\StructType\\SaveOwnerOfTheGoodsResponse',
        ];
    }
}
