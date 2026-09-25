<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     //creating array -numbericallt

//     //first way to create arry
//     $number=array();
//     //second create array to initional
//     $number[0]="Ca23 is the best class";
// $number[1]= "123";
// echo $number [0]."<br>";
// echo $number [1]."<br>";

// // //display thr array  value using var dump()function
// // var_dump($number);

// //display all the value using pre tag
// echo "<pre>";
// var_dump($number);
// echo "<pre>";
// print_r($number);
// echo "</Pre>";

// //for  loop to display the array value
// for($i=0;$i<count($number);$i++){
//     echo $number[$i]."<br>";
// }
//exmaple of associative array to store information about a person
$info =array(
"id"=>"123",
"name"=>"Juu abdi",
"age"=>"23",
"address"=>"somali",
"status"=>"single",
"weight"=>"60kg",
"height"=>"5.6ft",
);
//displaying the information stored in the associative array

echo"<pre>";
echo"information about the person:<br>";
print_r($info);
var_dump($info);
echo "</pre>";
    
    
    ?>
</body>
</html>