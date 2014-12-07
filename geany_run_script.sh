#!/bin/sh

rm $0

<<<<<<< HEAD
./torrent_style
=======
php "cards.php"
>>>>>>> ff9d07e643552208ad58a5c7badb7895587acb44

echo "

------------------
(program exited with code: $?)" 		


echo "Press return to continue"
#to be more compatible with shells like dash
dummy_var=""
read dummy_var
