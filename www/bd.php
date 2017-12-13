<?php
    $mysqli = new mysqli('mysql', 'bd_user', 'bd_pwd', 'bd_test');
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : " . $mysqli->connect_error;
    }
	
	if( isset($_GET['create']) ) {
		$result = $mysqli->query("CREATE TABLE `bd_test`.`first_table` ( `id` INT NOT NULL AUTO_INCREMENT , `label` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
		print("Table créée avec succès.");
	}
	else {
		if ($result = $mysqli->query("SELECT * from first_table")) {
			printf("Select a retourné %d lignes.\n", $result->num_rows);

			/* Libération du jeu de résultats */
			$result->close();
		}
		else {
			print 'problème :'.$mysqli->error ;
		}
	}
