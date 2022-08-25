<?PHP
$dataset = file("major.txt");

print "<hr>";
foreach ($dataset as $data){
    print " ".$data."<br>";
}
print "<hr>";

foreach($dataset as $data)
{
$str = explode(" ", $data);     # explode:문자열 분할하여 배열로 저장 (경계문자열, 나눌문자열, 제한갯수)
print "Nmae : ".$str[0].", Major : ".$str[1]."<br>";
}
?>