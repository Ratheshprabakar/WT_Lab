<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "username") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
if ($formfield == "password") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}
?>