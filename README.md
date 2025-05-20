# CSE-PHP-SDK
Авто-сгенерированный SDK для SOAP API службы доставки [КСЭ](https://www.cse.ru/). Генерация была произведена из общедоступного WSDL

## Документация
[Документация к SOAP API на русском языке](https://minio02.cse.ru/lk.prod/files/upload/8eb16b89-ccdf-4b76-8c84-4677d76c697b.pdf)

## Зависимости
- php: >=7.4
- ext-dom: *
- ext-mbstring: *
- ext-soap: *
- wsdltophp/packagebase: ~5.0

## Пример
Получение описаний всех ошибок:
```php
use Oihso\CSESDK\ClassMap;
use Oihso\CSESDK\ServiceType\Get;
use Oihso\CSESDK\StructType\Element;
use Oihso\CSESDK\StructType\GetReferenceData;

$options = [
	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://lk-test.cse.ru/1c/ws/Web1C.1cws?wsdl',
	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
	// \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'test', // Логин и пароль требуется только для боевого окружения
	// \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => '2016'
];

$get = new Get($options);
$errors = $get->GetReferenceData(new GetReferenceData(
	new Element('parameters', list: [
		new Element('Reference', 'ErrorCodes', valueType: 'string')
	]), 
	'test', // Логин, test - для тестового окружения
	'2016' // Пароль, 2016 - для тестового окружения
));

// Ошибкой будет считаться только неудачный сетевой запрос
if ($errors !== false) {
	var_dump($get->getResult());
} else {
	var_dump($get->getLastError());
}

```
Пример возвращаемого ответа `$get->getResult()`, переведенного в JSON формат:
```json
{
    "return": {
        "Key": "ErrorCodes",
        "Value": null,
        "CultureSpecificValues": null,
        "ValueType": null,
        "Properties": null,
        "Fields": null,
        "List": [
			{
                "Key": "01010",
                "Value": "Web-сервис в текущий момент отключен",
                "CultureSpecificValues": null,
                "ValueType": "string",
                "Properties": null,
                "Fields": null,
                "List": null,
                "Tables": null,
                "Values": null,
                "Rows": null,
                "BData": null
            }, 
			{
                "Key": "05022",
                "Value": "Документ не может включать страхование, так как в договоре не предусмотрена данная услуга",
                "CultureSpecificValues": null,
                "ValueType": "string",
                "Properties": null,
                "Fields": null,
                "List": null,
                "Tables": null,
                "Values": null,
                "Rows": null,
                "BData": null
            }, 
			{
                "Key": "03050",
                "Value": "Документ нельзя изменить",
                "CultureSpecificValues": null,
                "ValueType": "string",
                "Properties": null,
                "Fields": null,
                "List": null,
                "Tables": null,
                "Values": null,
                "Rows": null,
                "BData": null
            }
        ],
        "Tables": null,
        "Values": null,
        "Rows": null,
        "BData": null
    }
}
```

Для остальных примеров можно обращаться к [документации](https://minio02.cse.ru/lk.prod/files/upload/8eb16b89-ccdf-4b76-8c84-4677d76c697b.pdf). Копия документации так же лежит в корне репозитория под именем `SOAP API Documentation.pdf`