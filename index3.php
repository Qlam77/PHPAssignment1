<?php
$db = mysqli_connect("localhost:3306", "root", "1234")
or die(mysqli_connect_error());

mysqli_select_db($db, 'bcit') or
die(mysqli_error($db));

mysqli_query($db, "
	CREATE TABLE IF NOT EXISTS list(
		word VARCHAR(50) NOT NULL
	)
")or die(mysqli_error($db));



$contents = file_get_contents("WordList.txt");
$wordArray = explode("\n", $contents);
$number = count($wordArray);
for ($i = 0; $i < $number; $i++) {
        mysqli_query($db, "
        INSERT INTO list(word) VALUES (
          '$wordArray[$i]'
        )
    ") or die(mysqli_error($db));
}

$view = mysqli_query($db, "
	SELECT * FROM list
");

$rand1 = rand();
$rand2 = rand();

while($record = mysqli_fetch_assoc($view)) {
    echo $record['word'];
}



?>
