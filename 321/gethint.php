<?php
// Array with names
$a[] = "NPUST(國立屏東科技大學_大學部_資訊管理系)";
$a[] = "NTCUST(國立臺中科技大學_大學部_資訊工程系)";
$a[] = "NTTU(國立臺東大學_大學部_資訊工程學系)";
$a[] = "Shu-Te University(樹德科技大學_大學部_資訊工程系)";
$a[] = "TSCVS(國立臺東高級商業職業學校_綜合高中部_資訊應用學程)";
// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>