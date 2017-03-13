# evaluacion-dev-aq

## Instrucciones generales
- Hacer un fork del proyecto.
- Crear 3 carpetas para cada uno de los ejercicios
- Subir la actualización dentro del plazo de 3 horas.
- Generar un Pull Request a una rama con tu nombre completo (nombre-apellido)


## Ejercicio 1
SE DEBE IMPLEMENTAR EL SIGUIENTE EJEMPLO POO SOLO EN LENGUAJE PHP (SIN NECESIDAD DE UTILIZAR UN FRAMEWORK) Y CON EL EDITOR QUE ESTIME CONVENIENTE.

- Se requiere crear la clase Automóvil con los siguientes campos privados: fabricante tipo string, modelo tipo string, tipoFreno string, tipoTransmision string, largo int, ancho, cilindrada tipo double y finalmente un atributo de tipo arreglo de Ruedas con 4 elementos: private $_ruedas = array();

- En la clase Automovil, crear constructor que inicialice con los atributos fabricante, modelo, largo, ancho y cilindrada.

- En la clase Automovil, crear método getter para todos los atributos.

- En la clase Automovil implementar sólo métodos set para tipoFreno y tipoTransmision.

- Respecto a las ruedas en la clase Automovil, sólo se pueden agregar usando el método addRueda (agregar rueda): public function addRueda(Rueda $rueda), nada más, es decir no se pueden agregar en el constructor ni en métodos setter, solo mediante el addRueda(Rueda $rueda), por lo tanto implementar ese método.

- Crear la clase Rueda con dos atributos fabricante tipo string y anchoAro float, ambos inicializar en el constructor e implementar sus respectivos métodos getter.

- Escribir un programa en index.php, clase con método run (estático), la cual llamaremos EjemploAutomoviles:

    - Crear tres autos, con sus respectivos valores, agregar las cuatro ruedas a cada uno.

    - Para cada uno imprimir sus valores usando método getter incluyendo las ruedas, donde con el getter obtenemos el arreglo de ruedas y con un foreach recorremos e imprimimos sus atributos fabricante y anchoAro.

- El programa se debe leer como http://localhost/index.php


## Ejercicio 2
Cree una herramienta que permita enviar mensajes tipo correo entre usuarios de un sistema. Dichos mensajes se almacenarán en base de datos según los siguientes campos:

##### Usuario
- Id
- Nombre

##### Mensaje
- Id
- FechaCreacion
- Remitente (FK a Usuario)
- Titulo
- Texto

##### MensajeDestinatario
- Id
- MensajeId (FK a Mensaje)
- Destinatario (FK a Usuario)
- Leido


## Especificaciones:
1. Implementar modelos según propuesta de base de datos.
2. Generar controlador y vista para crear un mensaje, pudiéndo seleccionar el usuario a quien se quiere enviar.
3. Desarrollar controlador y vista para revisar el listado de mensajes recibidos.
4. Permitir visualizar un mensaje en particular.


## Ejercicio 3
El proyecto simula una aplicación que permite listar y visualizar vehículos que se encuentran en una compraventa, los cuales tienen modelo, marca y precio.

## Configuración
- Archivo *parameters.yml.dist* contiene configuración inicial.

## Instrucciones
Se solicita realizar lo siguiente:

1. En la ruta `/autos/` listar **todos** los vehículos existentes en la aplicación.
  1. Crear Repository para obtener el listado.
  2. Utilizar el controlador `DefaultController.php` del bundle `CompraVentaBundle`.
2. Permitir a través de un link visualizar un vehículo en particular. Se debe mostrar en la ruta `/autos/{idDelVehiculo}`

## Resultado esperado
#### Listado de vehículos:
  ![Listado](listado.png)

#### Despliegue de vehículo:
  ![Detalle](despliegue.png)
