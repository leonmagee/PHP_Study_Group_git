<?php 
echo "php is working!"; 

if (isset($_GE['name']) && isset($_GET['lastname']))) {
   echo "Hello {$_GET['name']} {$_GET['lastname]}!";
} else {
   echo "Hello Random person!";
}

