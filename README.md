**DOMINIO** <br />
Una de las principales metas de toda organización consiste en la reducción del coste generado a la hora de reabastecerse de nuevos suministros. En el que caso de los hospitales, esta es una acción muy importante, puesto que se necesita que estos costes no superen un determinado presupuesto y, además, se debe asegurar que estos artículos cumplan con una serie de garantías que afiancen la seguridad en pacientes y la eficacia a la hora de trabajar con ellos.

El objetivo de este trabajo es implementar una aplicación web que apoyará a clínicas y hospitales a la hora de tener que realizar dichas compras, para agilizar así la gestión, reduciendo el tiempo necesario en la búsqueda y creación de pedidos.

Para ello, varias personas tendrán acceso a esta aplicación. Por un lado, encontramos a los responsables de crear pedidos. Estos responsables serán los gestores. También encontramos a los administradores, que se encargarán de validar o rechazar los pedidos.
Por último tenemos al administrador de la aplicación web que se encargará de su mantenimiento y tendrá acceso a todas las instancias.

Encontramos tres tipos de objetos: 

Productos de limpieza (guantes, jabón, lejía…).
Herramientas para el mantenimiento de instalaciones y máquinas (bombillas, cableado, tornillos…).
Sanitarios, que serían medicamentos e instrumentación (sueros, antibióticos, jeringuillas, gasas, vendajes…).

Dichos objetos se encontrarán en alojados en un mismo almacén.

**Objetivos de la aplicación**
Gestión de las peticiones: permitir realizar peticiones sobre productos del almacén.

Gestión de productos de proveedores: comparar el precio de productos entre varios proveedores.

Gestión de los pedidos: buscar entre los distintos pedidos realizados.

**Usuarios del sistema**
Administrador: encargado del buen funcionamiento de la aplicación. Tendrá acceso a todas las entidades de la aplicación y en caso de necesidad podrá añadir, eliminar o modificar cualquiera de ellas.

Encargado de compras: se encargará de validar las peticiones o eliminarlas.

Gestor: su objetivo es realizar un pedido con los productos necesarios.

**Requisitos de información**
RI-01. Usuarios:  El sistema deberá almacenar información sobre los usuarios del sistema, en concreto: nombre, apellido, email, contraseña.
RI-02. Pedidos: El sistema deberá almacenar información sobre los pedidos, en concreto: fecha de emisión del pedido, número de pedido, quién la realiza, proveedor al que se dirije y el estado en el que se encuentra: pendiente, aceptado o rechazado.
RI-03. Objetos:  El sistema deberá almacenar información sobre los objetos del pedido, en concreto: precio, nombre y cantidad. Podemos clasificar los objetos en 3 grupos: sanitario, limpieza y mantenimiento. Cada uno de ellos se almacena en una sección distinta. No pueden pertenecer al mismo grupo simultáneamente.
RI-04. Proveedores:  El sistema deberá almacenar información sobre los proveedores, en concreto: nombre de la empresa, dirección, email, teléfono.
RI-05. Almacén:  El sistema deberá almacenar información sobre el almacén, en concreto: nombre y dirección.
RI-06. Línea de pedidos: El sistema deberá almacenar información sobre las líneas de pedido, en concreto: identificador de la línea de pedido y el precio total de compra.

**Requisitos funcionales** 
RF-01. Stock de almacén: Como encargado, quiero poder ver el stock de cualquier producto del almacén.
RF-02. Detalles del pedido: Como encargado, quiero ver quién ha enviado la petición para en caso de rechazarla comunicárselo.
RF-03. Detalles del pedido: Como encargado, quiero ver el precio de los productos ofertados por distintos proveedores.
RF-04. Detalles del pedido: Como encargado, quiero poder modificar un pedido.
RF-05. Detalles del petición: Como encargado, quiero poder eliminar un pedido.
RF-06. Organización de usuarios: Como administrador, quiero poder eliminar, editar, crear y mostrar todos los usuarios de la aplicación.

**Requisitos no funcionales**
RNF-01: Seguridad de las contraseñas de los usuarios.
RNF-02: Disponibilidad de los datos.
RNF-03: Eficiencia a la hora de usar la aplicación.

**Reglas de negocio**
RN-01: No se podrá crear un pedido si no eres un gestor.
RN-02: No se podrá crear o eliminar un gestor o un encargado si no eres un administrador.
RN-03: no se puede realizar un pedido con una fecha anterior a la actual. 
RN-04: No se podrá crear o eliminar un proveedor si no eres un administrador.
RN-05: No se podrá eliminar o editar un pedido si no eres un encargado.

[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-c66648af7eb3fe8bc4f294546bfd86ef473780cde1dea487d3c4ff354943c9ae.svg)](https://classroom.github.com/online_ide?assignment_repo_id=10479728&assignment_repo_type=AssignmentRepo)




