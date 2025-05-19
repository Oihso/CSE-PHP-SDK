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
            'Element' => '\\CSESDK\\StructType\\Element',
            'Row' => '\\CSESDK\\StructType\\Row',
            'ResultString' => '\\CSESDK\\StructType\\ResultString',
            'DestinationAddress' => '\\CSESDK\\StructType\\DestinationAddress',
            'CargoPackages' => '\\CSESDK\\StructType\\CargoPackages',
            'Cargo' => '\\CSESDK\\StructType\\Cargo',
            'Products' => '\\CSESDK\\StructType\\Products',
            'Materials' => '\\CSESDK\\StructType\\Materials',
            'Notifications' => '\\CSESDK\\StructType\\Notifications',
            'DestinationInformation' => '\\CSESDK\\StructType\\DestinationInformation',
            'DocumentsPhoto' => '\\CSESDK\\StructType\\DocumentsPhoto',
            'Order' => '\\CSESDK\\StructType\\Order',
            'ResultArray' => '\\CSESDK\\StructType\\ResultArray',
            'ResultPrint' => '\\CSESDK\\StructType\\ResultPrint',
            'ResultArrayPrint' => '\\CSESDK\\StructType\\ResultArrayPrint',
            'ListOfCorrespondences' => '\\CSESDK\\StructType\\ListOfCorrespondences',
            'DeliveryOptions' => '\\CSESDK\\StructType\\DeliveryOptions',
            'ArrayClientAccount' => '\\CSESDK\\StructType\\ArrayClientAccount',
            'Calc' => '\\CSESDK\\StructType\\Calc',
            'CalcResponse' => '\\CSESDK\\StructType\\CalcResponse',
            'DeleteDocuments' => '\\CSESDK\\StructType\\DeleteDocuments',
            'DeleteDocumentsResponse' => '\\CSESDK\\StructType\\DeleteDocumentsResponse',
            'GetDocuments' => '\\CSESDK\\StructType\\GetDocuments',
            'GetDocumentsResponse' => '\\CSESDK\\StructType\\GetDocumentsResponse',
            'GetFormsForDocuments' => '\\CSESDK\\StructType\\GetFormsForDocuments',
            'GetFormsForDocumentsResponse' => '\\CSESDK\\StructType\\GetFormsForDocumentsResponse',
            'GetListOfDocuments' => '\\CSESDK\\StructType\\GetListOfDocuments',
            'GetListOfDocumentsResponse' => '\\CSESDK\\StructType\\GetListOfDocumentsResponse',
            'GetReferenceData' => '\\CSESDK\\StructType\\GetReferenceData',
            'GetReferenceDataResponse' => '\\CSESDK\\StructType\\GetReferenceDataResponse',
            'GetUserInfo' => '\\CSESDK\\StructType\\GetUserInfo',
            'GetUserInfoResponse' => '\\CSESDK\\StructType\\GetUserInfoResponse',
            'PutReferenceData' => '\\CSESDK\\StructType\\PutReferenceData',
            'PutReferenceDataResponse' => '\\CSESDK\\StructType\\PutReferenceDataResponse',
            'PutUserInfo' => '\\CSESDK\\StructType\\PutUserInfo',
            'PutUserInfoResponse' => '\\CSESDK\\StructType\\PutUserInfoResponse',
            'Report' => '\\CSESDK\\StructType\\Report',
            'ReportResponse' => '\\CSESDK\\StructType\\ReportResponse',
            'SaveDocuments' => '\\CSESDK\\StructType\\SaveDocuments',
            'SaveDocumentsResponse' => '\\CSESDK\\StructType\\SaveDocumentsResponse',
            'Tracking' => '\\CSESDK\\StructType\\Tracking',
            'TrackingResponse' => '\\CSESDK\\StructType\\TrackingResponse',
            'SaveDocumentsCello' => '\\CSESDK\\StructType\\SaveDocumentsCello',
            'SaveDocumentsCelloResponse' => '\\CSESDK\\StructType\\SaveDocumentsCelloResponse',
            'SaveAckansCello' => '\\CSESDK\\StructType\\SaveAckansCello',
            'SaveAckansCelloResponse' => '\\CSESDK\\StructType\\SaveAckansCelloResponse',
            'SaveGenresCello' => '\\CSESDK\\StructType\\SaveGenresCello',
            'SaveGenresCelloResponse' => '\\CSESDK\\StructType\\SaveGenresCelloResponse',
            'SaveWaybillOffice' => '\\CSESDK\\StructType\\SaveWaybillOffice',
            'SaveWaybillOfficeResponse' => '\\CSESDK\\StructType\\SaveWaybillOfficeResponse',
            'Measurement' => '\\CSESDK\\StructType\\Measurement',
            'MeasurementResponse' => '\\CSESDK\\StructType\\MeasurementResponse',
            'PrintDocument' => '\\CSESDK\\StructType\\PrintDocument',
            'PrintDocumentResponse' => '\\CSESDK\\StructType\\PrintDocumentResponse',
            'CheckClientNumber' => '\\CSESDK\\StructType\\CheckClientNumber',
            'CheckClientNumberResponse' => '\\CSESDK\\StructType\\CheckClientNumberResponse',
            'CheckPlannedDeliveryDate' => '\\CSESDK\\StructType\\CheckPlannedDeliveryDate',
            'CheckPlannedDeliveryDateResponse' => '\\CSESDK\\StructType\\CheckPlannedDeliveryDateResponse',
            'UpdateClientProducts' => '\\CSESDK\\StructType\\UpdateClientProducts',
            'UpdateClientProductsResponse' => '\\CSESDK\\StructType\\UpdateClientProductsResponse',
            'CreateGMH' => '\\CSESDK\\StructType\\CreateGMH',
            'CreateGMHResponse' => '\\CSESDK\\StructType\\CreateGMHResponse',
            'DeleteGMH' => '\\CSESDK\\StructType\\DeleteGMH',
            'DeleteGMHResponse' => '\\CSESDK\\StructType\\DeleteGMHResponse',
            'UpdateDocument' => '\\CSESDK\\StructType\\UpdateDocument',
            'UpdateDocumentResponse' => '\\CSESDK\\StructType\\UpdateDocumentResponse',
            'Ping' => '\\CSESDK\\StructType\\Ping',
            'PingResponse' => '\\CSESDK\\StructType\\PingResponse',
            'SaveOwnerOfTheGoods' => '\\CSESDK\\StructType\\SaveOwnerOfTheGoods',
            'SaveOwnerOfTheGoodsResponse' => '\\CSESDK\\StructType\\SaveOwnerOfTheGoodsResponse',
        ];
    }
}
