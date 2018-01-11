###################
CONTROL DE TEMPERATURA Y HUMEDAD CON NODEMCU Y DTH11
###################


Este es un proyecto sencillo donde utilizamos el Nodemcu y sensores de temperatura y humedad DTH11
para obtener la temperatura y humendad de una habitación .

Los datos obtenidos por los sensor son enviados a una base de datos para luego ser mostrados en una
página web sencilla realizada con el framework Codeigniter


Si desea utilizar este codigo solo debes seguir los siguientes pasos:

1. Descargar Repositorio
2. Copiar el codigo del archivo "code_for_nodemcu.txt" en el Nodemcu que estas programando
3. Definir el nombre de la red y contraseña Wifi de la cual se conectara el nodemcu. De igual
   manera se debe definir el host o dominio al cual el nodemcu enviara los datos recolectados por 
   los sensores.

    #   const char* ssid     = "name_ssid";
    #   const char* password = "password_ssid";

    #   String url = "YourDomain/entrada_datos.php";
  
    #   client.println("Host: YourDomain");

4. En la carpeta application/config deberas definir la base url

    #   $config['base_url'] = 'Here your host o domain/';

5.En la raiz de este proyecto se encuentra un archivo llamado "entrada_datos.php" este archivo es el
  encargado de enviar los datos recibidos de los sensores por metodo POST a la base de Datos; en este archivo
  deberas configurar el usuario, contraseña y nombre de base de datos

    #	$con=mysqli_connect("localhost","user_mysql","your_password","name_db");

6. Importar la base de datos que se encuentra en la raiz nombrado "db_proyecto"

Realizando todos estos pasos no debe de haber ningun problema para que el proyecto se visualize. Desde este punto eres libre de modificar y agregar caracteristicas que desees 
Este proyecto puedes encontrarlo en funcionamiento en la siguiente url : embebidos.jguerra.org 

