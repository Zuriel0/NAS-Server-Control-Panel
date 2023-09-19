<!--Este es una extencion de DB la cual se encarga de realizar las consultas y ejecuciones de condigo sql -->

<?php
include_once 'DB.php';

class only_query extends DB{


//Ejecuta sql para la escritura en db
public function ejecSql($sql){
    $query=$this->connect()->exec($sql);
    //return $query->lastInsertId();
}
//Consulta de db
public function searchSql($sql){

    $sent=$this->connect()->prepare($sql);    // Preparmos el comando en la db.
    $sent->execute(); //Ejecutamos comandos
    $resultado=$sent->fetchAll();  //Buscamos y guardamos los resultados obtenidos. 
    foreach($resultado as $Var );
    return $Var;
}
public function searchSql_Assoc($sql){

    $sent=$this->connect()->prepare($sql);    // Preparmos el comando en la db.
    $sent->execute(); //Ejecutamos comandos
    $resultado=$sent->fetchAll(PDO::FETCH_ASSOC);  //Buscamos y guardamos los resultados obtenidos de forma asociativa. 
    //foreach($resultado as $Var );
    return $resultado;
}
public function executeSql($sql){
    $sent=$this->connect()->prepare($sql);    // Preparmos el comando en la db.
    $sent->execute(); //Ejecutamos comandos
    return $sent;
}
}




function query_materias($id){

    $objConecion= new only_query();
    $sql = "SELECT ID_Materias FROM Mat_User WHERE ID_Tutores= $id ";
    $res=$objConecion->searchSql_Assoc($sql);
    $flag = true;

    foreach($res as $val){

        $sql=$objConecion->connect()->prepare("SELECT Materia_Name FROM Materia WHERE MateriaID=?");
        $sql->execute([$val['ID_Materias']]);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        if ($flag == true){
            print $row['Materia_Name'];
            $flag  = false;
        }else {print ", ".$row['Materia_Name'];}
        
    }

}

function query_status_sol($id){

    $objConecion= new only_query();
    $sql = "SELECT solicitudes.id_tutor, Users_tutores.Name, Users_tutores.ID, Users_tutores.Escuela,Users_tutores.Semestre, Users_tutores.Carrera, Users_tutores.Url, Users_tutores.Tipo, solicitudes.status_user, solicitudes.status_tutor FROM solicitudes ,Users_tutores WHERE solicitudes.id_tutor = Users_tutores.ID AND solicitudes.status_user= 1 AND solicitudes.id_user=$id;";
    $res=$objConecion->searchSql_Assoc($sql);
    return $res;

}

function search_tutor_gen(){
    $objConecion= new only_query();
    $sql = "SELECT ID, Name, Escuela, Carrera, Semestre, Url, Tipo FROM Users_tutores Where Tipo=1";
    $res=$objConecion->searchSql_Assoc($sql);
    return $res;
}

function search_tutor_select($mat){
    $objConecion= new only_query();
    $sql = "SELECT Mat_User.ID_Materias, Users_tutores.Name, Users_tutores.ID, Users_tutores.Escuela, Users_tutores.Carrera ,Users_tutores.Semestre, Users_tutores.Url, Users_tutores.Tipo FROM Mat_User,Users_tutores WHERE Mat_User.ID_Tutores=Users_tutores.ID AND Mat_User.ID_Materias=$mat;";
    $res=$objConecion->searchSql_Assoc($sql);
    return $res;
}
function formatDate($fecha){
    return date('g:i a', strtotime($fecha));
}
function nav_selector_mat ($semestre){
    $objConecion= new only_query();
    $sql = "SELECT Materia.Materia_Name, Materia.ID_semestre, Materia.MateriaID FROM Materia WHERE Materia.ID_semestre = $semestre;";
    $res=$objConecion->searchSql_Assoc($sql);
    return $res;
}
function query_chat_info( $id_user, $id_tutor, $id_chat ){
    $objConecion= new only_query();
    // $sql = `SELECT solicitudes.id FROM solicitudes WHERE solicitudes.id_tutor= $id_tutor AND solicitudes.id_user= $id_user;`;
    // $res=$objConecion->searchSql_Assoc($sql);
    // $id_chat=$res['id'];
    // $sql =`SELECT Users.Name FROM Users WHERE Users.ID= $id_user;`;
    // $res['Name']=$objConecion->searchSql_Assoc($sql);
    $sql="SELECT * FROM chat WHERE id_sol =$id_chat ORDER BY chat.date ASC;";
    $res=$objConecion->searchSql_Assoc($sql);
    return $res;
}
//SELECT Mat_User.ID_Materias, Users_tutores.Name FROM Mat_User,Users_tutores WHERE Mat_User.ID_Tutores=Users_tutores.ID AND Mat_User.ID_Materias=1;
//SELECT solicitudes.status_tutor, solicitudes.status_user, Users_tutores.Name, Users.Name FROM solicitudes, Users_tutores, Users WHERE solicitudes.status_tutor=0 AND solicitudes.status_user=0;


?>