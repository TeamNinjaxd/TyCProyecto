import json
import boto3


def createCliente(event, context):
    # TODO implement
    dynamodb = boto3.resource("dynamodb", 'us-east-2')
    tabla_usuarios = dynamodb.Table('usuarios_tabla')

    datos_item = event

    response = tabla_usuarios.put_item(
        Item=datos_item
    )
    
    data_response = response['ResponseMetadata']

    if (data_response['HTTPStatusCode'] == 200):
        print "LOGGER - createCliente: " "Usuario creado correctamente"
        return "Usuario creado correctamente"
    else:
        print "LOGGER - createCliente: ", json.dumps(data_response)
        return ""

data = {
    "apellido": "Rufian",
    "correo": "rufo.ramirez@unmsm.edu.pe",
    "direcion": "San Borja",
    "dni": "71943335",
    "nombre": "Rufo",
    "telefono": "900611159"
}

createCliente(data, "")
