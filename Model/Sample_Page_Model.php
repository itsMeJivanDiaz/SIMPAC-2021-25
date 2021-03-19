<?php
Class Sample_Page_Model extends Model {
    function __construct() {
       parent::__construct();     
    }
    
/* CRUD METHODS */
	
	/** CREATE [INSERT RECORD TO DATABASE] **/
	
	public function insertRecord($tablename) {
		/*sample insert query with dummy fields and values*/
		$sth = $this->db->prepare("INSERT INTO tablename(fieldname1,fieldname2,fieldname3)          VALUES(:fieldname1_value,:fieldname2_value,:fieldname3_value)");

		/* supplying inputtext value */
        $sth->execute(
            array(
                ':fieldname1_value' => $_POST['input_text1'],
                ':fieldname2_value' => $_POST['input_text2'],
				':fieldname3_value' => $_POST['input_text3']
            )
        );

		$lastId = $this->db->lastInsertId(); /*get last inserted ID */
		
		/*remove below  if you don't want to return value in json format */
        echo json_encode(
            array(
				'status' => 'success',
                'message' => 'Inserted successfully.',
				'id' => $lastId,
            )
        );
	}
	
	/** READ [VIEW RECORD IN DATABASE] **/
    public function listRecord( $tbl, $id, $value ) {
		
		$query = "SELECT * FROM $tbl";
		$where = "";
		if(!empty($id)) {
			$where = " where $id = '".$value."'";
		}
		
        $sth = $this->db->prepare($query.$where);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $records = $sth->fetchAll();
        
        return $records;
		/*remove below  if you don't want to return value in json format */
		echo json_encode( $records );
    }
	
	/** UPDATE [UPDATE RECORD IN DATABASE] **/
	public function updateRecord($field_value1,$field_value2,$field_value3) {
			
			$sth = $this->db->prepare("UPDATE tablename SET field2 = :field_value2, field3 = :field_value3 WHERE field1 = :field_value1 ");
			
			$sth->execute(
				array(
					':field_value1' => $field_value1,
					':field_value2' => $field_value2,               
					':field_value3' => $field_value3
				)
			);
			
		
		/*remove below  if you don't want to return value in json format */
        echo json_encode(
            array(
				'status' => 'success',
                'message' => 'Updated successfully.'
            )
        );
	}
	/** DELETE [DELETE RECORD IN DATABASE] **/
	public function deleteRecord($tablename,$fieldname,$value) {
        $ID = $_POST['id'];
        $sth = $this->db->prepare("DELETE FROM $tablename WHERE $fieldname = $value");
       
        $sth->execute();
		
        /*remove below  if you don't want to return value in json format */
        echo json_encode(
                array(
                    'message' => 'Successfully Deleted.'
                )
        );
    }
}