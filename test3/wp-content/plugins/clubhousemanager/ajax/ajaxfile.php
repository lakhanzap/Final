<?php

global  $wpdb,
        $responses;

include "../../../../wp-config.php";

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Couldn't connect!");
mysql_select_db(DB_NAME) or die("Couldn't find database");

$filteraction = trim($_POST['action']);

if($filteraction == 'filterRoster')
{
   
  $season = $_POST['season'];
  $team = $_POST['team'];

  
  global $wpdb;
  $players = array();

  $query = "SELECT playerID, firstname, middlename, lastname FROM wp_clubhouseManager_players WHERE season = '" . $season . "' AND teamName = '" . $team . "' ORDER BY lastname,firstname,middlename asc";
  $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
  if ($result)
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }
    
    echo '<ul class="players-list">';
    
      
    if(count($players)>0)
    {
      for ( $i=0; $i < count($players); $i++ )
      {
        $player_id   = $players[$i]['playerID'];
        $lastname   = $players[$i]['lastname'];
        $firstname  = $players[$i]['firstname'];
           $jerseynum  = $players[$i]['jerseynum'];
        $middlename = $players[$i]['middlename'];

        echo '
                           <li class="players-list-entry">
                             <label for="club_player_' . $i . '" class="player-list-entry-label">' . $lastname . ', ' . $firstname . ' ' . $middlename . ' ' . $jerseynum . '</label> 
                             -- ' . $team . '&nbsp;
                             <div class="div-wait" id="divwaitcpl' . $i . '"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                       
                <input type="submit" class="button-primary" value="Removal" id="club_delete_player_' . $player_id . '_btn_id" name="club_delete_player_' . $player_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                           </li>';
      }

            echo '</ul>';
    }
    else
    {

      echo '<li class="players-list-entry"><label>No Players in this Roster</label></li>
       </ul>';
    }
  }
  
}

?>
