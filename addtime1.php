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
echo "F?r den Film <b>$filmname</b> eine Vorstellung nachtr?glich eintragen:";
?>
<br>
<form action=addtime.php method=post>
<input type=hidden name=filmname value="<? echo($filmname)?>">
Datum: <input type=text name=datum> (bitte 01.01.2001, 22.45)<br>
zu vergebene online-Pl?tze: <input type=text name=plaetze value=10><br>
<input type=submit value="Vorstellung eintragen">
</form>

<p><a href=index_admin.php>zur?ck zum Admin-Bereich</a>
