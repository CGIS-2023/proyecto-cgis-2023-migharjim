### DOMINIO<br />

Una de las principales metas de toda organización consiste en la reducción del coste generado a la hora de reabastecerse de nuevos suministros. En el que caso de los hospitales, esta es una acción muy importante, puesto que se necesita que estos costes no superen un determinado presupuesto y, además, se debe asegurar que estos artículos cumplan con una serie de garantías que afiancen la seguridad en pacientes y la eficacia a la hora de trabajar con ellos.<br />

El objetivo de este trabajo es implementar una aplicación web que apoyará a clínicas y hospitales a la hora de tener que realizar dichas compras, para agilizar así la gestión, reduciendo el tiempo necesario en la búsqueda y creación de pedidos.<br />

Para ello, varias personas tendrán acceso a esta aplicación. Por un lado, encontramos a los responsables de crear pedidos. Estos responsables serán los gestores. También encontramos a los administradores, que se encargarán de validar o rechazar los pedidos.<br />
Por último tenemos al administrador de la aplicación web que se encargará de su mantenimiento y tendrá acceso a todas las instancias.<br />

### Encontramos tres tipos de objetos: <br />
**Productos de limpieza** (guantes, jabón, lejía…). <br />

**Herramientas para el mantenimiento** de instalaciones y máquinas (bombillas, cableado, tornillos…). <br />

**Sanitarios**, que serían medicamentos e instrumentación (sueros, antibióticos, jeringuillas, gasas, vendajes…).  <br />

Dichos objetos se encontrarán en alojados en un mismo almacén.<br />


### Objetivos de la aplicación<br />

**Objetivo 1: Gestión de las peticiones:** permitir realizar peticiones sobre productos del almacén.<br />

**Objetivo 2: Gestión de productos de proveedores:** comparar el precio de productos entre varios proveedores.<br />

**Objetivo 3: Gestión de los pedidos:** poder acceder a los distintos pedidos realizados.<br />

**Objetivo 4: Gestión de los objetos:** buscar entre los distintos objetos disponibles.<br />

**Objetivo 5: Gestión de los proveedores:** poder almacenar información de los proveedores y ver el precio que ofertan de sus productos.<br />

**Objetivo 6: Gestión de los usuarios:** poder modificar, crear o eliminar la información de los distintos usuarios registrados.<br />

**Objetivo 7: Gestión de nuevos usuarios:** permitir crear nuevos usuarios.<br />

### Usuarios del sistema <br />

**Administrador:** encargado del buen funcionamiento de la aplicación. Tendrá acceso a todas las entidades de la aplicación y en caso de necesidad podrá añadir, eliminar o modificar cualquiera de ellas.<br />

**Encargado de compras:** se encargará de validar las peticiones o eliminarlas.<br />

**Gestor:** su objetivo es realizar un pedido con los productos necesarios.<br />


### Requisitos de información:<br />
**RI-01. Gestores:** El sistema deberá almacenar información sobre los gestores del sistema, en concreto: nombre, apellido, email, contraseña.<br />

**RI-02. Encargados:** El sistema deberá almacenar información sobre los encargados del sistema, en concreto: nombre, apellido, email, contraseña.<br />

**RI-03. Administradores:** El sistema deberá almacenar información sobre los administradores del sistema, en concreto: nombre, apellido, email, contraseña.<br />

**RI-04. Pedidos:** El sistema deberá almacenar información sobre los pedidos, en concreto: fecha de emisión del pedido, número de pedido, quién la realiza, proveedor al que se dirije y el estado en el que se encuentra: pendiente, aceptado o rechazado.<br />

**RI-05. Objetos:**  El sistema deberá almacenar información sobre los objetos del pedido, en concreto: precio, nombre y cantidad. Podemos clasificar los objetos en 3 grupos: sanitario, limpieza y mantenimiento. Cada uno de ellos se almacena en una sección distinta. No pueden pertenecer al mismo grupo simultáneamente.<br />

**RI-06. Proveedores:**  El sistema deberá almacenar información sobre los proveedores, en concreto: nombre de la empresa, dirección, email, teléfono. <br />

**RI-07. Almacén:**  El sistema deberá almacenar información sobre el almacén, en concreto: nombre y dirección.<br />

**RI-08. Línea de pedidos:** El sistema deberá almacenar información sobre las líneas de pedido, en concreto: identificador de la línea de pedido y el precio total de compra.


### Requisitos funcionales: <br />

#### CRUD Gestores
**RI-01. Borrado** El sistema deberá permitir al administrador eliminar la información de los gestores.<br />
**RI-02. Creación** El sistema deberá permitir crear al administrador la información de los gestores.<br />
**RI-03. Editar** El sistema deberá permitir editar al administrador la información de los gestores.<br />
**RI-04. Ver detalle** El sistema deberá permitir mostrar al administrador la información de los gestores.<br />

#### CRUD Encargados
**RI-05. Borrado** El sistema deberá permitir al administrador eliminar la información de los encargados.<br />
**RI-06. Creación** El sistema deberá permitir crear al administrador la información de los encargados.<br />
**RI-07. Editar** El sistema deberá permitir editar al administrador la información de los encargados.<br />
**RI-08. Ver detalle** El sistema deberá permitir mostrar al administrador la información de los encargados.<br />

#### CRUD Administradores
**RI-09. Borrado** El sistema deberá permitir al administrador eliminar la información de los administradores.<br />
**RI-10. Creación** El sistema deberá permitir crear al administrador la información de los administradores.<br />
**RI-11. Editar** El sistema deberá permitir editar al administrador la información de los administradores.<br />
**RI-12. Ver detalle** El sistema deberá permitir mostrar al administrador la información de los administradores.<br />

#### CRUD Proveedores
**RI-13. Borrado** El sistema deberá permitir al administrador eliminar la información de los proveedores.<br />
**RI-14. Creación** El sistema deberá permitir crear al administrador la información de los proveedores.<br />
**RI-15. Editar** El sistema deberá permitir editar al administrador la información de los proveedores.<br />
**RI-16. Ver detalle** El sistema deberá permitir mostrar al administrador la información de los proveedores.<br />

#### CRUD Objetos
**RI-17. Borrado** El sistema deberá permitir eliminar la información de los objetos.<br />
**RI-18. Creación** El sistema deberá permitir crear la información de los objetos.<br />
**RI-19. Editar** El sistema deberá permitir editar la información de los objetos.<br />
**RI-20. Ver detalle** El sistema deberá permitir mostrar la información de los objetos.<br />

#### CRUD Pedidos
**RI-21. Borrado** El sistema deberá permitir al encargado eliminar la información de los pedidos.<br />
**RI-22. Creación** El sistema deberá permitir crear al gestor la información de los pedidos.<br />
**RI-23. Editar** El sistema deberá permitir editar al encargado la información de los pedidos.<br />
**RI-24. Ver detalle** El sistema deberá permitir mostrar la información de los pedidos.<br />

#### Encargado
**RF-25.** Stock de almacén: Como encargado, quiero poder ver el stock de cualquier producto del almacén.<br />
**RF-26.** Detalles del pedido: Como encargado, quiero ver quién ha enviado la petición para en caso de rechazarla comunicárselo <br />
**RF-27.** Detalles del pedido: Como encargado, quiero poder modificar un pedido.<br />
**RF-28.** Detalles del petición: Como encargado, quiero poder eliminar un pedido.<br />

#### Administrador
**RF-29.** Organización de usuarios: Como administrador, quiero poder eliminar, editar, crear y mostrar todos los usuarios de la aplicación.<br />
**RF-30.** Organización de usuarios: Como administrador, quiero poder eliminar, editar, crear y mostrar todos los proveedores de la aplicación.<br />

#### Gestor
**RF-31.** Detalles del pedido: Como gestor, quiero ver el precio de los productos ofertados por distintos proveedores.<br />


### Requisitos no funcionales:<br />
**RNF-01:** Seguridad de las contraseñas de los usuarios.<br />
**RNF-02:** Disponibilidad de los datos.<br />
**RNF-03:** Eficiencia a la hora de usar la aplicación.<br />

### Reglas de negocio<br />
**RN-01:** No se podrá crear un pedido si no eres un gestor.<br />
**RN-02:** No se podrá crear o eliminar un gestor o un encargado si no eres un administrador.<br />
**RN-03:** no se puede realizar un pedido con una fecha anterior a la actual. <br />
**RN-04:** No se podrá crear o eliminar un proveedor si no eres un administrador.<br />
**RN-05:** No se podrá eliminar o editar un pedido si no eres un encargado.

## DIAGRAMA

![Diagrama cgis drawio (5)](https://github.com/CGIS-2023/proyecto-cgis-2023-migharjim/assets/126070979/156fdd04-1ae3-4d36-8a2d-ab2258d1ade1)



