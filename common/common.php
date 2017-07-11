<?php
	function connect(){
                $tcp = getenv('SQLAZURECONNSTR_TCP');
                $id = getenv('SQLAZURECONNSTR_ID');
                $pw = getenv('SQLAZURECONNSTR_PASSWORD');
                $ct = getenv('SQLAZURECONNSTR_CATALOG');
                $conn = new PDO( "sqlsrv:server=$tcp;Database = $ct", $id, $pw);
                return $conn;
        }	

        function getData($conn,$id){
            $sql = "SELECT name, url, id, category FROM dbo.view_details where id ='" . $id ."'";
            foreach ($conn->query($sql) as $row) {
                print("<p><a href='" . $row['url'] . "' target='_blank'>" . $row['name'] . " &raquo;</a></p>");
            }
        }
?>

