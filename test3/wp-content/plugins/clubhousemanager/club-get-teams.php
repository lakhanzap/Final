<?php
require( '/opt/lampp/htdocs/baseball/wp-load.php' );
global $wpdb;

//require_once('/wp-includes/wp-db.php');
//require_once('/wp-config.php');

$season = $_GET['season'];
$noload = $_GET['load'];

header("Content-type: text/json");

$teams = array();
  if (isset($season)){
  $query = 'SELECT teamname FROM ' . $wpdb->prefix . 'clubhouseManager_teams WHERE season="'.$season.'" ORDER BY teamname asc';
  }else{
  $query = 'SELECT distinct(teamname) FROM ' . $wpdb->prefix . 'clubhouseManager_teams ORDER BY teamname asc';
  }

  $result = mysql_query($query);
  
  //echo '<pre>'; print_r($result);
  
  if ($result)
    while ( $obj = mysql_fetch_object($result) )
    {
      $teams[] = $obj->teamname;
    }

  echo json_encode($teams);

?>
