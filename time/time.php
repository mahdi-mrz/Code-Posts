<?php
function agotime($atime){
$etime=time()-$atime;
if($etime<1){
echo "just now!";
}
$array=array(
60*60*24*30*12=>"year",
60*60*24*30=>"month",
60*60*24=>"day",
60*60=>"hour",
60=>"mimute",
1=>"secound",
);
foreach($array as $key => $value){
$btime=$etime/$key;
if($btime>=1){
return round($btime) .' ' .$value .' ago';
}
}
}
if(isset($_GET['date'])){
echo agotime(strtotime($_GET['date']));
}else{
echo "please enter date!";
}
