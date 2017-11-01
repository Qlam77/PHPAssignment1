<?php
$db = mysqli_connect("localhost:3306", "root", "1234")
or die(mysqli_connect_error());

mysqli_select_db($db, 'bcit') or
die(mysqli_error($db));

mysqli_query($db, "
	CREATE TABLE IF NOT EXISTS prefList(
		word VARCHAR(50) NOT NULL
	)
")or die(mysqli_error($db));



$contents = file_get_contents("Prefix.txt");
$wordArray = explode("\n", $contents);
$number = count($wordArray);
for ($i = 0; $i < $number; $i++) {
        mysqli_query($db, "
        INSERT INTO prefList(word) VALUES (
          '$wordArray[$i]'
        )
    ") or die(mysqli_error($db));
}

?>
