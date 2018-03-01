<table cellpadding="5" border="1">
<?
for ($r = 1; $r <= 10; $r++) {
echo "<tr>";
for ($c = 1; $c <= 10; $c++) {
echo "<td>";
echo ($r * $c);
echo "</td>";

}
echo "</tr>";
}
?>
</table>