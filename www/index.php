<div>
	</div>
		<div>
<?php
    
    echo "hello word, again!";
    echo "and wil be blood!";
    
	/*echo phpinfo()*/    ?>
<br>
    <?php

echo "and fu*ck you all!"    ?>
    <br>
<?php
  $dblocation = "127.0.0.1";
  $dbname = "test";
  $dbuser = "root";
  $dbpasswd = "root";

  $dbcnx = @mysql_connect($dblocation, $dbuser, $dbpasswd);
  if (!$dbcnx)
  {
    echo "<p>К сожалению, не доступен сервер mySQL</p>";
    exit();
  }
  if (!@mysql_select_db($dbname,$dbcnx) )
  {
    echo "<p>К сожалению, не доступна база данных</p>";
    exit();
  }
  $ver = mysql_query("SELECT VERSION()");
  if(!$ver)
  {
    echo "<p>Ошибка в запросе</p>";
    exit();
  }
  echo mysql_result($ver, 0); ?>
  <br>
  <?php
  echo "Коннект к базе $dbname установлен" ;
      mysql_free_result($ver);
?> 
    <br>
    <?php
    echo $result = mysql_query("SELECT * FROM test.users");
       mysql_free_result($result);
       echo $_POST;
    
   
    ?>
    	</div>
    <div>
    статичная часть страницы
    </div>
    
    
    
    
    