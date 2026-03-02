<?php
class DB
{
    protected  $dbType;
    protected  $dbName;
    protected  $host;
    protected  $userName;
    protected  $password;
    protected  $connection;



    function __construct($dbType, $dbName, $host, $password, $userName)
    {
        $this->dbName = $dbName;
        $this->dbType = $dbType;
        $this->host = $host;
        $this->password = $password;
        $this->userName = $userName;
        $this->connection = new PDO("$this->dbType:host=$this->host;dbname=$this->dbName", $this->userName, $this->password);
    }

    // get all users 
    function index($table)
    {
        try {
            $query = "select * from $table";

            $sqlQuery = $this->connection->prepare($query);


            $sqlQuery->execute();
            $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);

            if ($result) {
                return $result;
            } else {
                echo "Empty Data";
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    // show single user
    function show($table, $id)
    {
        try {
            $query = "select * from $table where id=:id";
            $sqlQuery = $this->connection->prepare($query);
            $sqlQuery->execute([
                ':id' => $id
            ]);
            $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);

            if ($result) {
                return $result;
            } else {
                echo "Empty Data";
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    // delete user

    function delete ($table, $id)
    {
         try {
            $query = "delete from $table where id=:id";
            $sqlQuery = $this->connection->prepare($query);
            $result=$sqlQuery->execute([
                ':id' => $id
            ]);
          

            if ($result) {
                return "deleted successfully";
            } else {
                echo "check your data";
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    // $_post  ===> array ["key", 'value' ]

    function create ($table,$data)
    {
    //    $query=insert into $table values ($data)
    //     $query ="insert into users (name,email,password) values('php','php@gmail.com','1234')";

    $dataKeys=array_keys($data);  // [name,email,password]
    $dataKeysString=implode(',', $dataKeys); // name,email,password
    $dataValues=array_values($data);
    $dataValuesString=implode("' , '",$dataValues);    // 'php' , 'email' 

    // insert values   // hash password , sql injection 
    $query ="insert into users ($dataKeysString) values()";

    }

    function update ($table,$data)
    {

    }

}

$database = new DB(dbType: "mysql", userName: "root", password: "", dbName: "iti_os_46_2026", host: "localhost");
var_dump($database);
