<?php
function numnews($path)
{
    chdir($path);
    $numfiles = count($_FILES);
    return $numfiles;
    $newName = basename($_FILES['site']['name']);
}
?>