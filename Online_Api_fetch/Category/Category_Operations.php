<?php

class Constants
{
    //DATABASE DETAILS
    static $DB_SERVER="localhost";
    static $DB_NAME="android_application_database_internship";
    static $USERNAME="root";
    static $PASSWORD="";

    //STATEMENTS
    static $SQL_SELECT_ALL = "SELECT CategoryCode,CategoryDesc FROM jse_cf_category";
}

class Category
{
    /*******************************************************************************************************************************************/
    /*
       1.CONNECT TO DATABASE.
       1. RETURN CONNECTION OBJECT
    */
    public function connect()
    {
        $con=new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,Constants::$DB_NAME);
        if($con->connect_error)
        {
            return null;
        }else
        {
            return $con;
        }
    }
    /*******************************************************************************************************************************************/
    /*
        1.SELECT ALL DATA FROM DATABASE
    */

    public function select()
    {
        $con=$this->connect();
        if($con != null)
        {
            $result=$con->query(Constants::$SQL_SELECT_ALL);
            if($result->num_rows>0)
            {
                $category=array();
                while($row=$result->fetch_array())
                {
                    array_push($category, array("CategoryCode"=>$row['CategoryCode'],"CategoryDesc"=>$row['CategoryDesc']));
                }
                print(json_encode(array_reverse($category)));
            }else
            {
                print(json_encode(array("PHP EXCEPTION : CAN'T RETRIEVE FROM MYSQL. ")));
            }
            $con->close();

        }else{
            print(json_encode(array("PHP EXCEPTION : CAN'T CONNECT TO MYSQL. NULL CONNECTION.")));
        }
    }

    /*
       2.SELECT SPECIFIC DATA FROM DATABASE.
    */
    public function search($query)
    {

        $sql="SELECT CategoryCode FROM jse_cf_category WHERE CategoryDesc LIKE '%$query%'";

        $con=$this->connect();
        if($con != null)
        {
            $result=$con->query($sql);
            if($result->num_rows > 0)
            {
                $category=array();
                while($row=$result->fetch_array())
                {
                    array_push($category, array("CategoryCode"=>$row['CategoryCode'],"CategoryDesc"=>$row['CategoryDesc']));
                }
                print(json_encode(array_reverse($category)));
            }else
            {
                print(json_encode(array("No item Found that matches the query: ".$query)));
            }
            $con->close();

        }else{
            print(json_encode(array("PHP EXCEPTION : CAN'T CONNECT TO MYSQL. NULL CONNECTION.")));
        }
    }
    public function handleRequest() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $query=$_POST['query'];
            $this->search($query);
        } else{
            $this->search("");
        }

    }
}
$category=new Category();
$category->select();
$category->handleRequest();
//end