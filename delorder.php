<?
// ----------------------------------------------------------------------
// CinRes - Cinema Reservatin
// Copyright (C) 2003 by Georg Knoerr
// georg-knoerr@gmx.de
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html

include ("includes/header.php");
include ("includes/mysql.kino.php");

$bool = "DELETE FROM bestellungen WHERE id = '$nr'";
$ergebnis = mysql_query($bool);

if ($error == 0) {echo "Die Abholnr $nr ist gel?scht!";}

echo "<hr><p><a href=searchnr.php>weitere Abholnr. abarbeiten</a><p>" ;
echo "<p><a href=index_admin.php>zur?ck zum Admin-Bereich</a>";

?>
