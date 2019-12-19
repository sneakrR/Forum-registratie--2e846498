<h1> Forum registratie </h1>

<?php

echo "Jouw username is: ";
echo htmlspecialchars($_POST['Username']) . "<br>";

echo "Jouw email is: ";
echo htmlspecialchars($_POST['Email']) . "<br>";

echo "Jouw leeftijd is: ";
echo (int)$_POST['Age'] . "<br>";