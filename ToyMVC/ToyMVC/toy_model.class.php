<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/3/2020
 * File: ToyModel.php
 * Description:
 */

class ToyModel
{
    private $db; //database object
    private $dbConnection; //database connection

    public function __construct()
    {
        $this->db = Database::getInstance(); //a static variable
        $this->dbConnection = $this->db->getConnection();
    }

    /*
 * this method retrieves all toys from the database and
 * returns an array of Toy objects if successful or false if failed.
 */
    public function getToys()
    {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getToyTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all toys
            $toys = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $toy = new Toy($query_row["id"],
                    $query_row["name"],
                    $query_row["description"],
                    $query_row["price"]);

                //push the toy into the array
                $toys[] = $toy;
            }
            return $toys;
        }
        return false;
    }

}