<html>
<head>
<title>Color Table Example</title>
<style>
td { height:10px; width:10px; font-size:50% }
</style>
</head>

<body>

<h2>Color Table Example</h2>

<table cellspacing="0">
<?php
for($y=0; $y<=240; $y+=8)
{
    print "<tr> ";
    $r = sprintf("%02X", $y);
    for($x=0; $x<=240; $x+=8)
    {
        $g = sprintf("%02X", $x);
        print "<td bgcolor=\"#{$r}{$g}00\"> </td>";
    }
    print "</tr>\n";
}
?>
</table>
</body>

</html>
