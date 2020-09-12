 <?php 
print_r($_POST);
'<pre>';
   
$startnumber=$_POST["starting_number"];
$endnumber=$_POST["ending_number"]; 
 $check=$_POST["check"];
$result='';

    
        if($check=="odd"){
            for($i=$startnumber;$i<=$endnumber;$i++){
                if($i % 2 != 0){
                    $result.= $i." ";
                }
        }
      
    }else if($check=="even"){
        for($i=$startnumber;$i<=$endnumber;$i++){
            if($i%2 == 0){
                $result.=$i." ";
            }
    }
  
}


//  if($startnumber<$endnumber){
//     for($i=$startnumber;$i<=$endnumber;$i++){
//         $result.= $i." ";
      
//     }
    
//  }else if($startnumber>$endnumber){

//     for($i=$startnumber;$i>$endnumber;$i--){
//         $result.= $i." ";
      
//     }
    
//  }




?>



<form action="" method="POST">
<table>
<tr>
    <td>starting number</td>
    <td><input type="text" name="starting_number"></td>
</tr>
<tr>
    <td>ending number</td>
    <td><input type="text" name="ending_number"></td>
</tr>
<tr>
    <td></td>
    <td>
    <input type="radio" name="check" value="odd" required>odd
    <input type="radio" name="check" value="even" required>even
    </td>
</tr>
<tr>
    <td>result</td>
    <td><textarea value="" id="" cols="20" rows="10"><?php echo $result;?></textarea></td>
</tr>
<tr>
    <td>starting number</td>
    <td><input type="submit" name="btn" value="submit"></td>
</tr>
</table>
</form>