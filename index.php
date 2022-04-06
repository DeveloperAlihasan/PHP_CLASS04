                             <!-- Assignment-01 -->
<html>
<h2>assignment-01</h2>
<?php
$month = cal_days_in_month(CAL_GREGORIAN, 4, 2022);
$date = 1;

for ($i=$date; $i <=$month; $i++) { 
    echo $i. "<br>";
 }
 
?>
<h2><?php echo "There was $month days in April 2022.";?></h2>

<br>

                             <!-- Assignment-02 -->            
<h2>Assignment-02[1-100 odd namber] </h2>
<?php
$start_num =1;
$last_num =100;
for ($i=$start_num;$i<=$last_num; $i++){
    if($i%2!=0) {
        echo $i."<br>";
    }
}

?>

                             <!-- Assignment-03 --> 
 <br>
<h2>Assignment-03 calculate the factorial 7!</h2>

<?php
$number = 7;
$factorial = 1;
for ($i=$number; $i>=1;$i--){
    $factorial = $factorial*$i;
        echo $factorial."<br>";
    

}


?>
<br>

                             <!-- Assignment-04 --> 

<h2>Assignment-04 [Print out from 100 - 1 ]</h2>
<?php
$fast_num = 1;
$last_num = 100;
while ($last_num>=$fast_num) {
    echo $last_num."<br>";
    $last_num--;
}


?>
<br>

                             <!-- Assignment-05 --> 

<h2>Assignment-05</h2>
<?php
$fruits = array ("apple", "orange", "banana", "mango");

foreach ($fruits as $items) {
    echo "$items <br>";
  }
?>

</html>