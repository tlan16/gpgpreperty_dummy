:: Remove Existing databases
C:\wamp\bin\mysql\mysql5.6.17\bin\mysql.exe -u root -proot -e "DROP DATABASE IF EXISTS gpgproperty"

:: Create new databases
C:\wamp\bin\mysql\mysql5.6.17\bin\mysql.exe -u root -proot -e "CREATE DATABASE `gpgproperty` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci"

:: Import sql file
::C:\wamp\bin\mysql\mysql5.6.17\bin\mysql.exe -u root -proot gpgproperty < .\gpgproperty.sql
Pause