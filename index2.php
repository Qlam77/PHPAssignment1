<?php
$contents = file_get_contents("WordList.txt");
$wordArray = explode("\n", $contents);
$number = count($wordArray);

$rand1 = rand(0, count($wordArray));
$rand2 = rand(0, count($wordArray));
$conjunction;
if (isset($_GET['conjunction'])) {
    $conjunction = $_GET['conjunction'];
} else {
    $conjunction = "of";
}


echo "<h1>" . $wordArray[$rand1] . " " . $conjunction . " " . $wordArray[$rand2] . "</h1>";
echo "
<button onClick=''>Refresh!</button>
<form action='index2.php' method='GET'>
    Conjunction: 
    <Select name='conjunction'>
        <option value='of'>of</option>
        <option value='and'>and</option>
        <option value='because'>because</option>
        <option value=', so'>, so</option>
    </Select>
    <input type='submit'/>
</form>
"
?>
<script>
    clickable
</script>