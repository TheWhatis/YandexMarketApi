# # ReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор возврата. | [optional]
**order_id** | **int** | Номер заказа. | [optional]
**creation_date** | **\DateTime** | Дата создания возврата клиентом. | [optional]
**update_date** | **\DateTime** | Дата обновления заказа. | [optional]
**refund_status** | [**\OpenAPI\Client\Model\RefundStatusType**](RefundStatusType.md) |  | [optional]
**logistic_pickup_point** | [**\OpenAPI\Client\Model\LogisticPickupPointDTO**](LogisticPickupPointDTO.md) |  | [optional]
**shipment_recipient_type** | [**\OpenAPI\Client\Model\RecipientType**](RecipientType.md) |  | [optional]
**shipment_status** | [**\OpenAPI\Client\Model\ReturnShipmentStatusType**](ReturnShipmentStatusType.md) |  | [optional]
**refund_amount** | **int** | Сумма возврата. | [optional]
**items** | [**\OpenAPI\Client\Model\ReturnItemDTO[]**](ReturnItemDTO.md) | Список товаров в возврате. | [optional]
**return_type** | [**\OpenAPI\Client\Model\ReturnType**](ReturnType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
