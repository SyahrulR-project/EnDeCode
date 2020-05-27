<?php
//coded by Syahrul R.
system("clear");
echo "----------------------------\n";
echo "|- Tools name : EnDeCode   |\n";
echo "|- Author     : Syahrul R. |\n";
echo "|- version    : 1.0        |\n";
echo "----------------------------\n";
echo "Support by : https://bocah-programmer.xyz\n";
echo "\n\nMenu :\n";
echo "1. Encode Base64\n";
echo "2. Decode Base64\n";
echo "Input Your Choice : ";
$pilih = trim(fgets(STDIN));

if ($pilih == 1)
{
echo "Input your words to encode : ";
$en = trim(fgets(STDIN));
echo "-----------------------\n";
echo "Result : ".base64_encode($en)."\n";
echo "-----------------------\n";
}
else if ($pilih == 2)
{
echo "Input your encode to decode : ";
$en = trim(fgets(STDIN));
echo "-----------------------\n";
echo "Result : ".base64_decode($en)."\n";
echo "-----------------------\n";
}
else {
  echo "Your Input Invalid..!!";
  }
?>
