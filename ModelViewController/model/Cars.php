<?php



class cars{
    
    private $dbConn;
    
    const TABLE = "cars";
    const SELECT_QUERY = "SELECT * FROM" . cars::TABLE;
    
    /** @var PDOStatement Statement for selecting all entries */
    private $selStmt;
    
    public function __construct(PDO $dbConn) {
    $this->dbConn = $dbConn;
    $this->selStmt = $this->dbConn->prepare(cars::SELECT_QUERY);
    }
    
    /**
     * Get all customers stored in the DB
     * @return array in associative form
     */
    public function getAll() {
        // Fetch all customers as associative arrays
        $this->selStmt->execute();
        return $this->selStmt->fetchAll(PDO::FETCH_ASSOC);
    
    }   
    
}


//execute the SQL query and return records
// $result = mysql_query("SELECT id, model, year FROM cars");
//fetch tha data from the database
//while ($row = mysql_fetch_array($result)) {
//   echo "ID:".$row{'id'}." Name:".$row{'model'}." 
//   ".$row{'year'}."<br>";
//}
