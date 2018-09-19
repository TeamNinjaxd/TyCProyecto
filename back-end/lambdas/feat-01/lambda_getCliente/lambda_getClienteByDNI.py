import json
import boto3


def getClienteByDNI(event, context):
    # TODO implement
    dynamodb = boto3.resource("dynamodb", 'us-east-2')

    tabla_usuarios = dynamodb.Table('usuarios_tabla')

    response = tabla_usuarios.get_item(
        Key= { 'dni': event['dni'] }
    )
    item = response['Item']
    data_response = response['ResponseMetadata']

    if (data_response['HTTPStatusCode'] == 200):
        print json.dumps(item)
        return json.dumps(item)
    else:
        print "LOGGER - getClienteByDNI: ", json.dumps(data_response)
        return ""

data = { 'dni': '78542210'}

getClienteByDNI(data, "")
