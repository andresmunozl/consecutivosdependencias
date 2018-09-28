# consecutivosdependencias
parcial1 ing de software3
Facultad de Ingeniería Electrónica y Telecomunicaciones 
Universidad del Cauca
Programa Ingeniería de Sistemas
Docente: Hendrys Tobar PhD
100 HORAS DE
EXAMEN 
PARCIAL
:
LABORATORIO DE 
INGENIERÍA DEL SOFTW
ARE 3
Competencias o Habilidades a evaluar:

Creación de código en Javascript para modificar el DOM

Creación de un archivo 
JSON

Creación de una funcionalidad 
usando SSS
El presente 
examen parcial pretende evaluar sus capacidades de desarrollar una apli
cación web 
sencilla. Para ello podrán organizarse en equi
pos de 2 o 3 personas. 
REQUERIMIENTO
La 
Facultad de Ingeniería Electrónica y Telecomunicaciones requiere que se cree una aplicación 
web para gestionar los 
códigos
consecutivos de los documentos emitidos por sus dependencias.
Los códigos co
nsecutivos son cadenas de 
números
con cierto formato que
designan la 
dependencia de origen del documento. Cada dependencia tiene un número consecutivo con el 
que designan un documento para facilitar su archivado.
Por 
ejemplo, el número de la FIET es 8, la dependencia decanatura es 1
y la secretaría general de 
decanatura es 2
, luego el documento 125 d
ebería mostrar este valor en la parte superior:
8.1
.2/125
Cree con su equip
o una aplicación web qu
e muestre el valor del consecutivo de una dependencia 
seleccionada. 
Y
que permita 
“
tomar
”
un consecutivo de manera que el valor consecutivo se 
incremente en el servidor para que f
uturos usuarios puedan saber en dónde va el número actual.
La aplicación debe permitir 
“
tomar
”
los consecuti
vos de al 
menos 3 dependencias:

Decanatura
(1)
o
Decano
(1)
o
Secretaría 
General
(1)

Departamento de Sistemas (4)
o
Jefe de Departamento
(1)
o
Tesorerí
a (2)

Si les resulta divertido pueden agregar nuevas dependencias inventando nombres y códigos
La aplicación debe permitir 
selecc
ionar (por medio de botones o control dropdown) la 
dependencia a 
“
tomar
”
. Cuando se sele
ccion
e la dependencia
, usando JS
, debe mostrar el código 
consecutivo a
ctual y el color
(del fondo del párrafo del código)
debe ser diferente para cada 
dependencia.
Los datos de 
los códigos consecutivos
deben ser almacenados en un docu
mento JSON y se debe 
usar PHP como lenguaje de SSS.
