<?php
    function connect(){
        $tcp = getenv('SQLAZURECONNSTR_TCP');
        $uid = getenv('SQLAZURECONNSTR_ID');
        $pwd = getenv('SQLAZURECONNSTR_PASSWORD');
        $clg = getenv('SQLAZURECONNSTR_CATALOG');
        $conn = new PDO( "sqlsrv:server=$tcp;Database = $clg", $uid, $pwd);
        return $conn;
    }

    function getData($conn,$uid){
        $sql = "SELECT name, url, id, category FROM dbo.view_details where id ='" . $uid ."'";
        foreach ($conn->query($sql) as $row) {
            print("<p><a href='" . $row['url'] . "' target='_blank'>" . $row['name'] . " &raquo;</a></p>");
        }
    }
?>

