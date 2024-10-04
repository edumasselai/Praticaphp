<?php

try {
    $dbconn = pg_connect("host=localhost
                            port=5432
                            dbname=aulaphp
                            user=postgres
                            password=postgres");
    if($dbconn){
        echo "database conectando...";
        $result = pg_query($dbconn, "select * from tbpessoa");
        while($row = pg_fetch_assoc($result)){
            echo print_r ($row);
        }
    }
}catch (exception $e){
    echo $e->getMessage();

}
?>