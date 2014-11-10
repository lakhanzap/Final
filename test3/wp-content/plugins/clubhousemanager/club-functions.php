<?php

global  $wpdb,
        $responses;

function  club_save_plugin_options()
{
  global $wpdb;

  $team_leaders = $_POST['club_plugin_option_team_leaders'];
  $erainnings = $_POST['club_plugin_option_era_innings'];
  $bg_color     = $_POST['club_plugin_option_bg_color'];
  $hover_color     = $_POST['club_plugin_option_hover_color'];
  $txt_color    = $_POST['club_plugin_option_txt_color'];
  $header_bg_color    = $_POST['club_plugin_option_header_bg_color'];
  $header_txt_color    = $_POST['club_plugin_option_header_txt_color'];
  $wdg_playerstats_playerid  = $_POST['club_plugin_option_wdg_playerstats_players_select'];
  $wdg_game_results_playerid = $_POST['club_plugin_option_wdg_game_results_players_select'];
  $wdg_game_results_gameid   = $_POST['club_plugin_option_wdg_game_results_games_select'];
  $game_results_page   = $_POST['club_plugin_option_game_results_page'];
  $player_stats_page   = $_POST['club_plugin_option_player_stats_page'];
  $locations_page   = $_POST['club_plugin_option_locations_page'];
  if (isset($_POST['club_plugin_option_roster_img']))
    $roster_img = 'true';
  else
    $roster_img = 'false';
   if (isset($_POST['club_plugin_option_roster_num']))
    $roster_num = 'true';
  else
    $roster_num = 'false';
  if (isset($_POST['club_plugin_option_roster_name']))
    $roster_name = 'true';
  else
    $roster_name = 'false';
  if (isset($_POST['club_plugin_option_roster_pos']))
    $roster_pos = 'true';
  else
    $roster_pos = 'false';
  if (isset($_POST['club_plugin_option_roster_bats']))
    $roster_bats = 'true';
  else
    $roster_bats = 'false';
  if (isset($_POST['club_plugin_option_roster_throws']))
    $roster_throws = 'true';
  else
    $roster_throws = 'false';
  if (isset($_POST['club_plugin_option_roster_home']))
    $roster_home = 'true';
  else
    $roster_home = 'false';
  if (isset($_POST['club_plugin_option_roster_school']))
    $roster_school = 'true';
  else
    $roster_school = 'false';
  if (isset($_POST['club_plugin_option_batting_num']))
    $batting_num = 'true';
  else
    $batting_num = 'false';
  if (isset($_POST['club_plugin_option_batting_name']))
    $batting_name = 'true';
  else
    $batting_name = 'false';
  if (isset($_POST['club_plugin_option_batting_ab']))
    $batting_ab = 'true';
  else
    $batting_ab = 'false';
  if (isset($_POST['club_plugin_option_batting_r']))
    $batting_r = 'true';
  else
    $batting_r = 'false';
  if (isset($_POST['club_plugin_option_batting_h']))
    $batting_h = 'true';
  else
    $batting_h = 'false';
  if (isset($_POST['club_plugin_option_batting_2b']))
    $batting_2b = 'true';
  else
    $batting_2b = 'false';
  if (isset($_POST['club_plugin_option_batting_3b']))
    $batting_3b = 'true';
  else
    $batting_3b = 'false';
  if (isset($_POST['club_plugin_option_batting_hr']))
    $batting_hr = 'true';
  else
    $batting_hr = 'false';
  if (isset($_POST['club_plugin_option_batting_re']))
    $batting_re = 'true';
  else
    $batting_re = 'false';
  if (isset($_POST['club_plugin_option_batting_fc']))
    $batting_fc = 'true';
  else
    $batting_fc = 'false';
  if (isset($_POST['club_plugin_option_batting_sf']))
    $batting_sf = 'true';
  else
    $batting_sf = 'false';
  if (isset($_POST['club_plugin_option_batting_hp']))
    $batting_hp = 'true';
  else
    $batting_hp = 'false';
  if (isset($_POST['club_plugin_option_batting_rbi']))
    $batting_rbi = 'true';
  else
    $batting_rbi = 'false';
  if (isset($_POST['club_plugin_option_batting_ba']))
    $batting_ba = 'true';
  else
    $batting_ba = 'false';
  if (isset($_POST['club_plugin_option_batting_obp']))
    $batting_obp = 'true';
  else
    $batting_obp = 'false';
  if (isset($_POST['club_plugin_option_batting_slg']))
    $batting_slg = 'true';
  else
    $batting_slg = 'false';
  if (isset($_POST['club_plugin_option_batting_ops']))
    $batting_ops = 'true';
  else
    $batting_ops = 'false';
  if (isset($_POST['club_plugin_option_batting_bb']))
    $batting_bb = 'true';
  else
    $batting_bb = 'false';
  if (isset($_POST['club_plugin_option_batting_k']))
    $batting_k = 'true';
  else
    $batting_k = 'false';
  if (isset($_POST['club_plugin_option_batting_lob']))
    $batting_lob = 'true';
  else
    $batting_lob = 'false';
  if (isset($_POST['club_plugin_option_batting_sb']))
    $batting_sb = 'true';
  else
    $batting_sb = 'false';
  if (isset($_POST['club_plugin_option_pitching_num']))
    $pitching_num = 'true';
  else
    $pitching_num = 'false';
  if (isset($_POST['club_plugin_option_pitching_name']))
    $pitching_name = 'true';
  else
    $pitching_name = 'false';
  if (isset($_POST['club_plugin_option_pitching_w']))
    $pitching_w = 'true';
  else
    $pitching_w = 'false';
  if (isset($_POST['club_plugin_option_pitching_l']))
    $pitching_l = 'true';
  else
    $pitching_l = 'false';
  if (isset($_POST['club_plugin_option_pitching_s']))
    $pitching_s = 'true';
  else
    $pitching_s = 'false';
  if (isset($_POST['club_plugin_option_pitching_ip']))
    $pitching_ip = 'true';
  else
    $pitching_ip = 'false';
  if (isset($_POST['club_plugin_option_pitching_h']))
    $pitching_h = 'true';
  else
    $pitching_h = 'false';
  if (isset($_POST['club_plugin_option_pitching_r']))
    $pitching_r = 'true';
  else
    $pitching_r = 'false';
  if (isset($_POST['club_plugin_option_pitching_er']))
    $pitching_er = 'true';
  else
    $pitching_er = 'false';
  if (isset($_POST['club_plugin_option_pitching_bb']))
    $pitching_bb = 'true';
  else
    $pitching_bb = 'false';
  if (isset($_POST['club_plugin_option_pitching_k']))
    $pitching_k = 'true';
  else
    $pitching_k = 'false';
  if (isset($_POST['club_plugin_option_pitching_era']))
    $pitching_era = 'true';
  else
    $pitching_era = 'false';
  if (isset($_POST['club_plugin_option_pitching_whip']))
    $pitching_whip = 'true';
  else
    $pitching_whip = 'false';
  
  if (isset($_POST['club_plugin_option_fielding_num']))
    $fielding_num = 'true';
  else
    $fielding_num = 'false';
  
  if (isset($_POST['club_plugin_option_fielding_name']))
    $fielding_name = 'true';
  else
    $fielding_name = 'false';

     if (isset($_POST['club_plugin_option_fielding_g']))
    $fielding_g = 'true';
  else
    $fielding_g = 'false';
    if (isset($_POST['club_plugin_option_fielding_st']))
    $fielding_st = 'true';
  else
    $fielding_st = 'false';
    if (isset($_POST['club_plugin_option_fielding_ip']))
    $fielding_ip = 'true';
  else
    $fielding_ip = 'false';
    if (isset($_POST['club_plugin_option_fielding_op']))
    $fielding_op = 'true';
  else
    $fielding_op = 'false';
    if (isset($_POST['club_plugin_option_fielding_po']))
    $fielding_po = 'true';
  else
    $fielding_po = 'false';
      if (isset($_POST['club_plugin_option_fielding_a']))
    $fielding_a = 'true';
  else
    $fielding_a = 'false';
    if (isset($_POST['club_plugin_option_fielding_err']))
    $fielding_err = 'true';
  else
    $fielding_err = 'false';
    if (isset($_POST['club_plugin_option_fielding_dp']))
    $fielding_dp = 'true';
  else
    $fielding_dp = 'false';
  if (isset($_POST['club_plugin_option_fielding_fp']))
    $fielding_fp = 'true';
  else
    $fielding_fp = 'false';


  club_update_option('club_team_leaders', $team_leaders);
  club_update_option('club_era_innings', $erainnings);
  club_update_option('club_widget_bg_color', $bg_color);
  club_update_option('club_widget_hover_color', $hover_color);
  club_update_option('club_widget_txt_color', $txt_color);
  club_update_option('club_widget_header_txt_color', $header_txt_color);
  club_update_option('club_widget_header_bg_color', $header_bg_color);
  club_update_option('club_widget_playerstats_player_id', $wdg_playerstats_playerid);
  club_update_option('club_widget_game_results_player_id', $wdg_game_results_playerid);
  club_update_option('club_widget_game_results_game_id', $wdg_game_results_gameid);
  club_update_option('club_game_results_page', $game_results_page);
  club_update_option('club_player_stats_page', $player_stats_page);
  club_update_option('club_locations_page', $locations_page);
  club_update_option('club_roster_img', $roster_img);
    club_update_option('club_roster_num', $roster_num);
  club_update_option('club_roster_name', $roster_name);
  club_update_option('club_roster_pos', $roster_pos);
  club_update_option('club_roster_bats', $roster_bats);
  club_update_option('club_roster_throws', $roster_throws);
  club_update_option('club_roster_home', $roster_home);
  club_update_option('club_roster_school', $roster_school);
  club_update_option('club_batting_num', $batting_num);
  club_update_option('club_batting_name', $batting_name);
  club_update_option('club_batting_ab', $batting_ab);
  club_update_option('club_batting_r', $batting_r);
  club_update_option('club_batting_h', $batting_h);
  club_update_option('club_batting_2b', $batting_2b);
  club_update_option('club_batting_3b', $batting_3b);
  club_update_option('club_batting_hr', $batting_hr);
  club_update_option('club_batting_re', $batting_re);
  club_update_option('club_batting_fc', $batting_fc);
  club_update_option('club_batting_sf', $batting_sf);
  club_update_option('club_batting_hp', $batting_hp);
  club_update_option('club_batting_rbi', $batting_rbi);
  club_update_option('club_batting_ba', $batting_ba);
  club_update_option('club_batting_obp', $batting_obp);
  club_update_option('club_batting_slg', $batting_slg);
  club_update_option('club_batting_ops', $batting_ops);
  club_update_option('club_batting_bb', $batting_bb);
  club_update_option('club_batting_k', $batting_k);
  club_update_option('club_batting_lob', $batting_lob);
  club_update_option('club_batting_sb', $batting_sb);
  club_update_option('club_pitching_num', $pitching_num);
  club_update_option('club_pitching_name', $pitching_name);
  club_update_option('club_pitching_w', $pitching_w);
  club_update_option('club_pitching_l', $pitching_l);
  club_update_option('club_pitching_s', $pitching_s);
  club_update_option('club_pitching_ip', $pitching_ip);
  club_update_option('club_pitching_h', $pitching_h);
  club_update_option('club_pitching_r', $pitching_r);
  club_update_option('club_pitching_er', $pitching_er);
  club_update_option('club_pitching_bb', $pitching_bb);
  club_update_option('club_pitching_k', $pitching_k);
  club_update_option('club_pitching_era', $pitching_era);
  club_update_option('club_pitching_whip', $pitching_whip);
 club_update_option('club_fielding_num', $fielding_num);
club_update_option('club_fielding_name', $fielding_name);
club_update_option('club_fielding_g', $fielding_g);
club_update_option('club_fielding_st', $fielding_st);
club_update_option('club_fielding_ip', $fielding_ip);
club_update_option('club_fielding_op', $fielding_op);
club_update_option('club_fielding_po', $fielding_po);
club_update_option('club_fielding_a', $fielding_a);
club_update_option('club_fielding_err', $fielding_err);
club_update_option('club_fielding_dp', $fielding_dp);
club_update_option('club_fielding_fp', $fielding_fp);

  return;
}

function club_set_cookies() {
  global $attribute;

  $cookies = array('playerID','gameID','field');
        foreach($cookies as $cookie) {
	  $attribute = $_COOKIE[$cookie];

          if(isset($_GET[$cookie]) ) {
                setcookie($cookie, $_GET[$cookie], 0, COOKIEPATH, COOKIE_DOMAIN);
                $attribute = $_GET[$cookie];
                $_COOKIE[$cookie] = $attribute;
            }
        }
}

function  club_build_heading($SORTBY,$SORTORDER,$titLen,$titLink, $func,$echo = true)
{
  $club_content = NULL;
  $URI=$_SERVER['REQUEST_URI'];
  $URI=preg_replace('/\&sortby.*/','',$URI);
  foreach($titLen as $heading=>$length)
  {
    $club_content .= '<th >
         <form id="club_form" action="" method="post">';
    if($titLink[$heading]=="")
    {
      $club_content .= $heading;
    }
    elseif($SORTBY==$titLink[$heading] && $SORTORDER=="A")
    {
      $club_content .= '<input type="submit" name="club_widget_tb_head_btn" id="club_input_link" value="'. $heading .'" />';
      $club_content .= '<input type="hidden" name="club_widget_tb_head_'.$func.'_sortby" value="'. $titLink[$heading] .'" />';
      $club_content .= '<input type="hidden" name="club_widget_tb_head_'.$func.'_sortorder" value="D" />';
    }
    elseif($SORTBY==$titLink[$heading] && ($SORTORDER=="D" || SORTORDER==""))
    {
      $club_content .= '<input type="submit" name="club_widget_tb_head_btn" id="club_input_link" value="'. $heading .'" />';
      $club_content .= '<input type="hidden" name="club_widget_tb_head_'.$func.'_sortby" value="'. $titLink[$heading] .'" />';
      $club_content .= '<input type="hidden" name="club_widget_tb_head_'.$func.'_sortorder" value="A" />';
    }
    else
    {
      $club_content .= '<input type="submit" name="club_widget_tb_head_btn" id="club_input_link" value="'. $heading .'" />';
      $club_content .= '<input type="hidden" name="club_widget_tb_head_'.$func.'_sortby" value="'. $titLink[$heading] .'" />';
      $club_content .= '<input type="hidden" name="club_widget_tb_head_'.$func.'_sortorder" value="D" />';
    }
    $club_content .= '</form></th>';	
  }

  if ( $echo )
    echo $club_content;
  else
    return $club_content;
}

function  club_delete_game($game_id)
{
  global $wpdb;

  $query = "DELETE " . $wpdb->prefix . "clubhouseManager_schedule, " . $wpdb->prefix . "clubhouseManager_boxscores, " . $wpdb->prefix . "clubhouseManager_stats FROM " . $wpdb->prefix . "clubhouseManager_schedule LEFT OUTER JOIN (" . $wpdb->prefix . "clubhouseManager_boxscores, " . $wpdb->prefix . "clubhouseManager_stats) ON " . $wpdb->prefix . "clubhouseManager_schedule.gameID=" . $wpdb->prefix . "clubhouseManager_boxscores.gameID AND " . $wpdb->prefix . "clubhouseManager_schedule.gameID=" . $wpdb->prefix . "clubhouseManager_stats.gameID WHERE " . $wpdb->prefix . "clubhouseManager_schedule.gameID= $game_id ";
   $result = mysql_query($query);

  return;
}


function  club_delete_all_schedules($season)
{
  global $wpdb;

  $query = "DELETE " . $wpdb->prefix . "clubhouseManager_schedule, " . $wpdb->prefix . "clubhouseManager_boxscores, " . $wpdb->prefix . "clubhouseManager_stats FROM " . $wpdb->prefix . "clubhouseManager_schedule LEFT OUTER JOIN (" . $wpdb->prefix . "clubhouseManager_boxscores, " . $wpdb->prefix . "clubhouseManager_stats) ON " . $wpdb->prefix . "clubhouseManager_schedule.gameID=" . $wpdb->prefix . "clubhouseManager_boxscores.gameID AND " . $wpdb->prefix . "clubhouseManager_schedule.gameID=" . $wpdb->prefix . "clubhouseManager_stats.gameID WHERE " . $wpdb->prefix . "clubhouseManager_schedule.season='$season'";
  $result = mysql_query($query);
  return;
}


function  club_get_past_games($season)
{
  global $wpdb;

  $query = 'SELECT gameID, visitingTeam, homeTeam, gameDate, gameTime FROM ' . $wpdb->prefix . 'clubhouseManager_schedule WHERE season = "' . $season . '" AND gameDate <= "' . date("Y-m-d") . '" ORDER BY gameDate desc';
  
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $games[] = $row;
    }

  return $games;
}


function  club_get_game_results($game_id)
{
  global $wpdb;

  $query = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_boxscores WHERE gameID=$game_id";
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_row($result) )
    {
      $gresults[] = $row;
    }
  else
    return false;

  return $gresults;
}


function  club_get_players_from_team( $team, $season )
{
  global $wpdb;

  $query = 'SELECT pl.playerID, pl.firstname, pl.middlename, pl.lastname, pl.teamName
              FROM ' . $wpdb->prefix . 'clubhouseManager_players AS pl
             WHERE teamName = "' . $team . '" AND season = "' . $season . '" 
	     ORDER BY pl.lastname,pl.firstname ASC';
      
  $result = mysql_query($query);
  if ($result)
    if (mysql_num_rows($result))
      while ( $row = mysql_fetch_array($result) )
      {
        $players[] = $row;
      }
    else
      return false;
  else
    return false;

  return $players;
}

function  club_get_playerID_from_jersey( $jersey,$season,$team )
{
    global $wpdb;

  $query = 'SELECT playerID
              FROM ' . $wpdb->prefix . 'clubhouseManager_players 
             WHERE jerseyNum = "' . $jersey . '" AND teamName = "' . $team . '" AND season = "' . $season . '" ';
  $result = mysql_query ($query);
  $pIDs = mysql_fetch_array($result);
  $playerID = $pIDs[playerID];

  return $playerID;
}


function  club_get_season_from_gameid( $gameID )
{
    global $wpdb;

  $query = 'SELECT season
              FROM ' . $wpdb->prefix . 'clubhouseManager_schedule
             WHERE gameID = "' . $gameID . '"';
  $result = mysql_query ($query);
  $seasons = mysql_fetch_array($result);
  $season = $seasons[season];

  return $season;
}



function  club_get_game_results_all($game_id, $season)
{
  global $wpdb;

  $query = "SELECT pl.playerID, pl.firstname, pl.middlename, pl.lastname, pl.teamName, 
                   st.battOrd,
                   st.pitchOrd,
                   st.baAB,
                   st.ba1b,
                   st.ba2b,
                   st.ba3b,
                   st.baHR,
                   st.baRBI,
                   st.baBB,
                   st.baK,
                   st.baSB,
                   st.piWin,
                   st.piLose,
                   st.piSave,
                   st.piIP,
                   st.piHits,
                   st.piRuns,
                   st.piER,
                   st.piWalks,
                   st.piSO,
                   st.baRuns,
                   st.baRE,
                   st.baFC,
                   st.baHP,
                   st.baLOB,
                   st.fiPO,
                   st.fiA,
                   st.fiE,
		   st.baSF
            FROM 
           " . $wpdb->prefix . "clubhouseManager_players AS pl, 
           " . $wpdb->prefix . "clubhouseManager_stats AS st
           WHERE st.gameID=$game_id AND pl.playerID = st.playerID AND 
                 pl.season='$season' ORDER BY pl.lastname";
                 //echo $query;die;
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $gresults[] = $row;
    }
  return $gresults;
}


function  club_get_game_player_results($game_id, $playerID)
{
  global $wpdb;

  $query = "SELECT playerID
            FROM " . $wpdb->prefix . "clubhouseManager_stats
            WHERE gameID=$game_id AND playerID=$playerID";
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $gresults[] = $row;
    }
  return $gresults;
}


function  club_update_game_results()
{
//echo "<pre>";print_r($_POST);die;
  global $wpdb;

  $game_id = club_get_option('club_game_edit_id');
  $season  = club_get_option('club_results_season');
  $def      = club_get_defaults();
  $hometeam = $def['defaultTeam'];


if (isset($_POST['club_include_post']))
  $postID = $_POST['club_wordpress_posts'];
else
  $postID = 'NULL';
  $error_flag = NULL;

  //  check if entry exists
  $query = 'SELECT * FROM ' . $wpdb->prefix . 'clubhouseManager_boxscores WHERE gameID = ' . $game_id . ' ';
  
  $result = mysql_query($query);
  if (mysql_num_rows($result))
    $new_entry = false;
  else
    $new_entry = true;

  if ($new_entry)
  {
    //  insert game results
    $query = 'INSERT INTO ' . $wpdb->prefix . 'clubhouseManager_boxscores SET ';
    for ( $i = 1; $i < 10; $i++ )
    {
      $query .= ' v' . $i . ' = ' . (int)$_POST['v' . $i] . ', ';
      $query .= ' h' . $i . ' = ' . (int)$_POST['h' . $i] . ', ';
    }

    $query .= '  vhits = ' . (int)$_POST['vhits'] . ', ' .
           '  vruns = ' . (int)$_POST['vruns'] . ', ' .
           '  verr  = ' . (int)$_POST['verr'] . ', ' .
           '  hhits = ' . (int)$_POST['hhits'] . ', ' .
           '  hruns = ' . (int)$_POST['hruns'] . ', ' .
           '  herr  = ' . (int)$_POST['herr'] . ', ' .
           '  postID  = ' . $postID . ', ' .
	   '  status  = "' . $_POST['club_game_status'] . '", ' .
           '  gameID = ' . $game_id . ' ';
    $result = mysql_query($query);
    if (mysql_error())
      $error_flag = 1;
  }
  else
  {
    //  update game results
    $query = 'UPDATE ' . $wpdb->prefix . 'clubhouseManager_boxscores SET ';

    for ( $i = 1; $i < 10; $i++ )
    {
      $query .= ' v' . $i . ' = ' . (int)$_POST['v' . $i] . ', ';
      $query .= ' h' . $i . ' = ' . (int)$_POST['h' . $i] . ', ';
    }

    $query .= '  vhits = ' . (int)$_POST['vhits'] . ', ' .
           '  vruns = ' . (int)$_POST['vruns'] . ', ' .
           '  verr  = ' . (int)$_POST['verr'] . ', ' .
           '  hhits = ' . (int)$_POST['hhits'] . ', ' .
           '  hruns = ' . (int)$_POST['hruns'] . ', ' .
           '  herr  = ' . (int)$_POST['herr'] . ', ' .
           '  status  = "' . $_POST['club_game_status'] . '", ' .
           '  postID = ' . $postID . 
           '  WHERE gameID = ' . $game_id . ' ';
    $result = mysql_query($query);
    if (mysql_error())
      $error_flag = 1;
  }

  //  get players with id's
  $players = club_get_players( $season );
  //  check if entries exists
  $presults    = club_get_game_results_all($game_id, $season);
  if (!$presults)
    $new_entry = true;
  else
    $new_entry = false;

  //  update/insert player game results
  foreach ( $players as $player )
  {
    $player_id = $player['playerID'];

    if ( !isset($_POST[$player_id . '_chkbxDNP']) )
    {
      
      if (isset($_POST[$player_id . '_piWin']))
        $piWin = 1;
      else
        $piWin = 0;
      if (isset($_POST[$player_id . '_piLose']))
        $piLose = 1;
      else
        $piLose = 0;
      if (isset($_POST[$player_id . '_piSave']))
        $piSave = 1;
      else
        $piSave = 0;

      if ($new_entry)
      {
        $query = 'INSERT INTO ' . $wpdb->prefix . 'clubhouseManager_stats SET ' .
               '   battOrd  = ' . (int)$_POST[$player_id . '_battOrd'] . ',
                   pitchOrd = ' . (int)$_POST[$player_id . '_pitchOrd'] . ',
                   baAB     = ' . (int)$_POST[$player_id . '_baAB'] . ',
                   ba1b     = ' . (int)$_POST[$player_id . '_ba1b'] . ',
                   ba2b     = ' . (int)$_POST[$player_id . '_ba2b'] . ',
                   ba3b     = ' . (int)$_POST[$player_id . '_ba3b'] . ',
                   baHR     = ' . (int)$_POST[$player_id . '_baHR'] . ',
                   baRBI    = ' . (int)$_POST[$player_id . '_baRBI'] . ',
                   baBB     = ' . (int)$_POST[$player_id . '_baBB'] . ',
                   baK      = ' . (int)$_POST[$player_id . '_baK'] . ',
                   baSB     = ' . (int)$_POST[$player_id . '_baSB'] . ',
                   piWin    = ' . $piWin . ',
                   piLose   = ' . $piLose . ',
                   piSave   = ' . $piSave . ',
                   piIP     = ' . (float)$_POST[$player_id . '_piIP'] . ',
                   piHits   = ' . (int)$_POST[$player_id . '_piHits'] . ',
                   piRuns   = ' . (int)$_POST[$player_id . '_piRuns'] . ',
                   piER     = ' . (int)$_POST[$player_id . '_piER'] . ',
                   piWalks  = ' . (int)$_POST[$player_id . '_piWalks'] . ',
                   piSO     = ' . (int)$_POST[$player_id . '_piSO'] . ',
                   baRuns   = ' . (int)$_POST[$player_id . '_baRuns'] . ',
                   baRE     = ' . (int)$_POST[$player_id . '_baRE'] . ',
                   baFC     = ' . (int)$_POST[$player_id . '_baFC'] . ',
                   baHP     = ' . (int)$_POST[$player_id . '_baHP'] . ',
                   baLOB    = ' . (int)$_POST[$player_id . '_baLOB'] . ',
                   fiPO     = ' . (int)$_POST[$player_id . '_fiPO'] . ',
                   fiA      = ' . (int)$_POST[$player_id . '_fiA'] . ',
                   fiE      = ' . (int)$_POST[$player_id . '_fiE'] . ',
		   baSF     = ' . (int)$_POST[$player_id . '_baSF'] . ',
                   gameID   = ' . $game_id . ',
                   playerID = ' . $player_id . ' ';
       }
       else
       {
        $query = 'UPDATE ' . $wpdb->prefix . 'clubhouseManager_stats SET ' .
               '   battOrd  = ' . (int)$_POST[$player_id . '_battOrd'] . ',
                   pitchOrd = ' . (int)$_POST[$player_id . '_pitchOrd'] . ',
                   baAB     = ' . (int)$_POST[$player_id . '_baAB'] . ',
                   ba1b     = ' . (int)$_POST[$player_id . '_ba1b'] . ',
                   ba2b     = ' . (int)$_POST[$player_id . '_ba2b'] . ',
                   ba3b     = ' . (int)$_POST[$player_id . '_ba3b'] . ',
                   baHR     = ' . (int)$_POST[$player_id . '_baHR'] . ',
                   baRBI    = ' . (int)$_POST[$player_id . '_baRBI'] . ',
                   baBB     = ' . (int)$_POST[$player_id . '_baBB'] . ',
                   baK      = ' . (int)$_POST[$player_id . '_baK'] . ',
                   baSB     = ' . (int)$_POST[$player_id . '_baSB'] . ',
                   piWin    = ' . $piWin . ',
                   piLose   = ' . $piLose . ',
                   piSave   = ' . $piSave . ',
                   piIP     = ' . (float)$_POST[$player_id . '_piIP'] . ',
                   piHits   = ' . (int)$_POST[$player_id . '_piHits'] . ',
                   piRuns   = ' . (int)$_POST[$player_id . '_piRuns'] . ',
                   piER     = ' . (int)$_POST[$player_id . '_piER'] . ',
                   piWalks  = ' . (int)$_POST[$player_id . '_piWalks'] . ',
                   piSO     = ' . (int)$_POST[$player_id . '_piSO'] . ',
                   baRuns   = ' . (int)$_POST[$player_id . '_baRuns'] . ',
                   baRE     = ' . (int)$_POST[$player_id . '_baRE'] . ',
                   baFC     = ' . (int)$_POST[$player_id . '_baFC'] . ',
                   baHP     = ' . (int)$_POST[$player_id . '_baHP'] . ',
                   baLOB    = ' . (int)$_POST[$player_id . '_baLOB'] . ',
                   fiPO     = ' . (int)$_POST[$player_id . '_fiPO'] . ',
                   fiA      = ' . (int)$_POST[$player_id . '_fiA'] . ',
                   fiE      = ' . (int)$_POST[$player_id . '_fiE'] . ',
                   baSF     = ' . (int)$_POST[$player_id . '_baSF'] . '
             WHERE gameID   = ' . $game_id . ' AND playerID = ' . $player_id . ' ';
       }

      $result = mysql_query($query);
      if (mysql_error())
        $error_flag = 1;
    }

  }

  if ($error_flag)
    return false;
  else 
    return true;
}
    
/*
function  club_upload_gamechanger_stats($game_id,$season)
{
  global $wpdb;
  $def      = club_get_defaults();
  $defaultTeam = $def['defaultTeam'];

  $lines = file($_FILES['club_plugin_gamechanger_upload_file']['tmp_name']);

  foreach ($lines as $line_num => $line)
  {
    list($jersey,$baR,$baSB,$baH,$baK,$baSacF,$ba2b,$baHR,$baBB,$baRBI,$ba3b,$baAB,$baSacB,$baHBP,$piHRA,$piER,$piBF,$piNum,$piWP,$piHB,$piRA,$piA,$piK,$piBB,$piH,$piSBA,$piIP,$piPartIP)=explode("|",$line);

    $ba1b=$baH-$ba2b-$ba3b-$baHR;
    $inningPitched=$piIP+($piPartIP*.33);
    $playerID=club_get_playerID_from_jersey($jersey,$season,$defaultTeam);
    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_stats
        SET gameID='$game_id',
	    playerID='$playerID',
            baAB='$baAB',
            ba1b='$ba1b',
            ba2b='$ba2b',
            ba3b='$ba3B',
            baHR='$baHR',
            baRBI='$baRBI',
            baBB='$baBB',
            baK='$baK',
            baSB='$baSB',
            baRuns='$baR',
            baHP='$baHBP',
            piIP='$piIP',
	    piHits='$piH',
	    piRuns='$piRA',
	    piER='$piER',
	    piWalks='$piBB',
	    piSO='$piK'";

    $result = mysql_query($query);
    if(!$result)
    {
      echo "Failed to import GameChanger stats for game $game_id ($query)";
    }
  }

  return;
}
*/

function  club_upload_stats($game_id,$team)
{
  global $wpdb;
  $season = club_get_season_from_gameid($game_id);

  $lines = file($_FILES['club_plugin_stats_upload_file']['tmp_name']);
  
  foreach ($lines as $line_num => $line)
  {
    list($jersey,$battOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$baRuns,$baRE,$baFC,$baHP,$baLOB,$baSF,$pitchOrd,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$fiPO,$fiA,$fiE)=explode(",",$line);
  $playerID="0";
  $playerID=club_get_playerID_from_jersey($jersey,$season,$team);
  $presults    = club_get_game_player_results ($game_id,$playerID);
  if (!$presults)
   $new_entry = true;
  else
   $new_entry = false;
  if ($playerID && $new_entry)
  {
    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_stats
         SET gameID='$game_id',
             playerID='$playerID',
             battOrd ='$battOrd',
             baAB='$baAB',
             ba1b='$ba1b',
             ba2b='$ba2b',
             ba3b='$ba3b',
             baHR='$baHR',
             baRBI='$baRBI',
             baBB='$baBB',
             baK='$baK',
             baSB='$baSB',
             baRuns='$baRuns',
             baRE='$baRE',
             baFC='$baFC',
             baHP='$baHP',
             baLOB='$baLOB',
             baSF='$baSF',
             pitchOrd='$pitchOrd',
             piWin='$piWin',
             piLose='$piLose',
             piSave='$piSave',
             piIP='$piIP',
             piHits='$piHits',
             piRuns='$piRuns',
             piER='$piER',
             piWalks='$piWalks',
             piSO='$piSO',
             fiPO='$fiPO',
             fiA='$fiA',
             fiE='$fiE'";
  }
    if (!$new_entry && $playerID){
    $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_stats
         SET gameID='$game_id',
             playerID='$playerID',
             battOrd ='$battOrd',
             baAB ='$baAB',
             ba1b ='$ba1b',
             ba2b ='$ba2b',
             ba3b ='$ba3b',
             baHR ='$baHR',
             baRBI ='$baRBI',
             baBB ='$baBB',
             baK ='$baK',
             baSB ='$baSB',
             baRuns ='$baRuns',
             baRE ='$baRE',
             baFC ='$baFC',
             baHP ='$baHP',
             baLOB ='$baLOB',
             baSF ='$baSF',
             pitchOrd ='$pitchOrd',
             piWin ='$piWin',
             piLose ='$piLose',
             piSave ='$piSave',
             piIP ='$piIP',
             piHits ='$piHits',
             piRuns ='$piRuns',
             piER ='$piER',
             piWalks ='$piWalks',
             piSO ='$piSO',
             fiPO ='$fiPO',
             fiA ='$fiA',
             fiE ='$fiE'
	     WHERE gameID='$game_id' and playerID='$playerID'";
  }
//echo $query;
    $result = mysql_query($query);
    if(!$result)
    {
      echo "Failed to import stats for game $game_id ($query)";
    }
  }
  return;
}


function  club_upload_iScore_battingstats($game_id,$season)
{
  global $wpdb;
  $def      = club_get_defaults();
  $defaultTeam = $def['defaultTeam'];

  $lines = file($_FILES['club_plugin_iScore_batting_upload']['tmp_name']);

  foreach ($lines as $line_num => $line)
  {
    list($jersey,$baName,$baG,$baPA,$baAB,$baR,$baH,$baB,$ba1B,$ba2B,$ba3B,$baHR,$baRBI,$baBB,$baKc,$baKs,$baSO,$baHBP,$baSB,$baCS,$baSCB,$baSF,$baSAC,$baRPA,$baOBP,$baSLG,$baOPS,$baAVG,$baROE,$baFC,$baCI,$baGDP,$baGTP,$baABRSP,$baHRSP,$baBARSP)=explode(",",$line);

    $playerID=club_get_playerID_from_jersey($jersey,$season,$defaultTeam);
   $presults    = club_get_game_results_all($game_id, $season);
   if (!$presults)
     $new_entry = true;
   else
     $new_entry = false;
  if ($new_entry && $playerID!="0")
  {
    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_stats
        SET gameID='$game_id',
            playerID='$playerID',
            baAB='$baAB',
            ba1b='$ba1B',
            ba2b='$ba2B',
            ba3b='$ba3B',
            baHR='$baHR',
            baRBI='$baRBI',
            baBB='$baBB',
            baK='$baSO',
            baSB='$baSB',
            baRuns='$baR',
	    baSF='$baSF',
            baHP='$baHBP'";
	    
  }
  if (!$new_entry && $playerID!="0"){
    $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_stats
        SET gameID='$game_id',
            playerID='$playerID',
            baAB='$baAB',
            ba1b='$ba1B',
            ba2b='$ba2B',
            ba3b='$ba3B',
            baHR='$baHR',
            baRBI='$baRBI',
            baBB='$baBB',
            baK='$baSO',
            baSB='$baSB',
            baRuns='$baR',
            baSF='$baSF',
            baHP='$baHBP'";
  }
    $result = mysql_query($query);
    if(!$result)
    {
      echo "Failed to import iScore batting stats for game $game_id ($query)";
    }
  }

  return;
}


function  club_upload_iScore_pitchingstats($game_id,$season)
{
  global $wpdb;
  $def      = club_get_defaults();
  $defaultTeam = $def['defaultTeam'];

  $lines = file($_FILES['club_plugin_iScore_pitching_upload']['tmp_name']);

  foreach ($lines as $line_num => $line)
  {
    list($jersey,$piName,$piG,$piW,$piL,$piSV,$piIP,$piBF,$piBalls,$piStrikes,$piPIT,$piR,$piRA,$piER,$piERA9,$piERA,$piK,$piH,$piBB,$piIBB,$piKBB,$piHB,$piBK,$piWP,$piHR,$piWHIP,$piOBP,$piBAA,$piAO,$piGO,$piFPS,$piFPB,$piFPS)=explode(",",$line);

    $playerID=club_get_playerID_from_jersey($jersey,$season,$defaultTeam);

    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_stats
        SET gameID='$game_id',
            playerID='$playerID',
            piWin='$piW',
            piLose='$piL',
            piSave='piSV',
            piIP='$piIP',
            piHits='$piH',
            piRuns='$piRA',
            piER='$piER',
            piWalks='$piBB',
            piSO='$piK'";


    $result = mysql_query($query);
    if(!$result)
    {
      echo "Failed to import iScore pitching stats for game $game_id ($query)";
    }
  }

  return;
}


function club_import_data()
{



return;
}


function  club_get_game($game_id)
{
  global $wpdb;

  $query  = "SELECT sc.gameID, sc.visitingTeam, sc.homeTeam, sc.gameDate, sc.gameTime, sc.field_id, sc.homeScore, sc.visitScore, sc.season ,lc.fieldname";
  $query .= " FROM " . $wpdb->prefix . "clubhouseManager_schedule as sc";
   $query .= " inner join " . $wpdb->prefix . "clubhouseManager_locations as lc on sc.field_id= lc.field_id";
    $query .= " WHERE gameID = " . $game_id  ;
  
  $result = mysql_query($query);
  if ($result)
    $game   = mysql_fetch_array($result);

  return $game;
}


function  club_get_schedules($season)
{

  global $wpdb;

  $query  = "SELECT sc.gameID, sc.visitingTeam, sc.homeTeam, sc.gameDate, sc.gameTime, sc.field_id, sc.homeScore, sc.visitScore,lc.fieldname ";
  $query .=" FROM " . $wpdb->prefix . "clubhouseManager_schedule as sc ";
  $query .= " Inner join ". $wpdb->prefix . "clubhouseManager_locations as lc on lc.field_id = sc.field_id";
  $query .= " WHERE season= '" . $season . "' ORDER BY gameDate desc ";
 
  $result = mysql_query($query);

  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $games[] = $row;
    }

  return $games;
}


function  club_add_schedule()
{
 // echo "<pre>";print_r($_POST);die;
  global $wpdb;

  $season = $_POST['club_schedules_edit_select_season'];
  $vteam = $_POST['club_schedules_edit_vteam_select'];
  $hteam = $_POST['club_schedules_edit_hteam_select'];
  $gdate = $_POST['club_schedules_edit_gdate'];
  
  $gtime = $_POST['club_schedules_edit_gtime'];
  $field = $_POST['club_schedules_edit_field_select'];
  $type  = $_POST['club_schedules_edit_type_select'];

  $query  = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='$vteam', homeTeam='$hteam', gameDate='$gdate', gameTime='$gtime', field_id='$field', type='$type', season='$season' ";
  //echo $query;die;
  $result = mysql_query($query);
  if (mysql_error())
    return false;

  return true;
}



function  club_update_schedule($game_id)
{

  global $wpdb;

  $season = $_POST['club_schedules_edit_select_season'];
  $vteam = $_POST['club_schedules_edit_vteam_select'];
  $hteam = $_POST['club_schedules_edit_hteam_select'];
  $gdate = $_POST['club_schedules_edit_gdate'];
  $gtime = $_POST['club_schedules_edit_gtime'];
  $field = $_POST['club_schedules_edit_field_select'];
  $type  = $_POST['club_schedules_edit_type_select'];

  $query  = "UPDATE " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='$vteam', homeTeam='$hteam', gameDate='$gdate', gameTime='$gtime', field_id='$field', type='$type' WHERE gameID=$game_id ";
  //echo $query;die;
  $result = mysql_query($query);

  if (mysql_error())
    return false;

  return true;
}



function  club_upload_schedules($season)
{
  global $wpdb;
  $def      = club_get_defaults();
  $defaultTeam = $def['defaultTeam'];

  $lines = file($_FILES['club_schedules_uploadedfile']['tmp_name']);

  foreach ($lines as $line_num => $line) 
  {
    list($visitingTeam, $homeTeam, $gameDate, $gameTime, $field)=explode(",",$line);
   
//Trim unnecessary characters from beginning and end of entries
      
      $visitingTeam = trim($visitingTeam," \t\n\r\x0B\'\"");
      $gameDate = trim($gameDate," \t\n\r\x0B\'\"");
      $gameTime = trim($gameTime," \t\n\r\x0B\'\"");
      $homeTeam = trim($homeTeam," \t\n\r\x0B\'\"");
      $field = str_replace('"', '', $field);
      $field = trim($field," \t\n\x0B\'\"\r");
        #$field = trim($field," \t\n\x0B\'\"");
//Prevent SQL Injection
      	$visitingTeam = mysql_real_escape_string($visitingTeam);
	$gameDate =mysql_real_escape_string($gameDate);
	$gameTime =mysql_real_escape_string($gameTime);
	$homeTeam =mysql_real_escape_string($homeTeam);
	$field = mysql_real_escape_string($field);
//Verify one of the teams playing is the default team
    if (($visitingTeam == $defaultTeam) || ($homeTeam == $defaultTeam)){
    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='$visitingTeam', homeTeam='$homeTeam', gameDate='$gameDate', gameTime='$gameTime',field='$field',season='$season',type='game'";
    $result = mysql_query($query);
    if(!$result)
    {
      echo "Failed to add: $visitingTeam vs. $homeTeam on $gameDate at $gameTime at $field ($query)";
    }
    }
  }

  return;
}



function  club_add_tournament()
{
  global $wpdb;

  $defs = club_get_defaults();
  $hteam = $defs['defaultTeam'];

  $season = $_POST['club_tournaments_edit_select_season'];
  $gdate = $_POST['club_tournaments_edit_gdate'];
  $gtime = $_POST['club_tournaments_edit_gtime'];
  $field = $_POST['club_tournaments_edit_field_select'];
  $type  = $_POST['club_tournaments_edit_type_select'];
  $notes = $_POST['club_tournaments_edit_notes'];

  $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='tournament',homeTeam='$hteam',gameDate='$gdate',gameTime='$gtime',field='$field',type='$type',notes='$notes',season='$season' ";
  $result = mysql_query($query);

  if ($result)
    return true;
  else
    return false;
}


function  club_update_tournament($game_id)
{
  global $wpdb;

  $defs = club_get_defaults();
  $hteam = $defs['defaultTeam'];

  $gdate = $_POST['club_tournaments_edit_gdate'];
  $gtime = $_POST['club_tournaments_edit_gtime'];
  $field = $_POST['club_tournaments_edit_field_select'];
  $type  = $_POST['club_tournaments_edit_type_select'];
  $notes = $_POST['club_tournaments_edit_notes'];

  $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='tournament',homeTeam='$hteam',gameDate='$gdate',gameTime='$gtime',field='$field',notes='$notes' WHERE gameID=$game_id ";
  $result = mysql_query($query);

  if ($result)
    return true;
  else
    return false;
}


function  club_upload_tournaments()
{
  global $wpdb;

  $lines = file($_FILES['club_tournaments_uploadedfile']['tmp_name']);
  $def              = club_get_defaults();
  $hometeam         = $def['defaultTeam'];

  foreach ($lines as $line_num => $line) 
  {
    list($gameDate, $gameTime, $field, $notes)=explode(",",$line);
    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='tournament', homeTeam='$homeTeam', gameDate='$gameDate', gameTime='$gameTime', field='$field', notes='$notes' ";
    $result = mysql_query($query);
    if(!$result)
    {
      echo "Failed to add: $visitingTeam vs. $homeTeam on $gameDate at $gameTime at $field ($query)";
    }
  }

  return;
}



function  club_get_tournaments($hometeam, $season)
{
  global $wpdb;

  $query  = "SELECT gameID, visitingTeam, homeTeam, gameDate, gameTime, field, Notes, season FROM " . $wpdb->prefix . "clubhouseManager_schedule WHERE season='$season' AND visitingTeam='tournament' AND homeTeam='$hometeam' ORDER BY gameDate desc ";
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $tournaments[] = $row;
    }

  return $tournaments;
}



function  club_upload_practices()
{
  global $wpdb;

  $lines = file($_FILES['club_practice_uploadedfile']['tmp_name']);

  foreach ($lines as $line_num => $line) 
  {
    list($visitingTeam, $homeTeam, $gameDate, $gameTime, $field)=explode(",",$line);

    $query  = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='$visitingTeam', homeTeam='$homeTeam', gameDate='$gameDate', gameTime='$gameTime',field='$field'" ;
    $result = mysql_query($query);
  }

  return;
}



function  club_get_practices($hometeam, $season)
{
  global $wpdb;

  $query  = 'SELECT gameID, gameDate, gameTime, field_id, notes FROM ' . $wpdb->prefix . 'clubhouseManager_schedule WHERE season= "' . $season . '" AND visitingTeam="practice" AND homeTeam = "' . $hometeam . '" ORDER BY gameDate desc ';
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $games[] = $row;
    }

  return $games;
}


function  club_update_practice( $game_id )
{
  global $wpdb;

  $defs = club_get_defaults();
  $hteam = $defs['defaultTeam'];

  $gdate = $_POST['club_practice_edit_gdate'];
  $gtime = $_POST['club_practice_edit_gtime'];
  $field = $_POST['club_practice_edit_field_select'];
  $notes = $_POST['club_practice_edit_notes'];

  $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='practice',homeTeam='$hteam',gameDate='$gdate',gameTime='$gtime',field='$field',notes='$notes' WHERE gameID=$game_id ";
  $result = mysql_query($query);

  if ($result)
    return true;
  else
    return false;
}



function  club_add_practice()
{
  global $wpdb;

  $defs = club_get_defaults();
  $hteam = $defs['defaultTeam'];

  $season = $_POST['club_practice_edit_select_season'];
  $gdate = $_POST['club_practice_edit_gdate'];
  $gtime = $_POST['club_practice_edit_gtime'];
  $field = $_POST['club_practice_edit_field_select'];
  $notes = $_POST['club_practice_edit_notes'];

  $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_schedule SET visitingTeam='practice',homeTeam='$hteam',gameDate='$gdate',gameTime='$gtime',field='$field',notes='$notes',season='$season' ";
  $result = mysql_query($query);

  if ($result)
    return true;
  else
    return false;
}


function  club_delete_all_practices()
{
  global $wpdb;

  $defs = club_get_defaults();
  $hteam = $defs['defaultTeam'];

  $query = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_schedule WHERE visitingTeam='practice' AND homeTeam = '" . $hteam . "' ";
  $result = mysql_query();
  $query = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_boxscores WHERE visitingTeam='practice' AND homeTeam = '" . $hteam . "' ";
  $result = mysql_query();
  $query = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_stats WHERE visitingTeam='practice' AND homeTeam = '" . $hteam . "' ";
  $result = mysql_query();

  return;
}


function  club_get_height($inches) 
{
  //divide by 12 to get feet
  $feet = $inches/12;
	 
  //round decimal so we can divide by 100 and use as percent
  $feet = round($feet, 2);
	 
  // separate whole from decimal
  $parts = explode(".", $feet);
  $wholeFeet = $parts[0];
	 
  //turn remaining into percent of 12
  $remainingInches = round(($parts[1]/100)*12);
	 
  $height = $wholeFeet."&#39; ".$remainingInches."&quot;";
	 
  return $height;
}



function  club_upload_file()
{
  global  $wpdb;

  $lines = file($_FILES['club_uploadedfile']['tmp_name']);

  $error = 0;
  foreach ($lines as $line_num => $line) 
  {
    list($teamName,$firstname,$middlename,$lastname,
	 $positions,$bats,$throws,$height,$weight,$address,
	 $city,$state,$zip,$homePhone,$workPhone,
	 $cellphone,$img,$jerseyNum,$picLocation,$season,$profile,$email,$school,$bdate)=explode(",",$line);

    $sqlString = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_players SET playerID='$playerID',teamName='$teamName',
        											firstname='$firstname',middlename='$middlename',
        											lastname='$lastname',positions='$positions',
        											bats='$bats',throws='$throws',height='$height',weight='$weight',
        											address='$address',city='$city',state='$state',zip='$zip',
        											homePhone='$homePhone',workPhone='$workPhone',
        											cellPhone='$cellPhone',img='$img',jerseyNum='$jerseynum',
        											picLocation='$picLocation',season='$season',
        											profile='$profile',email='$email',school='$school',bdate='$bdate'" ;

    $resultAction = mysql_query($sqlString);
    if(!$resultAction)
    {
      echo "Failed to add player: $sqlString<BR>";
      $error = 1;
    }
  }

  return $error;
}




function  club_get_seasons()
{
  global $wpdb;

  $query = "SELECT DISTINCT(season) FROM " . $wpdb->prefix . "clubhouseManager_teams ORDER BY season";

  $result = mysql_query($query);
  if ($result)
    while( $row = mysql_fetch_object($result) )
    {
      $season_list[] = $row->season;
    }
  else
    return false;

  return $season_list;
}


function  club_get_players_seasons()
{
  global $wpdb;

  $query = "SELECT DISTINCT(season) FROM " . $wpdb->prefix . "clubhouseManager_players ORDER BY season";

  $result = mysql_query($query);
  if ($result)
    while( $row = mysql_fetch_object($result) )
    {
      $season_list[] = $row->season;
    }
  else
    return false;

  return $season_list;
}



function  club_get_teams($season)
{
  global $wpdb;
  $teams = array();
  if (isset($season)){
  $query = 'SELECT teamname FROM ' . $wpdb->prefix . 'clubhouseManager_teams WHERE season="'.$season.'" ORDER BY teamname asc';
  }else{
  $query = 'SELECT distinct(teamname) FROM ' . $wpdb->prefix . 'clubhouseManager_teams ORDER BY teamname asc';
  }
  $result = mysql_query($query);
  if ($result)
    while ( $obj = mysql_fetch_object($result) )
    {
      $teams[] = $obj->teamname;
    }

  return $teams;
}

function  club_get_pages()
{
  global $wpdb;

  $pages = array();
  $query = $wpdb->get_results("SELECT ID, post_status, post_title FROM $wpdb->posts WHERE post_type='page' ORDER BY post_status DESC, menu_order ASC, post_title ASC");
  $result = mysql_query($query);
  if ($result)
    while ( $obj = mysql_fetch_object($result) )
    {
      $pages[] = $obj->pagename;
    }

  return $teams;
}

function  club_assign_players_team($team, $season, $players_selected,$jerseynum)
{
  
  global $wpdb;
  $players = club_get_all_players();

  foreach( $players_selected as $indx )
  {
    $playerid    = $players[$indx]['playerID'];
    $firstname   = $players[$indx]['firstname'];
    $middlename  = $players[$indx]['middlename'];
    $lastname    = $players[$indx]['lastname'];
    $profile     = $players[$indx]['profile'];
    $img         = $players[$indx]['img'];
    $positions   = $players[$indx]['positions'];
    $bats        = $players[$indx]['bats'];
    $throws      = $players[$indx]['throws'];
    $height      = $players[$indx]['height'];
    $weight      = $players[$indx]['weight'];
    $bdate       = $players[$indx]['bdate'];
    $address     = $players[$indx]['address'];
    $city        = $players[$indx]['city'];
    $state       = $players[$indx]['state'];
    $zip         = $players[$indx]['zip'];
    $homephone   = $players[$indx]['homePhone'];
    $cellphone   = $players[$indx]['cellphone'];
    $workphone   = $players[$indx]['workPhone'];
    $jerseynum   =/* $players[$indx]['jerseyNum']*/$jerseynum;
    $school      = $players[$indx]['school'];
    $email       = $players[$indx]['email'];
    $piclocation = $players[$indx]['picLocation'];

      $subquery = "select season from " . $wpdb->prefix . "clubhouseManager_players where playerid = ".$playerid;
      $seasonexist = mysql_query($subquery);
      $row = mysql_fetch_array($seasonexist);
     // echo "<pre>";print_r($row);die; 
      if ($row['season']!='')
      {
          $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_players SET teamName='$team',
                playerID='$playerid',firstname='$firstname',middlename='$middlename',
                lastname='$lastname', positions='$positions',
                bats='$bats',throws='$throws',height='$height',weight='$weight',
                address='$address',city='$city',state='$state',zip='$zip',
                homePhone='$homephone',workPhone='$workphone',
                cellphone='$cellphone',jerseyNum='$jerseynum',
                picLocation='$piclocation',season='$season',
                profile='$profile',email='$email',school='$school',bdate='$bdate'";
                // echo $query;die;
          $result = mysql_query($query);

      }
      else
      {
          $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_players SET teamName='$team',
                firstname='$firstname',middlename='$middlename',
                lastname='$lastname', positions='$positions',
                bats='$bats',throws='$throws',height='$height',weight='$weight',
                address='$address',city='$city',state='$state',zip='$zip',
                homePhone='$homephone',workPhone='$workphone',
                cellphone='$cellphone',jerseyNum='$jerseynum',
                picLocation='$piclocation',season='$season',
                profile='$profile',email='$email',school='$school',bdate='$bdate' 
                where playerid = ".$playerid;
               // echo $query;die;
          $result = mysql_query($query);
      }

  }
 
  return $result;
}


function  club_get_players($season)
{
  global $wpdb;

  $players = array();

  $query = "SELECT playerID, firstname, middlename, lastname, teamName FROM " . $wpdb->prefix . "clubhouseManager_players WHERE season = " . $season . " ORDER BY teamName, lastname,firstname,middlename asc";
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_selected_players($player_id)
{
  global $wpdb;

  $players = array();

  $query = "SELECT DISTINCT * FROM " . $wpdb->prefix . "clubhouseManager_players WHERE playerID='" . $player_id . "'";

  ## you may want to use the below query instead of the above... this will give you the last record for that player for the last season
  #$query = "SELECT playerID, teamName, firstname, middlename, lastname, img, positions, bats, throws, height, weight, address, city, state, zip, homePhone, workPhone, cellphone, jerseyNum, picLocation, season, profile, bdate, email, school
  #FROM " . $wpdb->prefix . "clubhouseManager_players WHERE playerID='" . $player_id . "' ORDER BY season DESC limit 1";
  
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_all_players()
{
  global $wpdb;

  $players = array();

  $query = "SELECT * FROM (SELECT * FROM " . $wpdb->prefix ."clubhouseManager_players ORDER BY season DESC) as uniquePlayers
        GROUP BY playerID
        ORDER BY lastname ASC,firstname ASC";

  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}



function  club_get_players_season_team($season, $team)
{
  
  global $wpdb;
  $players = array();
  $query = "SELECT playerID, firstname, middlename, lastname FROM " . $wpdb->prefix . "clubhouseManager_players WHERE season = '" . $season . "' AND teamName = '" . $team . "' ORDER BY lastname,firstname,middlename asc";
 
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_player_info($id, $season)
{

  global $wpdb;

// $query  = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_players WHERE playerID = " . $id . " AND season = '" . $season . "' ";

 $query  = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_players WHERE playerID = " . $id ;  
  $result = mysql_query($query);
  if ($result)
    $player_obj = mysql_fetch_object($result);

  return $player_obj;
}



function  club_delete_player($id, $season)
{
  
  global $wpdb;

  $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_players SET `teamName`='' where playerID = " . $id . " AND season = '" . $season . "' ";
  //$query  = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_players WHERE playerID = " . $id . " AND season = '" . $season . "' ";
  
  $result = mysql_query($query);

  return;
}


function  club_delete_all_players_team($team, $season)
{
  global $wpdb;

  $query  = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_players WHERE teamname = '" . $team . "' AND season = '" . $season . "' ";
  $result = mysql_query($query);

  return;
}



function  club_add_player()
{
  global $wpdb;

  //  get post data
  $firstname   = $_POST['club_player_edit_fname'];
  $middlename  = $_POST['club_player_edit_mname']; 
  $lastname    = $_POST['club_player_edit_lname'];
  $profile     = $_POST['club_player_edit_pprofile'];
   //$img        = $_POST['club_player_edit_img'];
  $positions   = $_POST['club_player_edit_position'];
  $bats        = $_POST['club_player_edit_bats'];
  $throws      = $_POST['club_player_edit_throws'];
  $height      = $_POST['club_player_edit_height'];
  $teamname    = $_POST['club_player_edit_team'];
  $season      = $_POST['club_player_edit_season'];
  $weight      = $_POST['club_player_edit_weight'];
  $bdate       = $_POST['club_player_edit_bdate'];
  $address     = $_POST['club_player_edit_address'];
  $city        = $_POST['club_player_edit_city'];
  $state       = $_POST['club_player_edit_state'];
  $zip         = $_POST['club_player_edit_zip'];
  $homephone   = $_POST['club_player_edit_hphone'];
  $cellphone   = $_POST['club_player_edit_cphone'];
  $workphone   = $_POST['club_player_edit_wphone'];
  $jerseynum   = $_POST['club_player_edit_jerseynum'];
  $email       = $_POST['club_player_edit_email'];
  $school      = $_POST['club_player_edit_school'];
  $piclocation = $_POST['club_player_edit_pictureloc'];


  if(!empty($firstname) && !empty($lastname))
  {
    $getquery = "SELECT MAX( playerid ) FROM ".$wpdb->prefix . "clubhouseManager_players";

    $lastplayerid = mysql_query($getquery);
    if ($lastplayerid)
    $row = mysql_fetch_array($lastplayerid); 
    $playerid = $row['MAX( playerid )']+1;
    $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_players SET playerid='$playerid',
     teamName='$teamname',firstname='$firstname',middlename='$middlename',
            lastname='$lastname',positions='$positions',
            bats='$bats',throws='$throws',height='$height',weight='$weight',
            address='$address',city='$city',state='$state',zip='$zip',
            homePhone='$homephone',workPhone='$workphone',
            cellphone='$cellphone',jerseyNum='$jerseynum',
            picLocation='$piclocation',season='$season',
            profile='$profile',email='$email',school='$school',bdate='$bdate'";

   // echo $query; die;


    $result = mysql_query($query);

    // echo $result;die;
    if ($result)
      $ret = true;
    else
      $ret = false;
  }
  else
  {
    $ret = false ;
  }

  

  // echo $ret; die;

  return $ret;
}



function  club_update_player($player_id, $season)
{
  global $wpdb;

  //  get post data
  $firstname   = $_POST['club_player_edit_fname'];
  //echo $firstname;die;
  $middlename  = $_POST['club_player_edit_mname'];
  $lastname    = $_POST['club_player_edit_lname'];
  $profile     = $_POST['club_player_edit_pprofile'];
    // $img       = $_POST['club_player_edit_img'];
  $positions   = $_POST['club_player_edit_position'];
  $bats        = $_POST['club_player_edit_bats'];
  $throws      = $_POST['club_player_edit_throws'];
  $height      = $_POST['club_player_edit_height'];
  $teamname    = $_POST['club_player_edit_team'];
  $weight      = $_POST['club_player_edit_weight'];
  $bdate       = $_POST['club_player_edit_bdate'];
  $address     = $_POST['club_player_edit_address'];
  $city        = $_POST['club_player_edit_city'];
  $state       = $_POST['club_player_edit_state'];
  $zip         = $_POST['club_player_edit_zip'];
  $homephone   = $_POST['club_player_edit_hphone'];
  $cellphone   = $_POST['club_player_edit_cphone'];
  $workphone   = $_POST['club_player_edit_wphone'];
  $jerseynum   = $_POST['club_player_edit_jerseynum'];
  $email       = $_POST['club_player_edit_email'];
  $school      = $_POST['club_player_edit_school'];
  $piclocation = $_POST['club_player_edit_pictureloc'];

  $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_players SET 
                teamName='$teamname',
		firstname='$firstname',middlename='$middlename',
		lastname='$lastname',positions='$positions',
		bats='$bats',throws='$throws',height='$height',weight='$weight',
		address='$address',city='$city',state='$state',zip='$zip',
       		homePhone='$homephone',workPhone='$workphone',
       		cellphone='$cellphone',jerseyNum='$jerseynum',
       		picLocation='$piclocation',season='$season',
		profile='$profile',email='$email',school='$school',bdate='$bdate' 
                WHERE playerID='$player_id'
		";

  $result = mysql_query($query);
  if ($result)
    $ret = true;
  else
    $ret = false;

  return $ret;
}


function  club_get_field_data($fieldname)
{
  global $wpdb;

  $query = "SELECT directions FROM " . $wpdb->prefix . "clubhouseManager_locations WHERE fieldname = '" . $fieldname . "' ";
  $result = mysql_query($query);
  if ($result)
    $row = mysql_fetch_array($result); 
 
  return $row['directions'];
}


function  club_get_locations()
{
  global $wpdb;

  $query = "SELECT fieldname,field_id FROM " . $wpdb->prefix . "clubhouseManager_locations ORDER BY field_id asc ";
  $result = mysql_query($query);
  
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $fields[] = $row;
    }

  return $fields;
}


function  club_add_location($fieldname, $directions)
{
  global $wpdb;

  $query = "INSERT INTO " . $wpdb->prefix . "clubhouseManager_locations SET fieldname = '" . $fieldname . "'";
  //echo $query;die;
  $result = mysql_query($query);

  if ( mysql_error() )
    return false;

  return true;
}


function  club_delete_location( $field_id )
{
  global $wpdb;

  $query = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_locations WHERE field_id = '" . $field_id . "' ";
  //echo $query;die;
  $result = mysql_query($query);

  if ( mysql_error() )
    return false;

  return true;
}


function  club_delete_all_locations()
{
  global $wpdb;

  $query = "TRUNCATE TABLE " . $wpdb->prefix . "clubhouseManager_locations ";
  $result = mysql_query($query);
  if ( mysql_error() )
    return false;

  return true;
}


function  club_update_location($fieldname, $directions,$field_id)
{
  global $wpdb;

  $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_locations SET fieldname = '" . $fieldname . "' WHERE field_id = '" . $field_id . "' ";
  //echo $query;die;
  $result = mysql_query($query);

  if ( mysql_error() )
    return false;

  return true;
}



function  club_addSeason($year)
{
  global $wpdb;

  $ret_array = array();
  //  check if season already exists
  $query = "SELECT COUNT(*) FROM " . $wpdb->prefix . "clubhouseManager_teams WHERE season = " . $year . " ";
  $result = mysql_query($query);

  if ( $result )
    $obj = mysql_fetch_object($result);

  if ( (!$result) OR ($obj->count == 0) )
  {
    //  season does not exists - create an entry with default team
    $query  = "SELECT defaultTeam FROM " . $wpdb->prefix . "clubhouseManager_settings ";
    $result = mysql_query($query);
    $obj    = mysql_fetch_object($result);
    $team   = $obj->defaultTeam;

    $query  = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_teams` (`teamname`, `wins`, `losses`, `winPer`, `season`) VALUES
			('" . $team . "', NULL, NULL, NULL, '" . $year . "');";
    $result = mysql_query($query);
   
    return true;
  }
  else
  {
    //  season exists - return false
    return false;
  }
}

function  club_updateSeason($year,$upid)
{
  global $wpdb;
  $ret_array = array();
  //  check if season already exists
  $query = "SELECT COUNT(*) FROM " . $wpdb->prefix . "clubhouseManager_teams WHERE season = " . $year . " ";
  $result = mysql_query($query);

  if ( $result )
    $obj = mysql_fetch_object($result);

  if ( (!$result) OR ($obj->count == 0) )
  {
    $query  = "UPDATE `" . $wpdb->prefix . "clubhouseManager_teams` SET `season` = '" . $year . "' WHERE season = '" . $upid ."' ";      
    $result = mysql_query($query);
   
    return true;
  }
  else
  {
    // season exists - return false
    return false;
  }
}

function  club_add_team_season( $team_list, $season = NULL)
{
  global $wpdb;

  if ( is_array($team_list) )
  {
    if ( !$season )
    {
      //  get default season
      $query  = "SELECT defaultSeason FROM " . $wpdb->prefix . "clubhouseManager_settings ";
      $result = mysql_query($query);
      $obj    = mysql_fetch_object($result);
      $season = $obj->defaultSeason;
    }
    foreach( $team_list as $team )
    {
      $query  = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_teams` (`teamname`, `wins`, `losses`, `winPer`, `season`) VALUES
			('" . $team . "', NULL, NULL, NULL, '" . $season . "');";
      $result = mysql_query($query);
    }
  }
  else
  {
    if ( !$season )
    {
      //  get default season
      $query  = "SELECT defaultSeason FROM " . $wpdb->prefix . "clubhouseManager_settings ";
      $result = mysql_query($query);
      $obj    = mysql_fetch_object($result);
      $season = $obj->defaultSeason;
    }
    $query  = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_teams` (`teamname`, `wins`, `losses`, `winPer`, `season`) VALUES
			('" . $team_list . "', NULL, NULL, NULL, '" . $season . "');";
    $result = mysql_query($query);
  }
 
  return;
}

function  club_get_leagues($upid)
{
  global $wpdb;

  if($upid!="")
  {
    $query = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_league where league_id= ".$upid." ORDER BY leaguename";
    
    $result = mysql_query($query);
    if ($result)
    {
      $row = mysql_fetch_object($result);
      $league_list = $row->leaguename;
    }
    else
      return false;
  }
  else
  {
    $query = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_league ORDER BY leaguename";
    $result = mysql_query($query);
    if ($result)
    {
      while( $row = mysql_fetch_object($result) )
      {
        $league_list[] = $row;
      }
    }
    else
      return false;
  }
  return $league_list;
}
function  club_add_league_season( $league, $season = NULL, $upid )
{  
  global $wpdb;

  if ( isset($league) && $upid=="")
  {   
      $querys  = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_league where leaguename= '".$league."' ";
      $results = mysql_query($querys);
      $obj    = mysql_num_rows($results);
      if($obj > 0)
      {
        return 0;
      }
      else
      {
        $query  = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_league` (`leaguename`) VALUES ('" . $league . "');";
        $result = mysql_query($query);
        return 1;
      }
  }
  else if ( isset($league) && $upid!="")
  {   
      $querys  = "SELECT * FROM " . $wpdb->prefix . "clubhouseManager_league where leaguename= '".$league."' and league_id != ".$upid." ";
      $results = mysql_query($querys);
      $obj    = mysql_num_rows($results);
      if($obj > 0)
      {
        return 0;
      }
      else
      {
        $query  = "UPDATE `" . $wpdb->prefix . "clubhouseManager_league` SET `leaguename` = '" . $league . "' WHERE league_id=".$upid." ";
        $result = mysql_query($query);
        return 2;
      }
  }
  else
  {
      return 3;
  }
}

function  club_delete_season($season)
{
  global $wpdb;

  $defs = club_get_defaults();

  if ( $defs['defaultSeason'] == $season )
    return -10;
  
  $seasons_list = club_get_seasons();
  if ( count($seasons_list) <= 1 )
    return -20;

  $query = 'DELETE FROM ' . $wpdb->prefix . 'clubhouseManager_teams WHERE ' . $wpdb->prefix . 'clubhouseManager_teams.season = "' . $season . '"';
  $result = mysql_query($query);

  $query = 'DELETE FROM ' . $wpdb->prefix . 'clubhouseManager_players WHERE ' . $wpdb->prefix . 'clubhouseManager_players.season = "' . $season . '"';
  $result = mysql_query($query);

  club_delete_all_schedules($season);
  $wpdb->flush();

  return 10;
}

 
function  club_delete_team($team)
{
  global $wpdb;

  $query = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_teams WHERE teamname = '" . $team . "' ";
  $result = mysql_query($query);

  return;
}

function  club_delete_league($league)
{
  global $wpdb;

  $query = "DELETE FROM " . $wpdb->prefix . "clubhouseManager_league WHERE league_id = " . $league . " ";
  $result = mysql_query($query);

  return;
}

function club_game_statasctics($hometeam,$visitingteam,$season,$field)
{
  global $wpdb;

  $query = "Select * from ".$wpdb->prefix. "clubhouseManager_schedule";
  $query .= " where homeTeam='".$hometeam."' AND  visitingTeam='".$visitingteam;
  $query .= "' AND season='".$season."' AND field_id=".$field;
  
  $result =  mysql_query($query);
  if ($result)
    {
      while( $row = mysql_fetch_object($result) )
      {
        $game_stats[] = $row;
      }
    }
    else
      return false;
    return $game_stats;
}

function  club_get_defaults()
{
  global $wpdb;

  $query = "SELECT defaultTeam, defaultSeason, defaultLeague, defaultCheck, defaultCredit, displayMenu FROM " . $wpdb->prefix . "clubhouseManager_settings  WHERE ID=1";
  $result = mysql_query($query);
  if ($result)
    while ( $obj = mysql_fetch_object($result) )
    {
      $def['defaultTeam']   = $obj->defaultTeam;
      $def['defaultSeason'] = $obj->defaultSeason;
      $def['defaultLeague']   = $obj->defaultLeague;
      $def['defaultCheck']   = $obj->defaultCheck;
      $def['defaultCredit']   = $obj->defaultCredit;
      $def['displayMenu']   = $obj->displayMenu;
    }

  return $def;
}


function  club_set_defaults($defs)
{
  global $wpdb;

  $query = "UPDATE " . $wpdb->prefix . "clubhouseManager_settings 
					SET defaultSeason = '" . $defs['defaultSeason'] . "' " . 
					", defaultTeam = '" . $defs['defaultTeam'] . "' " .
          ", defaultLeague = '" . $defs['defaultLeague'] . "' " .
          ", defaultCheck = '" . $defs['defaultCheck'] . "' " .
          ", defaultCredit = '" . $defs['defaultCredit'] . "' " .
          ", displayMenu = '" . $defs['displayMenu'] . "' " .
					" WHERE ID=1";

  $result = mysql_query($query);

  return;
}



function  club_get_batting_avg($season,$team)
{
  


  global $wpdb;
  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders = 3;
  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,
                round((baTotH/baTotAB),3) as BA
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE baTotAB>1 AND season='".$season."'
                GROUP BY playerID
                ORDER BY BA desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum, 
    		round((baTotH/baTotAB),3) as BA 
		FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE baTotAB>1 AND season='".$season."' AND teamName='".$team."'
		GROUP BY playerID
		ORDER BY BA desc
		LIMIT ".$team_leaders;
  }
//echo $query;
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_hit_leaders($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders =3;
  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,baTotH
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE baTotH > 0 AND season='".$season."'
                GROUP BY playerID
                ORDER BY baTotH desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,baTotH
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE baTotH > 0 AND season='".$season."' AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY baTotH desc
                LIMIT ".$team_leaders;
  }

  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function club_get_homerun_leaders($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders = 3;
  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,baTotHR
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE baTotHR > 0 AND season='".$season."'
                GROUP BY playerID
                ORDER BY baTotHR desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,baTotHR
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE baTotHR > 0 AND season='".$season."' AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY baTotHR desc
                LIMIT ".$team_leaders;
  }
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_rbi($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders = 3;
  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,baTotRBI 
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE season='".$season."'
                GROUP BY playerID
                ORDER BY baTotRBI desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,baTotRBI
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE season='".$season."' AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY baTotRBI desc
                LIMIT ".$team_leaders;
  }
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_era_leaders($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $erainnings = club_get_option('club_era_innings');
  $team_leaders = 3;
  $erainnings = 9;


  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum, 
    		round(sum((piTotER/piTotIP)*".$erainnings."),2) as ERA 
		FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE piTotIP>5 AND season='".$season."'
		GROUP BY playerID
		ORDER BY ERA asc
		LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,
                round(sum((piTotER/piTotIP)*".$erainnings."),2) as ERA
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE piTotIP>5 AND season='".$season."' AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY ERA asc
                LIMIT ".$team_leaders;
  }
  
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}



function  club_get_strikeout_leaders($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders = 3;
  

  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,piTotSO
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE piTotSO > 0 AND season='".$season."'
                GROUP BY playerID
                ORDER BY piTotSO desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,piTotSO
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE piTotSO > 0 AND season='".$season."' AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY piTotSO desc
                LIMIT ".$team_leaders;
  }
  
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}



function  club_get_innings_pitched_leaders($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders = 3;

  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,piTotIP
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE piTotIP > 0 AND season='".$season."'
                GROUP BY playerID
                ORDER BY piTotIP desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,piTotIP
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE piTotIP > 0 AND season='".$season."' AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY piTotIP desc
                LIMIT ".$team_leaders;
  }

  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}



function  club_get_wins_leaders($season,$team)
{
  global $wpdb;

  $team_leaders = club_get_option('club_team_leaders');
  $team_leaders = 3;
  if($team == 'league'){
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,piTotWin
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
		WHERE piTotWin > 0 AND season='".$season."'
                GROUP BY playerID
                ORDER BY piTotWin desc
                LIMIT ".$team_leaders;
  }else{
    $query = "SELECT DISTINCT playerID,lastname,firstname,middlename,jerseyNum,piTotWin
                FROM ".$wpdb->prefix."clubhouseManager_statTotals
                WHERE piTotWin > 0 AND season='".$season."'AND teamName='".$team."'
                GROUP BY playerID
                ORDER BY piTotWin desc
                LIMIT ".$team_leaders;
  }
  
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $players[] = $row;
    }

  return $players;
}


function  club_get_last_game_results()
{
  global $wpdb;

  $query = "SELECT s.gameID, gameDate as Gdate, gameTime as Gtime, " .
                 " homeTeam, visitingTeam,  hruns, vruns, lc.fieldname" .
                 " FROM " . $wpdb->prefix . "clubhouseManager_boxscores b, " . $wpdb->prefix . "clubhouseManager_schedule s
                 Inner join " . $wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = s.field_id WHERE " . 
                 " s.gameID = b.gameID AND gameDate <= CURDATE() " .
                 " AND (hruns>0 OR vruns>0) ORDER BY gameDate DESC, gameTime DESC LIMIT 1";
  
  $result = mysql_query($query);
  if ( $result )
    $game = mysql_fetch_array($result);
  else
    $game = NULL;

  return $game;
}


function  club_get_past_games_with_results()
{
  global $wpdb;

  $query = "SELECT s.gameID, gameDate as Gdate,gameTime as Gtime, " .
                 " homeTeam, visitingTeam, field, hruns, vruns " .
                 " FROM " . $wpdb->prefix . "clubhouseManager_schedule s, " . $wpdb->prefix . "clubhouseManager_boxscores b WHERE " . 
                 " s.gameID = b.gameID AND gameDate <= CURDATE() " .
                 " AND (hruns>0 OR vruns>0) ORDER BY gameDate DESC, gameTime DESC ";
  
  $result = mysql_query($query);
  if ( $result )
    while ( $row = mysql_fetch_array($result) )
      $games[] = $row;
  else
    return false;

  return $games;
}

function  club_get_next_game()
{
  global $wpdb;

  $query = "SELECT gameID,gameDate as Gdate, gameTime as Gtime, homeTeam, visitingTeam, fieldname "
                  ." FROM ".$wpdb->prefix."clubhouseManager_schedule sc
                    Inner join ".$wpdb->prefix."clubhouseManager_locations lc ON lc.field_id = sc.field_id
                   WHERE gameDate >= CURDATE() ORDER BY gameDate ASC, gameTime ASC LIMIT 1";
  
  $result = mysql_query($query);
  if ($result)
    $game = mysql_fetch_array($result);

  return $game;
}

function  club_get_playerID($jersey,$season)
{
  global $wpdb;

  $query = "SELECT playerID FROM ".$wpdb->prefix."clubhouseManager_players " .
		"WHERE season=". $season . " AND jerseyNum=" . $jersey . ";" .
  $result = mysql_query($query);
  if ($result)
    $game = mysql_fetch_array($result);

  return $game;
}


function club_display_post_selectbox() {
 
    global $wpdb, $post;
    $table_prefix = $wpdb->prefix;
 
    $the_output = NULL;
    $last_posts = (array)$wpdb->get_results("
        SELECT {$table_prefix}terms.name, {$table_prefix}terms.term_id
        FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
        WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
                AND {$table_prefix}term_taxonomy.taxonomy = 'category'
        {$hide_check}
    ");
    if (empty($last_posts)) {
        return NULL;
    }
    $used_cats = array();;
    $i = 0;
    foreach ($last_posts as $posts) {
        if (in_array($posts->name, $used_cats)) {
            unset($last_posts[$i]);
        } else {
            $used_cats[] = $posts->name;
        }
        $i++;
    }
    $last_posts = array_values($last_posts);
 
    $the_output .= '<select name="club_wordpress_posts">';
    foreach ($last_posts as $posts) {
 
      $the_output .= '<optgroup label="'.apply_filters('list_cats', $posts->name, $posts).'">';
 
          $where = apply_filters('getarchives_where', "WHERE post_type = 'post' AND post_status = 'publish'" , $r );
 
          $arcresults = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' AND ID IN (Select object_id FROM {$table_prefix}term_relationships, {$table_prefix}terms WHERE {$table_prefix}term_relationships.term_taxonomy_id =" . $posts->term_id . ") ORDER BY post_date DESC");
      foreach ( $arcresults as $arcresult ) {
           $the_output .= '<option label="'.apply_filters('the_title', $arcresult->post_title).'" value="'.apply_filters('the_post', $arcresult->ID).'">'.apply_filters('the_title', $arcresult->post_title) . '</option>';
       }
 
          $the_output .= '</optgroup>';
       }
       $the_output .= '</select>';
       echo $the_output;
}

////////////////////////////////////////////////////////////////////////////////
// plugin widget functions for output generation
////////////////////////////////////////////////////////////////////////////////



      add_shortcode(club_topbatters,club_widget_top_batters);
      add_shortcode(club_toppitchers,club_widget_top_pitchers);
      add_shortcode(club_lastgame,club_widget_lastgame);
      add_shortcode(club_nextgame,club_widget_nextgame);
      add_shortcode(club_batstats,club_widget_batstats);
      add_shortcode(club_roster,club_widget_roster);
      add_shortcode(club_pitchstats,club_widget_pitchstats);
      add_shortcode(club_fieldstats,club_widget_fieldstats);
      add_shortcode(club_playerstats,club_widget_playerstats);
     add_shortcode(club_top5stats,club_widget_top5stats);
      add_shortcode(club_schedule,club_widget_team_schedule);
      add_shortcode(club_practice,club_widget_team_practices);
      add_shortcode(club_tournament,club_widget_team_tournament);
      add_shortcode(club_fields,club_widget_locations_info);
      add_shortcode(club_gameresults,club_widget_game_results);

function  club_display_widget( $club_w_args )
{
  global $wpdb;
  $team = ($club_w_args['team']);
  $season = ($club_w_args['season']);
  switch  ($club_w_args['display_type'])
  {
    case 0:
      echo do_shortcode('[club_topbatters team="'.$team.'" season="'.$season.'"]');
      break;
    case 1:
      echo do_shortcode('[club_toppitchers team="'.$team.'" season="'.$season.'"]');
      break;
    case 2:
      echo do_shortcode('[club_lastgame team="'.$team.'" season="'.$season.'"]');
      break;
    case 3:
      echo do_shortcode('[club_nextgame team="'.$team.'" season="'.$season.'"]');
      break;
    case 4:
      echo do_shortcode('[club_batstats team="'.$team.'" season="'.$season.'"]');
      break;
    case 5:
      echo do_shortcode('[club_roster team="'.$team.'" season="'.$season.'"]');
      break;
    case 6:
      echo do_shortcode('[club_pitchstats team="'.$team.'" season="'.$season.'"]');
      break;
    case 7:
      echo do_shortcode('[club_fieldstats team="'.$team.'" season="'.$season.'"]');
      break;
    case 8:
      echo do_shortcode('[club_playerstats team="'.$team.'" season="'.$season.'"]');
      break;
//    case 9:
//      echo do_shortcode('[club_top5stats team="'.$team.'" season="'.$season.'"]');
//      break;
    case 9:
      echo do_shortcode('[club_schedule team="'.$team.'" season="'.$season.'"]');
      break;
    case 10:
      echo do_shortcode('[club_practice team="'.$team.'" season="'.$season.'"]');
      break;
    case 11:
      echo do_shortcode('[club_tournament team="'.$team.'" season="'.$season.'"]');
      break;
    case 12:
      echo do_shortcode('[club_fields team="'.$team.'" season="'.$season.'"]');
      break;
    case 13:
      echo do_shortcode('[club_gameresults team="'.$team.'" season="'.$season.'"]');
      break;
  }

  return;
}



function  club_widget_top_batters( $atts, $club_echo = true )
{
  global $wpdb;
  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];

     extract(shortcode_atts(array(
              'team' => $team,
              'season' => $season,
      ), $atts));
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));

  $heading_arr = array(
             __('Batting Avg', 'club'),
             __('Hits', 'club'),
             __('Home Runs', 'club'),
             __('RBI', 'club')
          );

  $club_content = NULL;

  for ( $i=0; $i < 4; $i++ )
  {
    $club_content .= 
    '   <table width="140px" class="club-results-table" id="club-results-table">
        <tr>
          <th style="text-align:left;">' . $heading_arr[$i] . '</th>
          <th>&nbsp;</th></tr>' . "\n";

    switch ($i)        
    {
      case 0:
        #Batting Average Leaders
        $players = club_get_batting_avg($season,$team);

        for ( $m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $BA) = $players[$m];
          $bAvg=$BA;
          $bAvg=strval($bAvg);
          $bAvg=str_pad($bAvg,5,"0");
          if($bAvg=="10000")
          {
            $bAvg=substr($bAvg,0,-1);
          }
          else
          {
            $bAvg=substr($bAvg,1);
            $bAvg=str_replace("0000","0",$bAvg);
          }
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  <td>' . $bAvg . '</td>
                </tr>';
        }	
        break;
      case 1:
        #Hits Leaders    
        $players = club_get_hit_leaders($season,$team);
        for ( $m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $baTotH) = $players[$m];
          $club_content .= '<tr>
                 <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  <td>' . $baTotH . '</td>
                </tr>';
        }
        break;
      case 2:
        #Homerun Leaders
        $players = club_get_homerun_leaders($season,$team);
        for ($m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $baTotHR) = $players[$m];
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  <td>' . $baTotHR . '</td>
                </tr>';
        }
        break;
      case 3:
        $players = club_get_rbi($season,$team);
        for ($m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $baTotRBI) = $players[$m];
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  <td>' . $baTotRBI . '</td>
                </tr>';
        }
        break;
    }

    $club_content .= '</table>' . "\n";
  }

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_top_pitchers($atts, $club_echo = true)
{
  global $wpdb;
  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $team,
              'season' => $season,
      ), $atts));
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));

    $heading_arr = array(
            __('ERA', 'club'),
       	    __('Strikeouts', 'club'),
            __('Innings', 'club'),
            __('Wins', 'club')
          );

  $club_content = NULL;

  for ( $i=0; $i < 4; $i++ )
  {
    $club_content .= 
    '   <table width="140px" class="club-results-table">
        <tr>
          <th style="text-align:left;">' . $heading_arr[$i] . '</th>
          <th>&nbsp;</th</tr>' . "\n";

    switch ($i)        
    {
      case 0:
        #ERA Leaders	
        $players = club_get_era_leaders($season,$team);
        for ( $m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $ERA) = $players[$m];
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
                  <td>' . $ERA . '</td>
                </tr>';
        }	
        break;
      case 1:
        #Strikeout Leaders    
        $players = club_get_strikeout_leaders($season,$team);
        for ( $m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $piTotSO) = $players[$m];
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  <td>' . $piTotSO . '</td>
                </tr>';
        }
        break;
      case 2:
        #Innings Pitched Leaders
        $players = club_get_innings_pitched_leaders($season,$team);
        for ($m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $piTotIP) = $players[$m];
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
	          <td>' . $piTotIP . '</td>
                </tr>';
        }
        break;
      case 3:
        #Wins Leader
        $players = club_get_wins_leaders($season,$team);
        for ($m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $piTotWin) = $players[$m];
          $club_content .= '<tr>
                  <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  <td>' . $piTotWin . '</td>
                </tr>';
        }
        break;
    }

    $club_content .= '</table>' . "\n";
  }

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_lastgame( $club_echo = true )
{
  global $wpdb;

  $defs  = club_get_defaults();
  $dteam = $defs['defaultTeam'];
  $timeformat = get_option('time_format');
  $dateformat = get_option('date_format');

  $game  = club_get_last_game_results();
  //echo "<pre>";print_r($game);
  $game_results_page = get_permalink(club_get_option('club_game_results_page'));
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';

  $club_content = NULL;

  if ( $game )
  {
    //echo "<pre>";print_r($game);
    list($gameID, $Gdate, $Gtime, $homeTeam, $visitingTeam, $hruns, $vruns, $fieldname) = $game;
    $date =date_create("$Gdate $Gtime");
    $club_content .= '<a class="game_results-page-link" href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">'.date_format($date,"$dateformat $timeformat").'</a><br />';
    if ($dteam == $homeTeam)
    {
      $club_content .= $visitingTeam . ' (' . $vruns . ')<br />';
      $club_content .= '<b>' . $homeTeam . ' (' . $hruns . ')</b><br />';
    }
    else
    {
      $club_content .= '<b>' . $visitingTeam . ' (' . $vruns . ')</b><br />';
      $club_content .= $homeTeam . ' (' . $hruns . ')<br />';
    }
  }
  else
  {
    $club_content .= __('There are no results.', 'club') . "\n";
  }

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_nextgame( $club_echo = true )
{
  global $wpdb;

  $defs  = club_get_defaults();
  $dteam = $defs['defaultTeam'];
  $locations_page = get_permalink(club_get_option('club_locations_page'));
  $timeformat = get_option('time_format');
  $dateformat = get_option('date_format');
  $game  = club_get_next_game();
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';

  $club_content = NULL;

  if ( $game )
  {
    list($gameID, $Gdate, $Gtime, $homeTeam, $visitingTeam, $field) = $game;

    $date =date_create("$Gdate $Gtime");
    $club_content .= '<a class="game_results-page-link">'.date_format($date,"$dateformat $timeformat").'</a><br />';
    if ($dteam == $homeTeam)
    {
      $club_content .= 'vs. ' . $visitingTeam;
    }
    else
    {
      $club_content .= 'vs. ' . $homeTeam;
    }
    $club_content .= '</b><br /> at <a href="' . $locations_page . $qstring . 'field='.$field.'" title="">'.$field.'</a>';
  }
  else
  {
    $club_content .= __('There are no upcoming games.', 'club') . "\n";
  }

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_batstats( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $team,
              'season' => $season,
      ), $atts));
  $batting_num = club_get_option('club_batting_num');
  $batting_name = club_get_option('club_batting_name');
  $batting_ab = club_get_option('club_batting_ab');
  $batting_r = club_get_option('club_batting_r');
  $batting_h = club_get_option('club_batting_h');
  $batting_2b = club_get_option('club_batting_2b');
  $batting_3b = club_get_option('club_batting_3b');
  $batting_hr = club_get_option('club_batting_hr');
  $batting_re = club_get_option('club_batting_re');
  $batting_fc = club_get_option('club_batting_fc');
  $batting_sf = club_get_option('club_batting_sf');
  $batting_hp = club_get_option('club_batting_hp');
  $batting_rbi = club_get_option('club_batting_rbi');
  $batting_ba = club_get_option('club_batting_ba');
  $batting_obp = club_get_option('club_batting_obp');
  $batting_slg = club_get_option('club_batting_slg');
  $batting_ops = club_get_option('club_batting_ops');
  $batting_bb = club_get_option('club_batting_bb');
  $batting_k = club_get_option('club_batting_k');
  $batting_lob = club_get_option('club_batting_lob');
  $batting_sb = club_get_option('club_batting_sb');
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));

  $club_content = NULL;
  $club_content .= '<table class="club-results-table">
		    <thead>
		      <tr>';
		      if ($batting_num == 'true')
                        $club_content .= '<th>#</th>';
                      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_name == 'true')                      
                        $club_content .= '<th>' .__('Batter', 'club') . '</th>';
                      else $club_content .= '<th style="display:none"></th>';  
		      if ($batting_ab == 'true')                        
                        $club_content .= '<th>AB</th>';
                      else $club_content .= '<th style="display:none"></th>';  
		      if ($batting_r == 'true')                        
                        $club_content .= '<th>R</th>';
                      else $club_content .= '<th style="display:none"></th>';  
		      if ($batting_h == 'true')                        
                        $club_content .= '<th>H</th>';
                      else $club_content .= '<th style="display:none"></th>';  
		      if ($batting_2b == 'true')
		      	$club_content .= '<th>2B</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_3b == 'true')
		      	$club_content .= '<th>3B</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_hr == 'true')
		      	$club_content .= '<th>HR</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_re == 'true')
		      	$club_content .= '<th>RE</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_fc == 'true')
		      	$club_content .= '<th>FC</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_sf == 'true')
		      	$club_content .= '<th>SF</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_hp == 'true')
		      	$club_content .= '<th>HP</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_rbi == 'true')
		      	$club_content .= '<th>RBI</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_ba == 'true')                        
                        $club_content .= '<th>BA</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_obp == 'true')                        
                        $club_content .= '<th>OBP</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_slg == 'true')                        
                        $club_content .= '<th>SLG</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_ops == 'true')                        
                        $club_content .= '<th>OPS</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_bb == 'true')                        
                        $club_content .= '<th>BB</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_k == 'true')                        
                        $club_content .= '<th>K</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_lob == 'true')                        
                        $club_content .= '<th>LOB</th>';
		      else $club_content .= '<th style="display:none"></th>';
		      if ($batting_sb == 'true')                        
                        $club_content .= '<th>SB</th>';
		      else $club_content .= '<th style="display:none"></th>';
  $club_content .= '
		      </tr>
		    </thead>
		    <tbody>
';
  //////////////////////////////////
  //BATTING STATS FOR CURRENT SEASON
  //////////////////////////////////
  if ( $team == 'league' )
  {
  $query = "SELECT p.playerID,p.lastname,p.firstname,p.middlename,p.jerseyNum,".
        " sum(baRuns) as baR, sum(baAb) as baAB, sum(ba1b+ba2b+ba3b+baHR) as baH,sum(ba1b) as ba1b, sum(ba2b) as ba2b, sum(ba3b) as ba3b,".
        " sum(baHR) as baHR, sum(baRE) as baRE, sum(baFC) as baFC, sum(baSF) as baSF, sum(baHP) as baHP, sum(baRBI) as baRBI,".
        " sum(baBB) as baBB, sum(baK) as baK, sum(baLOB) as baLOB, sum(baSB) as baSB".
        " FROM ".$wpdb->prefix."clubhouseManager_players p,".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s".
        " WHERE s.season='".$season."' ".
        " AND p.playerID=st.playerID AND st.gameID=s.gameID AND p.season=s.season ".
        " GROUP BY p.playerID ORDER BY lastname,firstname ASC";
  } else {
  $query = "SELECT p.playerID,p.lastname,p.firstname,p.middlename,p.jerseyNum,".
      	" sum(baRuns) as baR, sum(baAb) as baAB, sum(ba1b+ba2b+ba3b+baHR) as baH,sum(ba1b) as ba1b, sum(ba2b) as ba2b, sum(ba3b) as ba3b,".
      	" sum(baHR) as baHR, sum(baRE) as baRE, sum(baFC) as baFC, sum(baSF) as baSF, sum(baHP) as baHP, sum(baRBI) as baRBI,".
      	" sum(baBB) as baBB, sum(baK) as baK, sum(baLOB) as baLOB, sum(baSB) as baSB".
      	" FROM ".$wpdb->prefix."clubhouseManager_players p,".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s".
      	" WHERE teamName='".$team."' AND s.season='".$season."' ".
      	" AND p.playerID=st.playerID AND st.gameID=s.gameID AND p.season=s.season ".
      	" GROUP BY p.playerID ORDER BY lastname,firstname ASC";
  }
  $result = mysql_query($query);
  while ( $row = mysql_fetch_array($result) )
    $presults[] = $row;

  for ($m=0; $m < count($presults); $m++) 
  {
    if( count($presults) )
    {
      list($playerID, $lastname, $firstname, $middlename, $jerseyNum,$baR, $baAB, $baH,$ba1b, $ba2b, $ba3b, $baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB, $baK, $baLOB, $baSB) = $presults[$m];
      $hits=$ba1b+$ba2b+$ba3b+$baHR;
      if ( $baAB > 0 )
        $slg=round((($ba1b+($ba2b*2)+($ba3b*3)+($baHR*4))/$baAB),3);
	$slg=number_format("$slg",3);
	$slg = ltrim($slg,"0"); 
      if($slg==0){
        $slg=".000";
         }
      if ( $baAB == 0 ){
	$slg=".000";
	}
      
      if ( ($baAB+$baBB) > 0 )
        $obp=($hits+$baBB+$baHP)/($baAB+$baBB+$baHP+$baSF);
        $obp=number_format("$obp", 3);
        $obp = ltrim($obp,"0");
      if (($baAB+$baBB) == 0)
	{$obp = ".000";}
      if ($obp == 0)
	{$obp=".000";}

      if ( $baAB > 0 )
	$ops=($obp+$slg);	   
      	$ops=number_format("$ops",3);
	$ops = ltrim($ops,"0"); 
      if ( $baAB == 0)
      {
	$ops = ".000";
      }
      if ( $baAB > 0)          			
        $ba=round($hits/$baAB,3);
      $ba=strval($ba);
      $ba=str_pad($ba,5,"0"); 
      if($ba=="10000")
      {
	$ba=substr($ba,0,-1);
      }
      if ( $baAB == 0)
	{$ba = ".000";}
      if ($ba == 0)
	{$ba = ".000";}
      else
      {
	$ba=substr($ba,1);
	$ba=str_replace("0000","0",$ba); 
     }
    }

$club_content .= '<tr>';
		      if ($batting_num == 'true')
                        $club_content .= '<td>'.$jerseyNum.'</td>';
                      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_name == 'true')                      
                        $club_content .= '<td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>';
                      else $club_content .= '<td style="display:none"></td>';  

    if( count($presults) )
    {
		      if ($batting_ab == 'true')                        
                        $club_content .= '<td align="center">'.$baAB.'</td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_r == 'true')                        
                        $club_content .= '<td align="center">'.$baR.'</td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_h == 'true')                        
                        $club_content .= '<td align="center">'.$baH.'</td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_2b == 'true')
		      	$club_content .= '<td align="center">'.$ba2b.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_3b == 'true')
		      	$club_content .= '<td align="center">'.$ba3b.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_hr == 'true')
		      	$club_content .= '<td align="center">'.$baHR.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_re == 'true')
		      	$club_content .= '<td align="center">'.$baRE.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_fc == 'true')
		      	$club_content .= '<td align="center">'.$baFC.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_sf == 'true')
		      	$club_content .= '<td align="center">'.$baSF.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_hp == 'true')
		      	$club_content .= '<td align="center">'.$baHP.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_rbi == 'true')
		      	$club_content .= '<td align="center">'.$baRBI.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_ba == 'true')                        
                        $club_content .= '<td align="center">'.$ba.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_obp == 'true')                        
                        $club_content .= '<td align="center">'.$obp.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_slg == 'true')                        
                        $club_content .= '<td align="center">'.$slg.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_ops == 'true')                        
                        $club_content .= '<td align="center">'.$ops.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_bb == 'true')                        
                        $club_content .= '<td align="center">'.$baBB.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_k == 'true')                        
                        $club_content .= '<td align="center">'.$baK.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_lob == 'true')                        
                        $club_content .= '<td align="center">'.$baLOB.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_sb == 'true')                        
                        $club_content .= '<td align="center">'.$baSB.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
    }

    $club_content .= '</tr>';
  }
///////////////////////////////////////
//CALCULATE BATTING STATS TOTALS FOR CURRENT SEASON
///////////////////////////////////////
  if ( $team == 'league' )
  {
  $query = "SELECT sum(baRuns) as baR, sum(baAb) as baAB, sum(ba1b) as ba1b, sum(ba2b) as ba2b, sum(ba3b) as ba3b,  " .
           "       sum(baHR) as baHR, sum(baRE) as baRE, sum(baFC) as baFC, sum(baSF) as baSF, sum(baHP) as baHP, sum(baRBI) as baRBI, " .
           "       sum(baBB) as baBB, sum(baK) as baK, sum(baLOB) as baLOB, sum(baSB) as baSB " .
           "  FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s " .
           " WHERE s.season='".$season."' AND st.gameID=s.gameID AND " .
           "       p.playerID=st.playerID AND p.season=s.season";
  } else {
  $query = "SELECT sum(baRuns) as baR, sum(baAb) as baAB, sum(ba1b) as ba1b, sum(ba2b) as ba2b, sum(ba3b) as ba3b,  " . 
           "       sum(baHR) as baHR, sum(baRE) as baRE, sum(baFC) as baFC, sum(baSF) as baSF, sum(baHP) as baHP, sum(baRBI) as baRBI, " .
           "       sum(baBB) as baBB, sum(baK) as baK, sum(baLOB) as baLOB, sum(baSB) as baSB " .
           "  FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s " .
           " WHERE teamName='".$team."' AND s.season='".$season."' AND st.gameID=s.gameID AND " .
           "       p.playerID=st.playerID AND p.season=s.season";
  }
  $result = mysql_query($query);
  while ( $row = mysql_fetch_array($result) )
    $gresults[] = $row;

  for ($m=0; $m < count($gresults); $m++) 
  {
    // see above  $baLOB,
    list($baR, $baAB, $ba1b, $ba2b, $ba3b, $baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB, $baK, $baLOB, $baSB) = $gresults[$m];
      $hits=$ba1b+$ba2b+$ba3b+$baHR;
      if ( $baAB > 0 )
        $slg=round((($ba1b+($ba2b*2)+($ba3b*3)+($baHR*4))/$baAB),3);
        $slg=number_format("$slg",3);
        $slg = ltrim($slg,"0");
      if($slg==0){
        $slg=".000";
         }
      if ( $baAB == 0 ){
        $slg=".000";
        }

      if ( ($baAB+$baBB) > 0 )
        $obp=($hits+$baBB+$baHP)/($baAB+$baBB+$baHP+$baSF);
        $obp=number_format("$obp", 3);
        $obp = ltrim($obp,"0");
      if (($baAB+$baBB) == 0)
        {$obp = ".000";}
      if ($obp == 0)
        {$obp=".000";}

      if ( $baAB > 0 )
        $ops=($obp+$slg);
        $ops=number_format("$ops",3);
        $ops = ltrim($ops,"0");
      if ( $baAB == 0)
      {
        $ops = ".000";
      }
      if ( $baAB > 0)
        $ba=round($hits/$baAB,3);
      $ba=strval($ba);
      $ba=str_pad($ba,5,"0");
      if($ba=="10000")
      {
        $ba=substr($ba,0,-1);
      }
      if ( $baAB == 0)
        {$ba = ".000";}
      if ($ba == 0)
        {$ba = ".000";}
      else
      {
        $ba=substr($ba,1);
        $ba=str_replace("0000","0",$ba);
     }

    $club_content .= '</tbody><tr>';
		      if ($batting_num == 'true')
                        $club_content .= '<td>&nbsp;</td>';
                      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_name == 'true')                      
                        $club_content .= '<td style="text-align:left;"><b>TOTAL</b></td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_ab == 'true')                        
                        $club_content .= '<td align="center">'.$baAB.'</td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_r == 'true')                        
                        $club_content .= '<td align="center">'.$baR.'</td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_h == 'true')                        
                        $club_content .= '<td align="center">'.$baH.'</td>';
                      else $club_content .= '<td style="display:none"></td>';  
		      if ($batting_2b == 'true')
		      	$club_content .= '<td align="center">'.$ba2b.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_3b == 'true')
		      	$club_content .= '<td align="center">'.$ba3b.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_hr == 'true')
		      	$club_content .= '<td align="center">'.$baHR.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_re == 'true')
		      	$club_content .= '<td align="center">'.$baRE.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_fc == 'true')
		      	$club_content .= '<td align="center">'.$baFC.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_sf == 'true')
		      	$club_content .= '<td align="center">'.$baSF.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_hp == 'true')
		      	$club_content .= '<td align="center">'.$baHP.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_rbi == 'true')
		      	$club_content .= '<td align="center">'.$baRBI.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_ba == 'true')                        
                        $club_content .= '<td align="center">'.$ba.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_obp == 'true')                        
                        $club_content .= '<td align="center">'.$obp.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_slg == 'true')                        
                        $club_content .= '<td align="center">'.$slg.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_ops == 'true')                        
                        $club_content .= '<td align="center">'.$ops.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_bb == 'true')                        
                        $club_content .= '<td align="center">'.$baBB.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_k == 'true')                        
                        $club_content .= '<td align="center">'.$baK.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_lob == 'true')                        
                        $club_content .= '<td align="center">'.$baLOB.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
		      if ($batting_sb == 'true')                        
                        $club_content .= '<td align="center">'.$baSB.'</td>';
		      else $club_content .= '<td style="display:none"></td>';
  }

  $club_content .= '</tr></table>
      <div><a href="#TB_inline?height=300&width=300&inlineId=club_batting_stat_key_popup" class="thickbox">' . __('Stat Key', 'club') . '</a></div>
      <div id="club_batting_stat_key_popup" style="display:none">
      <h2>' . __('Batting Stats Key', 'club') . '</h2>
        <div>
        <table class="club-stat-key">
	  <tr><th><u>' . __('Key', 'club') . '</u></th><th><u>' . __('Meaning', 'club') . '</u></th></tr>
	  <tr><td colspan="2"><hr /></td></tr>
	  <tr><td>AB</td><td>' . __('At Bat', 'club') . '</td></tr>
	  <tr><td>R</td><td>' . __('Runs', 'club') . '</td></tr>
    	  <tr><td>H</td><td>' . __('Hits', 'club') . '</td></tr>
	  <tr><td>2B</td><td>' . __('Doubles', 'club') . '</td></tr>
	  <tr><td>3B</td><td>' . __('Triples', 'club') . '</td></tr>
	  <tr><td>HR</td><td>' . __('Home Runs', 'club') . '</td></tr>
	  <tr><td>RE</td><td>' . __('Reach on Error', 'club') . '</td></tr>
	  <tr><td>FC</td><td>' . __('Fielders Choice', 'club') . '</td></tr>
          <tr><td>SF</td><td>' . __('Sacrifice Fly', 'club') . '</td></tr>
	  <tr><td>HP</td><td>' . __('Hit by Pitch', 'club') . '</td></tr>
	  <tr><td>RBI</td><td>' . __('Runs Batted In', 'club') . '</td></tr>
	  <tr><td>BA</td><td>' . __('Batting Average', 'club') . '</td></tr>
	  <tr><td>OBP</td><td>' . __('On-Base Percentage', 'club') . '</td></tr>
	  <tr><td>SLG</td><td>' . __('Slugging Percentage', 'club') . '</td></tr>
	  <tr><td>OPS</td><td>' . __('On-Base Plus Slugging', 'club') . '</td></tr>
	  <tr><td>BB</td><td>' . __('Bases on Balls (Walks)', 'club') . '</td></tr>
	  <tr><td>K</td><td>' . __('Strikeouts', 'club') . '</td></tr>
	  <tr><td>LOB</td><td>' . __('Left on Base', 'club') . '</td></tr>
	  <tr><td>SB</td><td>' . __('Stolen Bases', 'club') . '</td></tr>
        </table>
        </div>
        <br>&nbsp;<br>
        <strong>Just click outside the pop-up to close it.</strong>
    </div>';

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_roster( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $team,
              'season' => $season,
      ), $atts));
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));
  $roster_img = club_get_option('club_roster_img');
   $roster_num = club_get_option('club_roster_num');
  $roster_name = club_get_option('club_roster_name');
  $roster_pos = club_get_option('club_roster_pos');
  $roster_bats = club_get_option('club_roster_bats');
  $roster_throws = club_get_option('club_roster_throws');
  $roster_home = club_get_option('club_roster_home');
  $roster_school = club_get_option('club_roster_school');
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $club_content = NULL;
  $club_content .= '<table class="club-schedule-table">
        <thead>
	<tr>';
	  if ($roster_img == 'true')
            $club_content .= '<th>' . __('img', 'club') . '</th>';
	  else $club_content .= '<th style="display:none">' . __('img', 'club') . '</th>';
      if ($roster_num == 'true')
            $club_content .= '<th>' . __('#', 'club') . '</th>';
    else $club_content .= '<th style="display:none">' . __('#', 'club') . '</th>';
	  if ($roster_name == 'true')
            $club_content .= '<th style="text-align:left;">' . __('Player', 'club') . '</th>';
	  else $club_content .= '<th style="text-align:left; display:none">' . __('Player', 'club') . '</th>';
          if ($roster_pos == 'true')
	    $club_content .= '<th>' . __('Pos', 'club') . '</th>';
          else $club_content .= '<th style="display:none">' . __('Pos', 'club') . '</th>';
          if ($roster_bats == 'true')
	    $club_content .= '<th>' . __('Bats', 'club') . '</th>';
          else $club_content .= '<th style="display:none">' . __('Bats', 'club') . '</th>';
          if ($roster_throws == 'true')
	    $club_content .= '<th>' . __('Throws', 'club') . '</th>';
          else $club_content .= '<th style="display:none">' . __('Throws', 'club') . '</th>';
          if ($roster_home == 'true')
	    $club_content .= '<th style="text-align:left;">' . __('Home', 'club') . '</th>';
	  else '<th style="text-align:left; display:none;">' . __('Home', 'club') . '</th>';
          if ($roster_school == 'true')
	    $club_content .= '<th style="text-align:left;">' . __('School', 'club') . '</th>';
	  else '<th style="text-align:left; display:none;">' . __('School', 'club') . '</th>';
  $club_content .= '
        </tr>
	</thead>
	<tbody>';
  $query = "SELECT playerID,lastname,firstname,middlename,/*img,*/jerseyNum,positions,bats,throws,city,state,school,".
	   "((date_format(now(),'%Y') - date_format(bdate,'%Y')) - (date_format(now(),'00-%m-%d') < date_format(bdate,'00-%m-%d'))) AS age".
           " FROM ".$wpdb->prefix."clubhouseManager_players".
	   " WHERE season='".$season."' AND teamName='".$team."'".
           " GROUP BY playerID ORDER BY lastname";

  $result = mysql_query($query);
  if ( $result )
    while ( $row = mysql_fetch_array($result) )
      $tresults[] = $row;

  for ($m=0; $m < count($tresults); $m++)
  {
    list($playerID,$lastname,$firstname,$middlename,$img,$positions,$bats,$throws,$city,$state,$school,$age) = $tresults[$m];
    if ($age>100)
      $age="&nbsp;";
    $location=$city.', '.$state;
    if ($state==null)
      $location=$city;
    if ($city==null)
      $location=$state;

    $club_content .= '<tr>';
          		    if ($roster_img == 'true')
            		      $club_content .= '<td>'.$img.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
                                         

                     if ($roster_num == 'true')
                      $club_content .= '<td>'.$jerseyNum.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
		            if ($roster_name == 'true')
 		              $club_content .= '<td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page .  $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>';
 		            else $club_content .= '<td style="text-align:left; display:none"></td>';
		            if ($roster_pos == 'true')
		              $club_content .= '<td>'.$positions.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
		            if ($roster_bats == 'true')
		              $club_content .= '<td style="text-align:center;">'.$bats.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
		            if ($roster_throws == 'true')
		              $club_content .= '<td style="text-align:center;">'.$throws.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
		            if ($roster_home == 'true')
		              $club_content .= '<td style="text-align:left;">'.$location.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
		            if ($roster_school == 'true')
		              $club_content .= '<td style="text-align:left;">'.$school.'</td>';
                            else $club_content .= '<td style="text-align:left; display:none"></td>';
  $club_content .= '
                        </tr>';
  }
     $club_content .= '</tbody></table>';
  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;


}


function  club_widget_pitchstats( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $team,
              'season' => $season,
      ), $atts));
  $pitching_num = club_get_option('club_pitching_num');
  $pitching_name = club_get_option('club_pitching_name');
  $pitching_w = club_get_option('club_pitching_w');
  $pitching_l = club_get_option('club_pitching_l');
  $pitching_s = club_get_option('club_pitching_s');
  $pitching_ip = club_get_option('club_pitching_ip');
  $pitching_h = club_get_option('club_pitching_h');
  $pitching_r = club_get_option('club_pitching_r');
  $pitching_er = club_get_option('club_pitching_er');
  $pitching_bb = club_get_option('club_pitching_bb');
  $pitching_k = club_get_option('club_pitching_k');
  $pitching_era = club_get_option('club_pitching_era');
  $pitching_whip = club_get_option('club_pitching_whip');
  $erainnings = club_get_option('club_era_innings');
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));
  $SORTBY    = $_POST['club_widget_tb_head_pitchstats_sortby'];
  $SORTORDER = $_POST['club_widget_tb_head_pitchstats_sortorder'];
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';

  $club_content = NULL;
		
  $club_content .= '<table class="club-results-table">
		<thead>
		  <tr>';
   		  if ( $pitching_num == 'true')
   		    $club_content .= '<th>#</th>';
   		  else $club_content .= '<th style="display:none"></th>';
   		  if ( $pitching_name == 'true')
                    $club_content .= '<th>' . __('Pitching', 'club') . '</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_w == 'true')
                    $club_content .= '<th>W</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_l == 'true')
                    $club_content .= '<th>L</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_s == 'true')
                    $club_content .= '<th>S</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_ip == 'true')
                    $club_content .= '<th>IP</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_h == 'true')
                    $club_content .= '<th>H</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_r == 'true')
                    $club_content .= '<th>R</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_er == 'true')
                    $club_content .= '<th>ER</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_bb == 'true')
                    $club_content .= '<th>BB</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_k == 'true')
                    $club_content .= '<th>K</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_era == 'true')
                    $club_content .= '<th>ERA</th>';
   		  else $club_content .= '<th style="display:none"></th>';
                  if ( $pitching_whip == 'true')
                    $club_content .= '<th>WHIP</th>';
                  else $club_content .= '<th style="display:none"></th>';
  $club_content .= '</tr>
		</thead> 
		<tbody>';	

  //PITCHING STATS
  if ( $team == 'league' ) 
  {
  $query = "SELECT p.playerID, lastname,firstname,middlename,jerseyNum,sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave, ".
                 "sum(piIP) as piIP, sum(piHits) as piHits, sum(piRuns) as piRuns, sum(piER) as piER, ".
                 "sum(piWalks) as piWalks, sum(piSO) as piSO ".
           "  FROM ".$wpdb->prefix."clubhouseManager_stats st, ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_schedule s ".
           " WHERE s.gameID=st.gameID AND s.season='".$season."' AND p.season=s.season "./*AND piIP>0 ".*/
                " AND st.playerID=p.playerID GROUP BY p.playerID ORDER BY lastname,firstname ASC";
  } else {
  $query = "SELECT p.playerID, lastname,firstname,middlename,jerseyNum,sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave, ".
		 "sum(piIP) as piIP, sum(piHits) as piHits, sum(piRuns) as piRuns, sum(piER) as piER, ".
		 "sum(piWalks) as piWalks, sum(piSO) as piSO ".
           "  FROM ".$wpdb->prefix."clubhouseManager_stats st, ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_schedule s ".		
           " WHERE s.gameID=st.gameID AND s.season='".$season."' AND teamName='".$team."' AND p.season=s.season "./*AND piIP>0 ".*/
		" AND st.playerID=p.playerID GROUP BY p.playerID ORDER BY lastname,firstname ASC";
  }
  $result = mysql_query($query);
  if ( $result )
    while ( $row = mysql_fetch_array($result) )
      $presults[] = $row;

  for ($m=0; $m < count($presults); $m++) 
  {
    list($playerID,$lastname, $firstname, $middlename, $jerseyNum,$piWin,$piLose, $piSave, $piIP, $piHits, $piRuns, $piER, $piWalks, $piSO) = $presults[$m];
    if ($piIP){
      $ERA=($piER/$piIP)*$erainnings;
      $ERA=number_format($ERA, 2, '.', '');
      $WHIP=(($piWalks + $piHits) / $piIP);
      $WHIP=number_format($WHIP, 2, '.', '');
    }
    $club_content .= '<tr>'; 
                  if ( $pitching_num == 'true')
                    $club_content .= '<td>'.$jerseyNum.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_name == 'true')
                    $club_content .= '<td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_w == 'true')
                    $club_content .= '<td>'.$piWin.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_l == 'true')
                    $club_content .= '<td>'.$piLose.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_s == 'true')
                    $club_content .= '<td>'.$piSave.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_ip == 'true')
                    $club_content .= '<td>'.$piIP.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_h == 'true')
                    $club_content .= '<td>'.$piHits.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_r == 'true')
                    $club_content .= '<td>'.$piRuns.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_er == 'true')
                    $club_content .= '<td>'.$piER.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_bb == 'true')
                    $club_content .= '<td>'.$piWalks.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_k == 'true')
                    $club_content .= '<td>'.$piSO.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_era == 'true')
                    $club_content .= '<td>'.$ERA.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_whip == 'true')
                    $club_content .= '<td>'.$WHIP.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
$club_content .= '</tr>';
  }
		
  //SEASON PITCHING TOTAL
  unset($presults);
  
  if ( $team == 'league' ) 
  {
  $query="SELECT sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave, sum(piIP) "
                        ."as piIP, sum(piHits) as piHits, sum(piRuns) as piRuns, sum(piER) as piER, "
                        ."sum(piWalks) as piWalks, sum(piSO) as piSO " .
         "  FROM ".$wpdb->prefix."clubhouseManager_players p,".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s " .
         " WHERE pitchOrd>0 AND s.season='".$season."' AND p.playerID=st.playerID AND " .
         "       st.gameID=s.gameID AND p.season=s.season";
  } else {
  $query="SELECT sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave, sum(piIP) "
                        ."as piIP, sum(piHits) as piHits, sum(piRuns) as piRuns, sum(piER) as piER, "
                        ."sum(piWalks) as piWalks, sum(piSO) as piSO " .
         "  FROM ".$wpdb->prefix."clubhouseManager_players p,".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s " .
         " WHERE pitchOrd>0 AND teamName='".$team."' AND s.season='".$season."' AND p.playerID=st.playerID AND " .
         "       st.gameID=s.gameID AND p.season=s.season";
  }
  $result = mysql_query($query);
    while ( $row = mysql_fetch_array($result) )
      $presults[] = $row;
  
  for ($m=0; $m < count($presults); $m++) 
  {
    list($piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO) = $presults[$m];
    if ($piIP){
      $ERA=($piER/$piIP)*$erainnings;
      $ERA=number_format($ERA, 2, '.', '');
      $WHIP=(($piWalks + $piHits) / $piIP);
      $WHIP=number_format($WHIP, 2, '.', '');
    }
    $club_content .= '</tbody><tr>';
                  if ( $pitching_num == 'true')
                    $club_content .= '<td>&nbsp;</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_name == 'true')
                    $club_content .= '<td style="text-align:left;"><b>TOTAL</b></td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_w == 'true')
                    $club_content .= '<td>'.$piWin.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_l == 'true')
                    $club_content .= '<td>'.$piLose.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_s == 'true')
                    $club_content .= '<td>'.$piSave.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_ip == 'true')
                    $club_content .= '<td>'.$piIP.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_h == 'true')
                    $club_content .= '<td>'.$piHits.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_r == 'true')
                    $club_content .= '<td>'.$piRuns.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_er == 'true')
                    $club_content .= '<td>'.$piER.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_bb == 'true')
                    $club_content .= '<td>'.$piWalks.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_k == 'true')
                    $club_content .= '<td>'.$piSO.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_era == 'true')
                    $club_content .= '<td>'.$ERA.'</td>';
                  else $club_content .= '<td style="display:none"></td>';
                  if ( $pitching_whip == 'true')
                    $club_content .= '<td>'.$WHIP.'</td>';
                  else $club_content .= '<td style="display:none"></td>';

$club_content .= ' </tr>
		 </table>';
  } 

  $club_content .= '
    <div><a href="#TB_inline?height=300&width=300&inlineId=club_pitching_stat_key_popup" class="thickbox">' . __('Stat Key', 'club') . '</a></div>
    <div id="club_pitching_stat_key_popup" style="display:none">
    <h2>' . __('Pitching Stats Key', 'club') . '</h2>
     <div>
      <table class="club-stat-key">
	<tr><td><u>' . __('Key', 'club') . '</u></td><td><u>' . __('Meaning', 'club') . '</u></td></tr>
	<tr><td colspan="2"><hr /></td></tr>
	<tr><td>W</td><td>' . __('Wins', 'club') . '</td></tr>
	<tr><td>L</td><td>' . __('Losses', 'club') . '</td></tr>
        <tr><td>S</td><td>' . __('Save', 'club') . '</td></tr>
	<tr><td>IP</td><td>' . __('Innings Pitched', 'club') . '</td></tr>
	<tr><td>H</td><td>' . __('Hits', 'club') . '</td></tr>
	<tr><td>R</td><td>' . __('Runs', 'club') . '</td></tr>
	<tr><td>ER</td><td>' . __('Earned Runs', 'club') . '</td></tr>
	<tr><td>BB</td><td>' . __('Walks (Bases on Balls)', 'club') . '</td></tr>
	<tr><td>K</td><td>' . __('Strikeouts', 'club') . '</td></tr>
	<tr><td>ERA</td><td>' . __('Earned Run Average', 'club') . '</td></tr>
        <tr><td>WHIP</td><td>' . __('Walks plus Hits per Inning Pitched', 'club') . '</td></tr>
      </table>
      </div>
      <br>&nbsp;<br>
      <strong>Just click outside the pop-up to close it.</strong>
   </div>';

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_fieldstats( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $dteam   = $defs['defaultTeam'];
  $dseason = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $dteam,
              'season' => $dseason,
      ), $atts));
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  
  $club_content = NULL;

  $club_content .= '<table class="club-results-table">
		<thead>
		<tr>
		  <th>#</th>
                  <th>' . __('Fielder', 'club') . '</th>
                 

                    <th>#</th>
                  <th>PO</th>
                  <th>A</th>
                  <th>E</th>
                  <th>FP</th>
		</tr>
		</thead>
		<tbody
';

  //Fielding STATS
  if ( $dteam == 'league' )
  {
  $query = "SELECT p.playerID,p.lastname,p.firstname,p.middlename,p.jerseyNum,".
                " sum(st.fiPO)as fiPO, sum(st.fiA) as fiA, sum(st.fiE) as fiE ".
                " FROM ".$wpdb->prefix."clubhouseManager_players p,".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s ".
                " WHERE p.playerID=st.playerID AND s.season='".$season."'".
                " AND st.gameID=s.gameID  GROUP BY p.playerID ORDER BY lastname,firstname ASC";
  } else {
  $query = "SELECT p.playerID,p.lastname,p.firstname,p.middlename,p.jerseyNum,".
		" sum(st.fiPO)as fiPO, sum(st.fiA) as fiA, sum(st.fiE) as fiE ".
		" FROM ".$wpdb->prefix."clubhouseManager_players p,".$wpdb->prefix."clubhouseManager_stats st,".$wpdb->prefix."clubhouseManager_schedule s ".
		" WHERE p.playerID=st.playerID AND teamName='".$team."' AND s.season='".$season."'".
		" AND st.gameID=s.gameID  GROUP BY p.playerID ORDER BY lastname,firstname ASC";
  }	
 
  $result = mysql_query($query);
  if ($result)
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $presults[] = $row;
    }
  }

  for ($m=0; $m < count($presults); $m++) 
  {
    list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $fiPO,$fiA, $fiE) = $presults[$m];
    $SumfiPO += $fiPO;
    $SumfiA += $fiA;
    $SumfiE += $fiE;
		
    if ( (($fiPO+$fiA+$fiE)) > 0 )
      $FP= str_pad(str_replace("0.",".",round(($fiPO+$fiA)/($fiPO+$fiA+$fiE),3)),4,"0",STR_PAD_RIGHT);
    if ($FP == "1000") 
      $FP = "1.000";
    if ($FP == "0") 
      $FP = ".000";

    $club_content .= '<tr><td>'.$jerseyNum.'</td>
		  	    <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
			    <td>'.$fiPO.'</td>
		            <td>'.$fiA.'</td>
		            <td>'.$fiE.'</td>
		            <td>'.$FP.'</td>
		        </tr>';
  }

  if ( ($SumfiPO+$SumfiA+$SumfiE) > 0 )
    $SumfiFP = str_pad(str_replace("0.",".",round(($SumfiPO+$SumfiA)/($SumfiPO+$SumfiA+$SumfiE),3)),4,"0",STR_PAD_RIGHT);

  $club_content .= '</tbody><tr><td></td><td><strong>TOTALS</strong></td>
	<td><strong>'.$SumfiPO.'</strong></td>
	<td><strong>'.$SumfiA.'</strong></td>
	<td><strong>'.$SumfiE.'</strong></td>
	<td><strong>'.$SumfiFP.'</strong></td>
	</tr>
      </table>';

  $club_content .= '
      <div><a href="#TB_inline?height=300&width=300&inlineId=club_field_stat_key_popup" class="thickbox">' . __('Stat Key', 'club') . '</a></div>
      <div id="club_field_stat_key_popup" style="display:none">
      <h2>' . __('Fielding Stats Key', 'club') . '</h2>
        <div>
          <table class="club-results-table">
	  <tr><td><u>' . __('Key', 'club') . '</u></td><td><u>' . __('Meaning', 'club') . '</u></td></tr>
	  <tr><td colspan="2"><hr /></td></tr>
	  <tr><td>PO</td><td>' . __('Putouts', 'club') . '</td></tr>
	  <tr><td>A</td><td>' . __('Assists', 'club') . '</td></tr>
          <tr><td>E</td><td>' . __('Errors', 'club') . '</td></tr>
	  <tr><td>FP</td><td>' . __('Fielding Percentage', 'club') . '</td></tr>
        </table>
      </div>
      <br>&nbsp;<br>
      <strong>Just click outside the pop-up to close it.</strong>
    </div>';
  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;
 
  return;
}


function  club_widget_playerstats( $player_id = NULL, $club_echo = true )
{

  global $wpdb;
  global $wp_query;

  $defs    = club_get_defaults();
  $dseason = $defs['defaultSeason'];
  $dteam   = $defs['defaultTeam'];
  $erainnings = club_get_option('club_era_innings');
  $team_leaders = club_get_option('club_team_leaders');
  $player_id = $_COOKIE["playerID"];
  $game_results_page = get_permalink(club_get_option('club_game_results_page'));
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $club_content = NULL;
	
  if(!$player_id)
    $player_id = club_get_option('club_widget_playerstats_player_id');

  $query = 'SELECT playerID,teamname,firstname, middlename,lastname,positions,bats,throws,height,weight,jerseyNum,picLocation,profile ' .
           '  FROM ' . $wpdb->prefix . 'clubhouseManager_players WHERE playerID = ' . $player_id . ' AND season="' . $dseason . '"';
  
  $result = mysql_query($query);
  if ($result)
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $presults[] =  $row;
    }
  }

  for ($m=0; $m < count($presults); $m++) 
  {
    list($playerID,$teamname,$firstname, $middlename,$lastname,$positions,$bats,$throws,$height,$weight,$jerseyNum,$picLocation,$profile) = $presults[$m];
    $usheight= club_get_height($height);
    $club_content .= '<table class="club_players_profile"><tr><td>';
    if($picLocation)
      $club_content .= '<img src="' . $picLocation . '" align="left" alt="Player Image" id="club_players_img" />';
    $club_content .= '<b>#' . $jerseyNum . '</b><br />';
    $club_content .= '<br /><b>' . $lastname . ', ' . $firstname . '</b><br />';
    $club_content .= '<br /><b>' . __('Positions:', 'club') . '</b> ' . $positions . '<br />';
    $club_content .= '<b>' . __('Bats:', 'club') . '</b> ' . $bats . '    <b>' . __('Throws:', 'club') . '</b>' . $throws . '<br />';
    if($height)
      $club_content .= '<b>' . __('Height:', 'club') . '</b> ' . $usheight . '';
    if($weight)
      $club_content .= ' <b>' . __('Weight:', 'club') . '</b>' . $weight . '';
    if($profile)
      $club_content .= '<p><b>' . __('Player Profile:', 'club') . '</b> ' . $profile . '</p>';
    $club_content .= '</td></tr></table>
                     <div style="width:100%">
                         <div class="tabs">
                           <a class="tab" onclick=showTab("#Offense")>Offense</a>  <a class="tab" onclick=showTab("#Pitching")>Pitching</a>  <a class="tab" onclick=showTab("#Fielding")>Fielding</a>
                           <hr>
                         </div>
		<div id="Offense" class="tabContent" style="display:block;width:100%">';

  }

  $club_content .= '<br /><b>' . __('Batting Statistics', 'club') . ' &nbsp; ' . $dseason . '</b><br />
		<table class="club-results-table">
		  <thead>
		  <tr>
		    <th>' . __('Opponent', 'club') . '</th>
                    <th>AB</th>
                    <th>R</th>
                    <th>H</th>
                    <th>2B</th>
                    <th>3B</th>
                    <th>HR</th>
                    <th>RE</th>
                    <th>FC</th>
                    <th>SF</th>
                    <th>HP</th>
                    <th>RBI</th>
                    <th>BA</th>
                    <th>OBP</th>
                    <th>SLG</th>
                    <th>OPS</th>
                    <th>BB</th>
                    <th>K</th>
                    <th>LOB</th>
                    <th>SB</th>
		</thead>
		</tr>
		<tbody>
 ';
///////////////////////////////
//GET PLAYER PER GAME STATS
///////////////////////////////
  $query = 'SELECT baAB, baRuns, ba1b, ba2b, ba3b, baHR, baRE, baFC, baSF, baHP, baRBI, baBB, baK, baLOB, baSB,homeTeam,visitingTeam, hruns, vruns, gameDate, gameTime, s.gameID ' .
           '  FROM ' . $wpdb->prefix . 'clubhouseManager_boxscores b, ' . $wpdb->prefix . 'clubhouseManager_stats st ' .
           ' LEFT JOIN ' . $wpdb->prefix . 'clubhouseManager_schedule s ON st.gameID=s.gameID ' .
           ' WHERE playerID=' . $player_id . ' AND b.gameID=s.gameID AND battOrd>0 ' .
           ' AND season = "' . $dseason . '" ORDER BY gameDate';

  $result = mysql_query($query);
  if ( $result )
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $bresults[] = $row;
    }
  }

  for ($m=0; $m < count($bresults); $m++) 
  {
    list($baAB, $baRuns, $ba1b, $ba2b, $ba3b, $baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB, $baK, $baLOB, $baSB, $homeTeam,
	$visitingTeam, $hruns, $vruns, $gameDate, $gameTime, $gameID) = $bresults[$m];
      $hits=$ba1b+$ba2b+$ba3b+$baHR;
      if ( $baAB > 0 )
        $slg=round((($ba1b+($ba2b*2)+($ba3b*3)+($baHR*4))/$baAB),3);
        $slg=number_format("$slg",3);
        $slg = ltrim($slg,"0");
      if($slg==0){
        $slg=".000";
         }
      if ( $baAB == 0 ){
        $slg=".000";
        }

      if ( ($baAB+$baBB) > 0 )
        $obp=($hits+$baBB+$baHP)/($baAB+$baBB+$baHP+$baSF);
        $obp=number_format("$obp", 3);
        $obp = ltrim($obp,"0");
      if (($baAB+$baBB) == 0)
        {$obp = ".000";}
      if ($obp == 0)
        {$obp=".000";}

      if ( $baAB > 0 )
        $ops=($obp+$slg);
        $ops=number_format("$ops",3);
        $ops = ltrim($ops,"0");
      if ( $baAB == 0)
      {
        $ops = ".000";
      }
      if ( $baAB > 0)
        $ba=round($hits/$baAB,3);
      $ba=strval($ba);
      $ba=str_pad($ba,5,"0");
      if($ba=="10000")
      {
        $ba=substr($ba,0,-1);
      }
      if ( $baAB == 0)
        {$ba = ".000";}
      if ($ba == 0)
        {$ba = ".000";}
      else
      {
        $ba=substr($ba,1);
        $ba=str_replace("0000","0",$ba);
     }

    list($year, $month, $day) = split("-", $gameDate);
    $modGameDate = date('M d', mktime(0, 0, 0, $month, $day, $year));

    $club_content .= '<tr><td style="text-align:left;"><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">'; 
    if($homeTeam==$dteam)
       $club_content .= $visitingTeam; 	 
    else
       $club_content .= ' @ ' . $homeTeam; 	 
         	 
    $club_content .= '</a></td>
                        <td>' . $baAB . '</td>
                        <td>' . $baRuns . '</td>
                        <td>' . $hits . '</td>
                        <td>' . $ba2b . '</td>
                        <td>' . $ba3b . '</td>
                        <td>' . $baHR . '</td>
                        <td>' . $baRE . '</td>
                        <td>' . $baFC . '</td>
                        <td>' . $baSF . '</td>
                        <td>' . $baHP . '</td>
                        <td>' . $baRBI . '</td>
                        <td>' . $ba . '</td>
			<td>' . $obp . '</td>
                        <td>' . $slg . '</td>
			<td>' . $ops . '</td>
			<td align="center">' . $baBB . '</td>
                        <td align="center">' . $baK . '</td>
                        <td align="center">' . $baLOB . '</td>
                        <td align="center">' . $baSB . '</td>';
  }
    $club_content .= '</tbody>';

  unset($gresults);

///////////////////////////////////////////
//GET CURRENT SEASON TOTALS
//////////////////////////////////////////
    $query = 'SELECT baTotAB,baTotH,baTotRuns,baTot1b,baTot2b,baTot3b,baTotHR,baTotRE, ' .
            '       baTotFC,baTotSF,baTotHP,baTotRBI,baTotBB,baTotK,baTotLOB,baTotSB ' .
            '  FROM ' . $wpdb->prefix . 'clubhouseManager_statTotals' .
            ' WHERE season = "' . $dseason. '" AND playerID = ' . $player_id . ' ';
  $result = mysql_query($query);
  if ( $result )
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $gresults[] = $row;
    }
  }

  for ($m=0; $m < count($gresults); $m++) 
  {
    list($baAB, $baH, $baR, $ba1b, $ba2b, $ba3b, $baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB, $baK, $baLOB,$baSB) = $gresults[$m];
      if ( $baAB > 0 )
        $slg=round((($ba1b+($ba2b*2)+($ba3b*3)+($baHR*4))/$baAB),3);
        $slg=number_format("$slg",3);
        $slg = ltrim($slg,"0");
      if($slg==0){
        $slg=".000";
         }
      if ( $baAB == 0 ){
        $slg=".000";
        }

      if ( ($baAB+$baBB) > 0 )
        $obp=($baH+$baBB+$baHP)/($baAB+$baBB+$baHP+$baSF);
        $obp=number_format("$obp", 3);
        $obp = ltrim($obp,"0");
      if (($baAB+$baBB) == 0)
        {$obp = ".000";}
      if ($obp == 0)
        {$obp=".000";}

      if ( $baAB > 0 )
        $ops=($obp+$slg);
        $ops=number_format("$ops",3);
        $ops = ltrim($ops,"0");
      if ( $baAB == 0)
      {
        $ops = ".000";
      }
      if ( $baAB > 0)
        $ba=round($baH/$baAB,3);
      $ba=strval($ba);
      $ba=str_pad($ba,5,"0");
      if($ba=="10000")
      {
        $ba=substr($ba,0,-1);
      }
      if ( $baAB == 0)
        {$ba = ".000";}
      if ($ba == 0)
        {$ba = ".000";}
      else
      {
        $ba=substr($ba,1);
        $ba=str_replace("0000","0",$ba);
     }

    $club_content .= '<tr><td style="text-align:left;"><b>' . __('TOTAL FOR ', 'club') . $dseason . __(' Season', 'club') . '</b></td>
	          <td><b>' . $baAB . '</b></td>
	          <td><b>' . $baR  . '</b></td>
	          <td><b>' . $baH . '</b></td>
	          <td><b>' . $ba2b . '</b></td>
	          <td><b>' . $ba3b . '</b></td>
	          <td><b>' . $baHR . '</b></td>
	          <td><b>' . $baRE . '</b></td>
	          <td><b>' . $baFC . '</b></td>
                  <td><b>' . $baSF . '</b></td>
	          <td><b>' . $baHP . '</b></td>
	          <td><b>' . $baRBI . '</b></td>
	          <td><b>' . $ba .  '</b></td>
	          <td><b>' . $obp . '</b></td>
                  <td><b>' . $slg . '</b></td>
             	  <td><b>' . $ops . '</b></td>
		  <td align="center"><b>' . $baBB . '</b></td>
	          <td align="center"><b>' . $baK . '</b></td>
	          <td align="center"><b>' . $baLOB . '</b></td>
	          <td align="center"><b>' . $baSB . '</b></td>
	        </tr>';
  }


  $club_content .= '</tbody></table>
		<br /><b>' . __('Batting Statistics CAREER', 'club') . '</b><br />
                <table class="club-results-table">
                  <thead>
                  <tr>
                    <th>' . __('Season', 'club') . '</th>
                    <th>AB</th>
                    <th>R</th>
                    <th>H</th>
                    <th>2B</th>
                    <th>3B</th>
                    <th>HR</th>
                    <th>RE</th>
                    <th>FC</th>
                    <th>SF</th>
                    <th>HP</th>
                    <th>RBI</th>
                    <th>BA</th>
                    <th>OBP</th>
                    <th>SLG</th>
                    <th>OPS</th>
                    <th>BB</th>
                    <th>K</th>
                    <th>LOB</th>
                    <th>SB</th>
                </thead>
                </tr>
                <tbody>
 ';
/////////////////////////////////////////
//GET TOTAL BATTING STATS FOR EACH SEASON
/////////////////////////////////////////

 //GET LIST OF ALL SEASONS FOR PLAYER
   $query = 'SELECT season FROM ' . $wpdb->prefix . 'clubhouseManager_players WHERE playerID=' . $player_id . ' ';
   $result = mysql_query($query);
   if ( $result )
   {
     while ( $row = mysql_fetch_array($result) )
     {
       $past_season[] = $row;
     }
   }
   for ($m=0; $m < count($past_season); $m++){
     list($p_season) = $past_season[$m];
     $query = 'SELECT baTotAB,baTotH,baTotRuns,baTot1b,baTot2b,baTot3b,baTotHR,baTotRE, ' .
             ' baTotFC,baTotSF,baTotHP,baTotRBI,baTotBB,baTotK,baTotLOB,baTotSB,season ' .
             ' FROM ' . $wpdb->prefix . 'clubhouseManager_statTotals' .
             ' WHERE season = "' . $p_season. '" AND playerID = ' . $player_id . ' ';
     $result = mysql_query($query);
     if ( $result )
     {
       while ( $row = mysql_fetch_array($result) )
       {
         $results[] = $row;
       }
     }
   }
   for ($n=0; $n < count($results); $n++)
   {
     list($baAB,$baH,$baR,$ba1b,$ba2b,$ba3b,$baHR,$baRE,$baFC,$baSF,$baHP,$baRBI,$baBB,$baK,$baLOB,$baSB,$c_season) = $results[$n];
       if ( $baAB > 0 )
         $slg=round((($ba1b+($ba2b*2)+($ba3b*3)+($baHR*4))/$baAB),3);
         $slg=number_format("$slg",3);
         $slg = ltrim($slg,"0");
       if($slg==0){
         $slg=".000";
          }
       if ( $baAB == 0 ){
         $slg=".000";
         }
       if ( ($baAB+$baBB) > 0 )
          $obp=($baH+$baBB+$baHP)/($baAB+$baBB+$baHP+$baSF);
          $obp=number_format("$obp", 3);
          $obp = ltrim($obp,"0");
       if (($baAB+$baBB) == 0)
          {$obp = ".000";}
       if ($obp == 0)
          {$obp=".000";}
  
       if ( $baAB > 0 )
          $ops=($obp+$slg);
          $ops=number_format("$ops",3);
          $ops = ltrim($ops,"0");
       if ( $baAB == 0)
        {
          $ops = ".000";
        }
       if ( $baAB > 0)
          $ba=round($baH/$baAB,3);
        $ba=strval($ba);
        $ba=str_pad($ba,5,"0");
       if($ba=="10000")
        {
          $ba=substr($ba,0,-1);
        }
       if ( $baAB == 0)
          {$ba = ".000";}
       if ($ba == 0)
          {$ba = ".000";}
       else
        {
          $ba=substr($ba,1);
          $ba=str_replace("0000","0",$ba);
        }
  
      $club_content .= '<tr><td style="text-align:left;">' . $c_season . __(' Season', 'club') . '</td>
                    <td>' . $baAB . '</td>
                    <td>' . $baR  . '</td>
                    <td>' . $baH . '</td>
                    <td>' . $ba2b . '</td>
                    <td>' . $ba3b . '</td>
                    <td>' . $baHR . '</td>
                    <td>' . $baRE . '</td>
                    <td>' . $baFC . '</td>
                    <td>' . $baSF . '</td>
                    <td>' . $baHP . '</td>
                    <td>' . $baRBI . '</td>
                    <td>' . $ba .  '</td>
                    <td>' . $obp . '</td>
                    <td>' . $slg . '</td>
                    <td>' . $ops . '</td>
                    <td align="center">' . $baBB . '</td>
                    <td align="center">' . $baK . '</td>
                    <td align="center">' . $baLOB . '</td>
                    <td align="center">' . $baSB . '</td>
                  </tr>';
    }



////////////////////////////////
//GET CAREER TOTAL BATTING STATS
////////////////////////////////
  $query = 'SELECT sum(baAb) as baAB, sum(baRuns) as baR,sum(ba1b) as ba1b, sum(ba2b) as ba2b, sum(ba3b) as ba3b, ' .
           '       sum(baHR) as baHR,sum(baRE) as baRE,sum(baFC) as baFC, sum(baSF) as baSF, sum(baHP) as baHP, ' .
           '       sum(baRBI) as baRBI, sum(baBB) as baBB, sum(baK) as baK, sum(baLOB) as baLOB,sum(baSB) as baSB ' .
           '  FROM ' . $wpdb->prefix . 'clubhouseManager_stats st ' .
           ' WHERE st.playerID = ' . $player_id . ' ';
  $result = mysql_query($query);
  if ( $result )
  {
    $row = mysql_fetch_array($result);
  }

  list($baAB, $baR, $ba1b, $ba2b, $ba3b, $baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB, $baK, $baLOB,$baSB) = $row;
      $hits=$ba1b+$ba2b+$ba3b+$baHR;
      if ( $baAB > 0 )
        $slg=round((($ba1b+($ba2b*2)+($ba3b*3)+($baHR*4))/$baAB),3);
        $slg=number_format("$slg",3);
        $slg = ltrim($slg,"0");
      if($slg==0){
        $slg=".000";
         }
      if ( $baAB == 0 ){
        $slg=".000";
        }

      if ( ($baAB+$baBB) > 0 )
        $obp=($hits+$baBB+$baHP)/($baAB+$baBB+$baHP+$baSF);
        $obp=number_format("$obp", 3);
        $obp = ltrim($obp,"0");
      if (($baAB+$baBB) == 0)
        {$obp = ".000";}
      if ($obp == 0)
        {$obp=".000";}

      if ( $baAB > 0 )
        $ops=($obp+$slg);
        $ops=number_format("$ops",3);
        $ops = ltrim($ops,"0");
      if ( $baAB == 0)
      {
        $ops = ".000";
      }
      if ( $baAB > 0)
        $ba=round($hits/$baAB,3);
      $ba=strval($ba);
      $ba=str_pad($ba,5,"0");
      if($ba=="10000")
      {
        $ba=substr($ba,0,-1);
      }
      if ( $baAB == 0)
        {$ba = ".000";}
      if ($ba == 0)
        {$ba = ".000";}
      else
      {
        $ba=substr($ba,1);
        $ba=str_replace("0000","0",$ba);
     }

  $club_content .= '<tr><td style="text-align:left;"><b>' . __('CAREER AS ', 'club') . $dteam . ' *</b></td>
		      <td><b>' . $baAB . '</b></td>
		      <td><b>' . $baR . '</b></td>
		      <td><b>' . $hits . '</b></td>
		      <td><b>' . $ba2b . '</b></td>
		      <td><b>' . $ba3b . '</b></td>
		      <td><b>' . $baHR . '</b></td>
		      <td><b>' . $baRE . '</b></td>
		      <td><b>' . $baFC . '</b></td>
                      <td><b>' . $baSF . '</b></td>
		      <td><b>' . $baHP . '</b></td>
		      <td><b>' . $baRBI . '</b></td>
		      <td><b>' . $ba . '</b></td>
		      <td><b>' . $obp . '</b></td>
		      <td><b>' . $slg . '</b></td>
		      <td><b>' . $ops . '</b></td>
		      <td align="center"><b>' . $baBB . '</b></td>
		      <td align="center"><b>' . $baK . '</b></td>
		      <td align="center"><b>' . $baLOB . '</b></td>
		      <td align="center"><b>' . $baSB . '</b></td>
		    </tr>'; 
    
  $club_content .= '</tbody>
		   </table>
		 </div>';


//////////////////////////
//	PITCHING STATS
//////////////////////////
  $query = 'SELECT piWin,piLose,piSave,piIP,piHits,piRuns,piER,piWalks,piSO,homeTeam,visitingTeam,hruns,vruns,gameDate,gameTime,s.gameID ' .
           '  FROM ' . $wpdb->prefix . 'clubhouseManager_boxscores b, ' . $wpdb->prefix . 'clubhouseManager_stats st ' .
           ' LEFT JOIN ' . $wpdb->prefix . 'clubhouseManager_schedule s ON st.gameID=s.gameID ' .
           ' WHERE playerID = ' . $player_id . ' AND b.gameID=s.gameID AND season = "' . $dseason . '" AND pitchOrd>0 ORDER BY gameDate';

  $result = mysql_query($query);
  if ($result)
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $pitchresults[] = $row;
      $showPitchingStats+=$row['piIP'];
    }
  }
  $club_content .= '<div id="Pitching" class="tabContent" style="display:none;width:100%">';
if ($showPitchingStats>0)
{
  $club_content .= '<b>' . __('Pitching Statistics', 'club') . '&nbsp;' .$dseason . '</b><br />
		<table class="club-results-table">
		  <thead>
		  <tr>
		    <th>' . __('Game', 'club') . '</th>
                    <th>W</th>
                    <th>L</th>
                    <th>S</th>
                    <th>IP</th>
                    <th>H</th>
                    <th>R</th>
                    <th>ER</th>
                    <th>BB</th>
                    <th>K</th>
                    <th>ERA</th>
		  </tr>
		  </thead>
		  <tbody> ';

  for ($m=0; $m < count($pitchresults); $m++) 
  {
    list($piWin,$piLose, $piSave, $piIP, $piHits, $piRuns, $piER, $piWalks, $piSO, $homeTeam, $visitingTeam, $hruns, $vruns, 
	  	$gameDate, $gameTime, $gameID) = $pitchresults[$m];
    $hits=$ba1b+$ba2b+$ba3b+$baHR;
    if ($piIP > 0)
      $ERA=($piER/$piIP)*$erainnings;
      $ERA=number_format($ERA, 2, '.', '');
    $club_content .= '<tr><td style="text-align:left;"><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">'; 
    if($homeTeam==$dteam) 	 
      $club_content .= $visitingTeam; 	 
    else 	 
      $club_content .=  ' @ ' . $homeTeam;
         	 
    $club_content .= '</a></td>
			  <td>' . $piWin . '</td>
		          <td>' . $piLose . '</td>
		          <td>' . $piSave . '</td>
		          <td>' . $piIP . '</td>
		          <td>' . $piHits . '</td>
		          <td>' . $piRuns . '</td>
		          <td>' . $piER . '</td>
		          <td>' . $piWalks . '</td>
		          <td>' . $piSO . '</td>
		          <td>' . $ERA . '</td>
		        </tr>';
  }
	
////////////////////////////////
// PITCHING TOTAL FOR SEASON
////////////////////////////////
  unset($pitchresults);
  $query = 'SELECT piTotWin,piTotLose,piTotSave,piTotIP,piTotHits,piTotRuns,piTotER,piTotWalks,piTotSO ' .
           'FROM ' . $wpdb->prefix . 'clubhouseManager_statTotals ' .
           'WHERE (piTotIP>0 OR piTotHits>0 OR piTotWalks>0) AND season = "' . $dseason . '" AND playerID = ' . $player_id . ' ';
  $result = mysql_query($query);
  if ($result)
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $pitchresults[] = $row;
    }
  }
  for ($m=0; $m < count($pitchresults); $m++) 
  {
    list($piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO) = $pitchresults[$m];
    if ($piIP > 0)
      $ERA=($piER/$piIP)*$erainnings;
      $ERA=number_format($ERA, 2, '.', '');
    $club_content .= '</tbody><tr><td style="text-align:left;"><b>' . __('TOTAL FOR ', 'club') . $dseason . __(' Season', 'club') . '</b></td>
	 	<td><b>' . $piWin . '</b></td>
         	<td><b>' . $piLose . '</b></td>
             	<td><b>' . $piSave . '</b></td>
             	<td><b>' . $piIP . '</b></td>
             	<td><b>' . $piHits . '</b></td>
             	<td><b>' . $piRuns . '</b></td>
             	<td><b>' . $piER . '</b></td>
      	     	<td><b>' . $piWalks . '</b></td>
             	<td><b>' . $piSO . '</b></td>
             	<td><b>' . $ERA . '</b></td>
		</tr>';
  }
  $club_content .= '</table><br>';
unset($pitchresults);

/////////////////////////////////////
// PITCHING TOTALS FOR EACH SEASON
/////////////////////////////////////
  $club_content .= '<b>' . __('Pitching Statistics', 'club') . ' Career</b><br />
                <table class="club-results-table">
                  <thead>
                  <tr>
                    <th>' . __('Game', 'club') . '</th>
                    <th>W</th>
                    <th>L</th>
                    <th>S</th>
                    <th>IP</th>
                    <th>H</th>
                    <th>R</th>
                    <th>ER</th>
                    <th>BB</th>
                    <th>K</th>
                    <th>ERA</th>
                  </tr>
                  </thead>
                  <tbody> ';

   for ($m=0; $m < count($past_season); $m++){
     list($p_season) = $past_season[$m];
           $query = 'SELECT piTotWin,piTotLose,piTotSave,piTotIP,piTotHits,piTotRuns,piTotER,piTotWalks,piTotSO,season ' .
           'FROM ' . $wpdb->prefix . 'clubhouseManager_statTotals ' .
           'WHERE (piTotIP>0 OR piTotHits>0 OR piTotWalks>0) AND season = "' . $p_season . '" AND playerID = ' . $player_id . ' ';
     $result = mysql_query($query);
     if ( $result )
     {
       while ( $row = mysql_fetch_array($result) )
       {
         $pitchresults[] = $row;
       }
     }
   }
  for ($m=0; $m < count($pitchresults); $m++)
  {
    list($piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$c_season) = $pitchresults[$m];
    if ($piIP > 0)
      $ERA=($piER/$piIP)*$erainnings;
      $ERA=number_format($ERA, 2, '.', '');
    $club_content .= '<tr><td style="text-align:left;">' . $c_season . ' Season</a></td>
                          <td>' . $piWin . '</td>
                          <td>' . $piLose . '</td>
                          <td>' . $piSave . '</td>
                          <td>' . $piIP . '</td>
                          <td>' . $piHits . '</td>
                          <td>' . $piRuns . '</td>
                          <td>' . $piER . '</td>
                          <td>' . $piWalks . '</td>
                          <td>' . $piSO . '</td>
                          <td>' . $ERA . '</td>
                        </tr>';
  }
unset($pitchresults);

//////////////////////////
//  CAREER PITCHING TOTAL
//////////////////////////
  $query = 'SELECT sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave, sum(piIP) as piIP, ' . 
           '       sum(piHits) as piHits, sum(piRuns) as piRuns, sum(piER) as piER, ' .
           '       sum(piWalks) as piWalks, sum(piSO) as piSO ' .
           '  FROM ' . $wpdb->prefix . 'clubhouseManager_stats st, ' . $wpdb->prefix . 'clubhouseManager_schedule s ' . 
           ' WHERE pitchOrd>0 AND st.gameID=s.gameID AND st.playerID = '. $player_id . ' ';
  $result = mysql_query($query);
  if ($result)
  {
    while ( $row = mysql_fetch_array($result) )
    {
      $pitchresults[] = $row;
    }
  }

  for ($m=0; $m < count($pitchresults); $m++) 
  {
    list($piWin,$piLose, $piSave, $piIP, $piHits, $piRuns, $piER, $piWalks, $piSO) = $pitchresults[$m];
    if ($piIP > 0)
      $ERA=($piER/$piIP)*$erainnings;
      $ERA=number_format($ERA, 2, '.', '');
    $club_content .= '<tr><td style="text-align:left;"><b>' . __('CAREER AS ', 'club') . $dteam . ' *</b></td>
		     <td><b>' . $piWin . '</b></td>
	             <td><b>' . $piLose . '</b></td>
	             <td><b>' . $piSave . '</b></td>
	             <td><b>' . $piIP  . '</b></td>
	             <td><b>' . $piHits . '</b></td>
	             <td><b>' . $piRuns . '</b></td>
	             <td><b>' . $piER . '</b></td>
	             <td><b>' . $piWalks . '</b></td>
	             <td><b>' . $piSO . '</b></td>
	             <td><b>' . $ERA . '</b></td> </tr>';
  }
}else{
  $club_content .= 'No pitching stats available';
}
  $club_content .= '</table>
		   </div>
		   <div id="Defense" class="tabContent" style="display:none;width:100%">
			&nbsp;
		   </div></div>';

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}


function  club_widget_top5stats( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $team,
              'season' => $season,
     ), $atts));
  $erainnings = club_get_option('club_era_innings');
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));
  $team_leaders = club_get_option('club_team_leaders');
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';

  $club_content = NULL;

  #
  # bat stats
  #

  $heading_arr = array(
      __('Batting Average', 'club'),
      __('Hits', 'club'),
      __('Home Runs', 'club'),
      __('RBI', 'club'),
      __('Team Leader In Slugging Percentage', 'club'),
      __('Team Leader In On Base Percentage', 'club')
      ); 
     $club_content .= '<div style="display:inline;"> <h2> '.__('Offensive Leaders', 'club').' </h2><br>';

////////////////////////////////////////////

  for ( $i=0; $i < 6; $i++ )
  {
    switch ($i)        
    {
      case 0:
        #Batting Average Leaders
        $players = club_get_batting_avg($season,$team);
          $club_content .= '
                <table class="club-leaders-table">
                  <tr>
                    <th>&nbsp;</th>
                    <th>' . $heading_arr[$i] . '</th>
                  </tr>';

        for ( $m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $BA) = $players[$m];
          $bAvg=$BA;
          $bAvg=strval($bAvg);
          $bAvg=str_pad($bAvg,5,"0");
          if($bAvg=="10000")
          {
            $bAvg=substr($bAvg,0,-1);
          }
          else
          {
            $bAvg=substr($bAvg,1);
            $bAvg=str_replace("0000","0",$bAvg);
          }
          $club_content .= '
		  <tr>
                    <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		    <td>' . $bAvg . '</td>
                  </tr>';
        }	
          $club_content .= '</table>';

        break;
      case 1:
        #Hits Leaders    
        $players = club_get_hit_leaders($season,$team);
          $club_content .= '
                <table class="club-leaders-table">
                  <tr>
                    <th>&nbsp;</th>
                    <th>' . $heading_arr[$i] . '</th>
                  </tr>';

        for ( $m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $baTotH) = $players[$m];
          $club_content .= '
                  <tr>
                    <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
                    <td>' . $baTotH . '</td>
                  </tr>';
        }
          $club_content .= '</table>';
        break;
      case 2:
//        Homerun Leaders
        $players = club_get_homerun_leaders($season,$team);
          $club_content .= '
                <table class="club-leaders-table">
                  <tr>
                    <th>&nbsp;</th>
                    <th>' . $heading_arr[$i] . '</th>
                  </tr>';

        for ($m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $baTotHR) = $players[$m];
          $club_content .= '
                  <tr>
                    <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
                    <td>' . $baTotHR . '</td>
                  </tr>';
        }
          $club_content .= '</table>';
        break;
      case 3:
        $players = club_get_rbi($season,$team);
          $club_content .= '
                <table class="club-leaders-table">
                  <tr>
                    <th>&nbsp;</th>
                    <th>' . $heading_arr[$i] . '</th>
                  </tr>';

        for ($m=0; $m < count($players); $m++) 
        {
          list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $baTotRBI) = $players[$m];
          $club_content .= '
                  <tr>
                    <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
                    <td>' . $baTotRBI . '</td>
                  </tr>';
        }
          $club_content .= '</table>
                </div>';
        break;
    }

  }









///////////////////////////////////
/// field stats
//////////////////////////////////

  $heading_arr = array(
      __('Team Leader In Fewest Errors', 'club'),
      __('Team Leader In Most Put Outs', 'club'),
      __('Team Leader In Best Fielding Percentage', 'club')
    );

  for ( $i=0; $i <= 2; $i++)
  {
    $club_content .= '<table class="club-results-table">';
    $club_content .= '<tr><th colspan="6">' . $heading_arr[$i] . '</th></tr>';

    $club_content .= '   <tr>
               <td width="25"><b>#</b></td>
               <td width="245"><b>' . __('Fielding', 'club') . '</b></td>
               <td width="25"><b>PO</b></td>
               <td width="25"><b>A</b></td>
               <td width="25"><b>E</b></td>
               <td width="35"><b>FP</b></td>
             </tr>';

    switch ($i)	
    {
      case 0:
        // least amount of errors
	$query = "SELECT p.playerID, p.lastname, p.firstname, p.middlename, p.jerseyNum, sum(fiE) as fiE FROM ".$prefix."_clubhouseManager_players p left join ".$prefix."_clubhouseManager_stats s on p.playerID=s.playerID where season='".$_COOKIE["season"]."' group by p.lastname ORDER BY fiE ASC";
        break;
      case 1:
        // most put outs
	$query = "SELECT p.playerID, p.lastname, p.firstname, p.middlename, p.jerseyNum, sum(fiPO) as fiPO FROM ".$prefix."_clubhouseManager_players p left join ".$prefix."_clubhouseManager_stats s on p.playerID=s.playerID where season='".$_COOKIE["season"]."' group by p.lastname ORDER BY fiPO DESC";
        break;
      case 2:
        //best fielding percentage : fp = ($fiPO+$fiA)/($fiPO+$fiA+$fiE)
        $query = "SELECT p.playerID, p.lastname, p.firstname, p.middlename, p.jerseyNum, sum(fiPO+fiA)/sum(fiPO+fiA+fiE) as fiFP FROM ".$prefix."_clubhouseManager_players p left join ".$prefix."_clubhouseManager_stats s on p.playerID=s.playerID where season='".$_COOKIE["season"]."' group by p.lastname ORDER BY fiFP DESC";
        break;
    }

    $result = mysql_query($query);
    if ( $result )
    while ( $row = mysql_fetch_array($result) )
      $presults[] = $row;

    for ( $members=0; $members < $team_leaders; $members++) 
    {
      list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $UselessNumber) = $presults[$members];

      $query = "SELECT sum(fiPO)as fiPO, sum(fiA) as fiA, sum(fiE) as fiE " .
               "  FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st, ".$wpdb->prefix."clubhouseManager_schedule s " .
               " WHERE p.playerID=".$playerID." AND teamName='".$dteam."' AND season='".$dseason."' AND " .
               "       p.playerID=st.playerID AND st.gameID=s.gameID";
      $result = mysql_query($query);
      if ( $result )
      {
        $row = mysql_fetch_array($result);
        list($fiPO,$fiA, $fiE) = $row;

        $SumfiPO += $fiPO;
        $SumfiA  += $fiA;
        $SumfiE  += $fiE;

        for ($m=0; $m < 1; $m++)
        {
          if ( ($fiPO+$fiA+$fiE) )
            $FP= str_pad(str_replace("0.",".",round(($fiPO+$fiA)/($fiPO+$fiA+$fiE),3)),4,"0",STR_PAD_RIGHT);
          if ($FP == "1000") 
            $FP = "1.000";
          if (!$FP) 
            $FP =0;
          $club_content .= '<tr>
			    <td>'.$jerseyNum.'</td>
	    		    <td align="left"><a href="" onclick="club_show_players_info('.$playerID.')" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  	    <td>';
          if ($i ==1) 
            $club_content .= '<b>';
          $club_content .= $fiPO;
          if ($i ==1) 
            $club_content .= '</b>';
          $club_content .= '</td><td>'.$fiA.'</td>
		            <td>';
          if ($i ==0) 
            $club_content .= '<b>';
          $club_content .= $fiE;
          if ($i ==0) 
            $club_content .= '</b>';
          $club_content .= '</td>
		            <td>';
          if ($i ==2) 
            $club_content .= '<b>';
          $club_content .= $FP;
          if ($i == 2) 
            $club_content .= '</b>';
          $club_content .= '</td>  </tr>';
        }
      }
    }

    $club_content .= '</table><br /><br />';
  }


  #
  # pitch stats
  #

  for ($i=0; $i<=1; $i++)
  {
    $club_content .= '<table class="club-results-table">';
    switch ($i)
    {
      case 0:
        $club_content .= '<tr><th colspan="20">' . __('Team Leader In Least ERA', 'club') . '</th></tr>';
        break;
      case 1:
        $club_content .= '<tr><td>&nbsp;</td></tr><tr><th colspan="20">' . __('Team Leader In Most Strikeouts', 'club') . '</th></tr>';
        break;
    }

    $club_content .= '   <tr>
               <td width="25"><b>#</b></td>
               <td width="245"><b>' . __('Pitching', 'club') . '</b></td>
               <td width="25"><b>W</b></td>
               <td width="25"><b>L</b></td>
               <td width="25"><b>S</b></td>
               <td width="35"><b>IP</b></td>
               <td width="25"><b>H</b></td>
               <td width="25"><b>R</b></td>
               <td width="25"><b>ER</b></td>
               <td width="25"><b>BB</b></td>
               <td width="25"><b>K</b></td>
               <td width="35"><b>ERA</b></td>
            </tr>';

    //PITCHING STATS
    if ($i == 0) 
    {
      $query = "SELECT DISTINCT p.playerID, lastname, firstname, middlename, jerseyNum, ".
		" sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave,sum(piIP) as piIP, sum(piHits) as piHits, sum(piRuns) as piRuns,".
		"  sum(piER) as piER,sum(piWalks) as piWalks, sum(piSO) as piSO, round(sum((piER/piIP)*".$erainnings."),2) as ERA ".
		" FROM ".$wpdb->prefix."clubhouseManager_stats st, ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_schedule s ".
		" WHERE s.gameID=st.gameID AND p.season='".$dseason."'".
		" AND piIP>0 AND st.playerID=p.playerID GROUP BY playerID ORDER BY ERA ASC LIMIT ".$team_leaders;
    }
    else if($i==1)
    {
      $query = "SELECT DISTINCT p.playerID, lastname, firstname, middlename, jerseyNum, ".
		" sum(piWin)as piWin, sum(piLose) as piLose, sum(piSave) as piSave,sum(piIP) as piIP, sum(piHits) as piHits, sum(piRuns) as piRuns,".
		"  sum(piER) as piER,sum(piWalks) as piWalks, sum(piSO) as piSO, round(sum((piER/piIP)*".$erainnings."),2) as ERA ".
		" FROM ".$wpdb->prefix."clubhouseManager_stats st, ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_schedule s ".
		" WHERE s.gameID=st.gameID AND p.season='".$dseason."' ".
		" AND piIP>0 AND st.playerID=p.playerID GROUP BY playerID ORDER BY piSO DESC LIMIT ".$team_leaders;
    }
	
    unset($presults);
    $result = mysql_query($query);
    if ( $result )
      while ( $row = mysql_fetch_array($result) )
        $presults[] = $row;

    for ($m=0; $m < count($presults); $m++) 
    {
      list($playerID,$lastname, $firstname, $middlename, $jerseyNum, $piWin,$piLose, $piSave, $piIP, $piHits, $piRuns, $piER, $piWalks, $piSO,$ERA) = $presults[$m];
      $club_content .= '<tr>
			    <td>'.$jerseyNum.'</td>
	    		    <td align="left"><a href="" onclick="show_players_info('.$playerID.')" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
		  	    <td>'.$piWin.'</td>
		            <td>'.$piLose.'</td>
		            <td>'.$piSave.'</td>
		            <td>'.$piIP.'</td>
		            <td>'.$piHits.'</td>
		            <td>'.$piRuns.'</td>
		            <td>'.$piER.'</td>
		            <td>'.$piWalks.'</td>
		            <td>'.$piSO.'</td>
		            <td>'.$ERA.'</td>
			</tr>';
    }
	
    $club_content .= "</table>";
  }

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_team_schedule( $atts, $club_echo = true )
{

  global $wpdb;
  $defs    = club_get_defaults();
  $team   = $defs['defaultTeam'];
  $season = $defs['defaultSeason'];
     extract(shortcode_atts(array(
	      'team' => $team,
	      'season' => $season,
     ), $atts));
  $game_results_page = get_permalink(club_get_option('club_game_results_page'));
  $locations_page = get_permalink(club_get_option('club_locations_page'));
  $timeformat = get_option('time_format');
  $dateformat = get_option('date_format');
  $wins = 0;
  $loses = 0;
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';

  $club_content = NULL;
  $club_content = 
	'<table class="club-schedule-table">
	<tr>  
	  <th>' . __('Game Date', 'club') . '</th>
 	  <th>' . __('Home', 'club') . '</th>
	  <th>' . __('Visitor', 'club') . '</th>
	  <th>' . __('Field', 'club') . '</th>
	</tr>';

  if($team == 'league'){
      $query = "SELECT s.gameID,gameTime,gameDate,homeTeam,visitingTeam, fieldname, vruns, hruns, b.status " .
           "FROM " . $wpdb->prefix . "clubhouseManager_schedule s " .
                " Inner join " .$wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = s.field_id" .
                 " LEFT JOIN " .$wpdb->prefix . "clubhouseManager_boxscores b ON s.gameID = b.gameID " .
                 " WHERE season= '" . $season . "' AND type='game'" .
                 "ORDER BY gameDate ASC";
  }else{		
  $query = "SELECT s.gameID,gameTime,gameDate,homeTeam,visitingTeam, fieldname, vruns, hruns, b.status " .
           "FROM " . $wpdb->prefix . "clubhouseManager_schedule s " . 
                   " Inner join " .$wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = s.field_id" .
                 " LEFT JOIN " .$wpdb->prefix . "clubhouseManager_boxscores b ON s.gameID = b.gameID " .
                 " WHERE season= '" . $season . "' " .
                 " AND (homeTeam='" . $team . "' OR visitingTeam='" . $team . "') AND type='game'" .
		 "ORDER BY gameDate ASC";
  }

  $result = mysql_query($query);
  while ( $row = mysql_fetch_array($result) )
  {
    $schedule[] = $row;
  }

  for ($m=0; $m < count($schedule); $m++) 
  {
    list($gameID,$gameTime,$gameDate,$homeTeam,$visitingTeam,$field,$vruns,$hruns,$status) = $schedule[$m];
    list($year, $month, $day) = split("-", $gameDate);
 
    $date =date_create("$gameDate $gameTime");
    $club_content .= "<tr>";
   $wt = ($hruns > $vruns) ? 1 : 2;
    if ($hruns > $vruns) { $wt = 1; } elseif ( $hruns == $vruns) { $wt = 3; } else { $wt = 2; }

    if(strtolower($team) == strtolower($homeTeam))
    {
         if ($wt == 1) { $result = "Win"; } elseif ($wt ==2) { $result = "Loss"; } else { $result = "Tie"; }
         $score = ($wt == 1) ? $hruns.' - '.$vruns : $vruns.' - '.$hruns;
    }
    else {
         if ($wt == 2) { $result = "Win"; } elseif ($wt ==1) { $result = "Loss"; } else { $result = "Tie"; }
         $score = ($wt == 1) ? $hruns.' - '.$vruns : $vruns.' - '.$hruns;
    }

    if(($status === "Complete") && ($team != 'league'))
    {
      $club_content .= '<td><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">'.$result.' '.$score.'</a></td>';
    }
    elseif(($status === "Complete") && ($team == 'league'))
    {
      $club_content .= '<td><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">Final '.$score.'</a></td>';
    }
     elseif($status === "Suspended")
     {
       $club_content .= '<td><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">Suspended '.$score.'</a></td>';
     }

     elseif($status === "Cancelled")
     {
       $club_content .= '<td><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">Cancelled</a></td>';
     }
     elseif($status === "Postponed")
     {
       $club_content .= '<td><a href="'.$game_results_page.$qstring.'gameID='.$gameID.'" title="' . __('Show Game Results', 'club') . '">Postponed</a></td>';
     }
    else
    {
      $club_content .= '<td>'.date_format($date,"$dateformat $timeformat").'</td>';
    }
      $club_content .= '<td>'.$homeTeam.'</td>';
      $club_content .= '<td>'.$visitingTeam.'</td>';
    if($status === "Complete" || $status === "Suspended")
    {
       $club_content .= '<td><a href="' . $game_results_page . $qstring . 'gameID=' . $gameID . '">Game Recap / Box Score</a></td>';
    }
    else
    {
            $club_content .= '<td><a href="' . $locations_page . $qstring .'field=' . $field . '" title="' . __('Show Locations Info', 'club') . '">'.$field.'</a></td>';
        }
    $club_content .= '</tr>';
  }
  $club_content .= "</table>";
//echo 'Wins = '.$wins.' and Loses = '.$loses;
  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_team_practices( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $dteam   = $defs['defaultTeam'];
  $dseason = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $dteam,
              'season' => $dseason,
      ), $atts));
  $locations_page = get_permalink(club_get_option('club_locations_page'));
  $timeformat = get_option('time_format');
  $dateformat = get_option('date_format');
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $club_content = NULL;
  $club_content .= '<table class="club-schedule-table">
	<tr>
	  <th><b>' . __('Practice Date', 'club') . '</b></td>
	  <th><b>' . __('Field', 'club') . '</b></td>
	  <th><b>' . __('Notes', 'club') . '</b></td>
	</tr>';
  if($dteam == 'league'){
    $query = "SELECT s.gameID, gameTime,gameDate, fieldname, Notes ".
             "FROM " . $wpdb->prefix . "clubhouseManager_schedule s ".
              " Inner join " .$wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = s.field_id" .
             " WHERE season = '" . $season ."' AND type = 'practice' ORDER BY gameDate ASC";
  }else{
    $query = "SELECT s.gameID, gameTime,gameDate, fieldname, Notes ". 
             "FROM " . $wpdb->prefix . "clubhouseManager_schedule s ". 
              " Inner join " .$wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = s.field_id" .
             " WHERE homeTeam='" . $dteam . "' AND season = '" . $season ."' AND type = 'practice' ORDER BY gameDate ASC"; 
  }

  $result = mysql_query($query);
  while ( $row = mysql_fetch_array($result))
  {
    $practices[] = $row;
  }

  for ($m=0; $m < count($practices); $m++) 
  {
    list($gameID,$Gtime,$Gdate,$field,$Notes) = $practices[$m];
    $date =date_create("$Gdate $Gtime");
    $club_content .= '<tr><td>'.date_format($date,"$dateformat $timeformat").'</td>';
    $club_content .= '<td><a href="' . $locations_page . $qstring . 'field=' . $field . '" title="' . __('Show Locations Info', 'club') . '" >'.$field.'</a></td>';
    $club_content .= '<td>'.$Notes.'</td></tr>';
  }

  $club_content .= "</table>";

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_team_tournament( $atts, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $dteam   = $defs['defaultTeam'];
  $dseason = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $dteam,
              'season' => $dseason,
      ), $atts));
  $timeformat = get_option('time_format');
  $dateformat = get_option('date_format');
  $locations_page = get_permalink(club_get_option('club_locations_page'));
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';
  $club_content = NULL;

  $club_content .= '<table class="club-schedule-table">
	<tr>
	  <th><b>' . __('Tournament Date', 'club') . '</b></td>
	  <th><b>' . __('Type', 'club') . '</b></td>
	  <th><b>' . __('Location', 'club') . '</b></td>
	  <th><b>' . __('Notes', 'club') . '</b></td>
	</tr>';

  if ( $dteam == 'league' ){
    $query = "SELECT gameID, gameDate, gameTime, fieldname, type, notes " .
             " FROM " . $wpdb->prefix . "clubhouseManager_schedule sc" .
              " Inner join " .$wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = sc.field_id" .
             " WHERE season = '" . $dseason . "' AND type = 'tournament' ORDER BY gameDate ASC";
  }else{
        $query = "SELECT gameID, gameDate, gameTime, fieldname, type, notes " .
             " FROM " . $wpdb->prefix . "clubhouseManager_schedule sc" .
             " Inner join " .$wpdb->prefix . "clubhouseManager_locations lc ON lc.field_id = sc.field_id" .
             " WHERE homeTeam='" . $dteam . "' AND season = '" . $dseason . "' AND type = 'tournament' ORDER BY gameDate ASC";
  }
  
  $resultSchedule = mysql_query($query);

  while ( $row = mysql_fetch_array($resultSchedule) )
  {
    $tournaments[] = $row;
  }

  for ($m=0; $m < count($tournaments); $m++) 
  {
    list($gameID,$Gdate,$Gtime,$field,$Type,$Notes) = $tournaments[$m];
    $date =date_create("$Gdate $Gtime");
    $club_content .= '<tr><td>'.date_format($date,"$dateformat $timeformat").'</td>';
    $club_content .= '<td>'.$Type.'</td>';
    $club_content .= '<td><a href="' . $locations_page . $qstring . 'field=' . $field . '" title="' . __('Show Locations Info', 'club') . '">'.$field.'</a></td>';
    $club_content .= '<td>'.$Notes.'</td></tr>';
  }

  $club_content .= "</table>";

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_locations_info( $club_echo = true )
{
  global $wpdb;

  $club_content = NULL;

  $field = $_GET['field'];

  $query = "SELECT DISTINCT fieldname, directions FROM ".$wpdb->prefix."clubhouseManager_locations ";
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
      $field_arr[] = $row;
  else
    return false;

  if (empty($field_arr))
    return false;

  $club_content .= '<form action="" name="name" method="get">
        <table>
        <tr>
          <td>
            <select size="1" name="field">';

  for ($i=0; $i < count($field_arr); $i++ )
  {
    if ( $field_arr[$i]['fieldname'] == $field )
    {
      $club_content .= '<option selected="selected" value="' . $field_arr[$i]['fieldname'] . '">' . $field_arr[$i]['fieldname'] . '</option>' . "\n";
      $field_key = $i;
    }
    else
      $club_content .= '<option value="' . $field_arr[$i]['fieldname'] . '">' . $field_arr[$i]['fieldname'] . '</option>' . "\n";
  }

  $club_content .= '    </select>&nbsp;
            <input type="submit" value="' . __('Set Location', 'club') . '" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
          <h3><b>'.$field.'</b></h3> 
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>';

  if ( $field_arr[$field_key]['directions'] )
    $club_content .= $field_arr[$field_key]['directions'];
  else
    $club_content .= __('No info for that field were found.', 'club') . "\n";

  $club_content .= "  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr></table></form>" . "\n";

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}



function  club_widget_game_results( $atts, $game_id = NULL, $player_id = NULL, $club_echo = true )
{
  global $wpdb;

  $defs    = club_get_defaults();
  $dteam   = $defs['defaultTeam'];
  $dseason = $defs['defaultSeason'];
     extract(shortcode_atts(array(
              'team' => $dteam,
              'season' => $dseason,
      ), $atts));
  $timeformat = get_option('time_format');
  $dateformat = get_option('date_format');
  $player_stats_page = get_permalink(club_get_option('club_player_stats_page'));
  $club_content = NULL;
  $game_id = $_COOKIE["gameID"];
  if ( get_option('permalink_structure') != '' )
    $qstring='?';
  else
    $qstring='&';

  if ( ($game_id == NULL) AND ($player_id == NULL) )	
  {
    $game_id = club_get_option('club_widget_game_results_game_id');
    $player_id = club_get_option('club_widget_game_results_player_id');
  }
	
  $query = 'SELECT visitingTeam, homeTeam, gameDate, gameTime ' .
           '  FROM ' . $wpdb->prefix . 'clubhouseManager_schedule where gameID=' . $game_id . ' ';
  
  $result = mysql_query($query);
  if ($result)
    $game = mysql_fetch_array($result);
  list($VISITTEAM, $HOMETEAM, $Gdate, $Gtime) = $game;
  $date =date_create("$Gdate $Gtime");
  $query  = 'SELECT * FROM ' . $wpdb->prefix . 'clubhouseManager_boxscores WHERE gameID=' . $game_id . ' ';
  
  
  $result = mysql_query($query);
  if ($result)
    $score  = mysql_fetch_array($result);
  list($gameID,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$vhits,$vruns,$verr,$hhits,$hruns,$herr,$notes,$postID) = $score;

  $club_content .= '<div align="center">
        <tr>
          <td><h2 style="text-align:center;">' . $VISITTEAM . ' ' . $vruns . ' , ' . $HOMETEAM . ' ' . $hruns . '<br>
		'.date_format($date,"$dateformat $timeformat").'</h2></td>

   </tr>
   <tr>
      <td>&nbsp;</td>
   </tr>
   <tr>
      <td align="center"> 
        <table align="center" class="club-boxscore-table">
           <tr bgcolor="' . $bgcolor2 . '"> 
              <th></th>
              <th width="20">1</th>
              <th width="20">2</th>
              <th width="20">3</th>
              <th width="20">4</th>
              <th width="20">5</th>
              <th width="20">6</th>
              <th width="20">7</th>
              <th width="20">8</th>
              <th width="20">9</th>
              <th width="20">R</th>
              <th width="20">H</th>
              <th width="20">E</th>
           </tr>
           <tr> 
              <td style="text-align:left;">' . $VISITTEAM . '&nbsp;&nbsp;</td>
              <td width="20">' . $v1 . '</td>
              <td width="20">' . $v2 . '</td>
              <td width="20">' . $v3 . '</td>
              <td width="20">' . $v4 . '</td>
              <td width="20">' . $v5 . '</td>
              <td width="20">' . $v6 . '</td>
              <td width="20">' . $v7 . '</td>
              <td width="20">' . $v8 . '</td>
              <td width="20">' . $v9 . '</td>            
              <td width="20">' . $vruns . '</td>
	      <td width="20">' . $vhits . '</td>
              <td width="20">' . $verr . '</td>
           </tr>
           <tr> 
              <td style="text-align:left;">' . $HOMETEAM . '&nbsp;&nbsp;</td>
              <td width="20">' . $h1 . '</td>
              <td width="20">' . $h2 . '</td>
              <td width="20">' . $h3 . '</td>
              <td width="20">' . $h4 . '</td>
              <td width="20">' . $h5 . '</td>
              <td width="20">' . $h6 . '</td>
              <td width="20">' . $h7 . '</td>
              <td width="20">' . $h8 . '</td>
              <td width="20">' . $h9 . '</td>            
              <td width="20">' . $hruns . '</td>
	      <td width="20">' . $hhits . '</td>
              <td width="20">' . $herr . '</td>
           </tr>
        </table>
    </td>
   </tr>
   <tr><td>&nbsp;</td></tr> 
   <tr>
      <td>
	<table style="border-width: 0px;">
	 <tr>
	 <td style="padding: 10px; border-width: 0px; vertical-align:top;">
           ';

///////////////////////////////////////////
// GET VISITING TEAM BATTING STATS
///////////////////////////////////////////
    $club_content .= '
         <table class="club-schedule-table">
           <tr>
              <th><b>'.$VISITTEAM.'</b></td>
              <th>AB</th>
              <th>R</th>
              <th>H</th>
              <th>BB</th>
              <th>SO</th>
              <th>RBI</th>
            </tr>';

  $query = "SELECT st.gameID,st.playerID,battOrd,pitchOrd, " .
                   " baAB,ba1b,ba2b,ba3b,baHR,baRE,baFC,baSF,baHP,baRBI,baBB,baK,baLOB,baSB,baRuns,fiPO,fiA,fiE, " .
                   " piWin,piLose,piSave, piIP,piHits,piRuns,piER,piWalks,piSO,firstname, middlename,lastname " .
                   " FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st, " . 
                   " " . $wpdb->prefix."clubhouseManager_schedule s " .
                   " WHERE battOrd > 0 AND st.gameID=$game_id AND p.playerID=st.playerID AND p.teamName='$VISITTEAM'" .
                   " AND p.season=s.season AND st.gameID=s.gameID ORDER BY battOrd ASC";

  $result = mysql_query($query);
  if ($result)
    while( $row = mysql_fetch_array($result) )
    {
      $gresults[] = $row;
    }
  for ($m=0; $m < count($gresults); $m++) 
  {
    list($gameID,$playerID,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB,$baK, $baLOB, $baSB,$baRuns,
         $fiPO, $fiA, $fiE, $piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$firstname,$middlename,$lastname) = $gresults[$m];
    $bahits = ($ba1b+$ba2b+$ba3b+$baHR);

    $club_content .= ' 
	    <tr>
	      <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td> 
              <td> '.$baAB.'</td>
              <td> '.$baRuns.'</td>
              <td> '.$bahits.'</td>
	      <td> '.$baBB.'</td>
	      <td> '.$baK.'</td>
              <td> '.$baRBI.'</td>
           </tr>';
  }

///////////////////////////////////////////
//  GET HOME TEAM BATTING STATS
//////////////////////////////////////////

  $homebatstats = "SELECT st.gameID,st.playerID,battOrd,pitchOrd, " .
                   " baAB,ba1b,ba2b,ba3b,baHR,baRE,baFC,baSF,baHP,baRBI,baBB,baK,baLOB,baSB,baRuns,fiPO,fiA,fiE, " .
                   " piWin,piLose,piSave, piIP,piHits,piRuns,piER,piWalks,piSO,firstname, middlename,lastname " .
                   " FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st, " .
                   " " . $wpdb->prefix."clubhouseManager_schedule s " .
                   " WHERE battOrd > 0 AND st.gameID=$game_id AND p.playerID=st.playerID AND p.teamName='$HOMETEAM'" .
                   " AND p.season=s.season AND st.gameID=s.gameID ORDER BY battOrd ASC";
  $hresult = mysql_query($homebatstats);
  
    $club_content .= '
         </table></td><td style="padding: 10px; border-width: 0px;  vertical-align:top;">
         <table class="club-schedule-table">
           <tr>
              <th><b>'.$HOMETEAM.'</b></td>
              <th>AB</th>
              <th>R</th>
              <th>H</th>
              <th>BB</th>
              <th>SO</th>
              <th>RBI</th>
           </tr>';


    while( $row = mysql_fetch_array($hresult) )
    {
      $hresults[] = $row;
    }
  for ($m=0; $m < count($hresults); $m++)
  {
    list($gameID,$playerID,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR, $baRE, $baFC, $baSF, $baHP, $baRBI, $baBB,$baK, $baLOB, $baSB,$baRuns,
         $fiPO, $fiA, $fiE, $piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$firstname,$middlename,$lastname) = $hresults[$m];
    $bahits = ($ba1b+$ba2b+$ba3b+$baHR);

    $club_content .= '
            <tr>
              <td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>
              <td> '.$baAB.'</td>
              <td> '.$baRuns.'</td>
              <td> '.$bahits.'</td>
              <td> '.$baBB.'</td>
              <td> '.$baK.'</td>
              <td> '.$baRBI.'</td>
           </tr>';
  }

/////////////////////////////////////
//  VISITING TEAM PITCHING STATS
/////////////////////////////////////
    $club_content .= '
</table></td></tr>
     <tr>
       <td style="border-width: 0px;">&nbsp;</td>
       <td style="border-width: 0px;">&nbsp;</td>
     </tr>
       <td style="padding: 10px; border-width: 0px;  vertical-align:top;">
         <table class="club-schedule-table">
           <tr>
             <th><b>'.$VISITTEAM.'</b></th>
             <th>IP</th>
             <th>H</th>
             <th>R</th>
             <th>ER</th>
             <th>BB</th>
             <th>K</th>
           </tr>';

  $query = "SELECT st.*, p.firstname, p.middlename,p.lastname " .
           "  FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st, " .
           "       ".$wpdb->prefix."clubhouseManager_schedule s " .
           " WHERE pitchOrd > 0 AND teamName='$VISITTEAM' AND st.gameID=$game_id AND p.playerID=st.playerID and " .
           "       p.season='$season' and st.gameID=s.gameID ORDER BY pitchOrd ASC";
  
  $result = mysql_query($query);
  if ($result)
    while ( $row = mysql_fetch_array($result) )
    {
      $presults[] = $row;
    }
  for ($m=0; $m < count($presults); $m++)
  {
    list($gameID,$playerID,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,
         $piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE, $baFC, $baSF, $baHP, $baLOB, $fiPO, $fiA, $fiE,
                                                $firstname,$middlename,$lastname) = $presults[$m];

    if ($piWin)
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a> (W)</td>';
    elseif ($piLose)
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a> (L)</td>';
    elseif ($piSave)
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a> (S)</td>';
    else
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>';

    $club_content .= '
               <td> '.$piIP.'</td>
               <td> '.$piHits.'</td>
               <td> '.$piRuns.'</td>
               <td> '.$piER.'</td>
               <td> '.$piWalks.'</td>
               <td> '.$piSO.'</td>
            </tr>';
  }
///////////////////////////////
//  Home Pitching Stats
/////////////////////////////////////
    $club_content .= '
          </table>
       </td>
       <td style="padding: 10px; border-width: 0px; vertical-align:top;">
         <table class="club-schedule-table">
           <tr>
             <th><b>'.$HOMETEAM.'</b></th>
             <th>IP</th>
             <th>H</th>
             <th>R</th>
             <th>ER</th>
             <th>BB</th>
             <th>K</th>
           </tr>';

  $hpquery = "SELECT st.*, p.firstname, p.middlename,p.lastname " .
           "  FROM ".$wpdb->prefix."clubhouseManager_players p, ".$wpdb->prefix."clubhouseManager_stats st, " . 
           "       ".$wpdb->prefix."clubhouseManager_schedule s " .
           " WHERE pitchOrd > 0 AND teamName='$HOMETEAM' AND st.gameID=$game_id AND p.playerID=st.playerID and " .
           "       p.season='$season' and st.gameID=s.gameID ORDER BY pitchOrd ASC";
  $hpresult = mysql_query($hpquery);
  if ($hpresult)
    while ( $row = mysql_fetch_array($hpresult) )
    {
      $hpresults[] = $row;
    }
  for ($m=0; $m < count($hpresults); $m++) 
  {
    list($gameID,$playerID,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,
         $piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE, $baFC, $baSF, $baHP, $baLOB, $fiPO, $fiA, $fiE,
						$firstname,$middlename,$lastname) = $hpresults[$m];

    if ($piWin)
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a> (W)</td>';
    elseif ($piLose)
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a> (L)</td>';
    elseif ($piSave)
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a> (S)</td>';
    else
    $club_content .= '<tr><td style="text-align:left;"><a class="players-page-link" href="' . $player_stats_page . $qstring . 'playerID=' . $playerID . '" title="' . __('Show Players Info', 'club') . '">'.$lastname.', '.$firstname.'</a></td>';

    $club_content .= '
               <td> '.$piIP.'</td>
               <td> '.$piHits.'</td>
               <td> '.$piRuns.'</td>
               <td> '.$piER.'</td>
               <td> '.$piWalks.'</td>
               <td> '.$piSO.'</td>
            </tr>';
  }

  $club_content .= '</table></td></tr></table></td></tr>
   <tr>
      <td>';

  $club_content .= "</td></tr></div><br>";
  
  if($postID){
  $bnuke_content .= query_posts( 'p='.$postID );
  } 

  if ( $club_echo )
    echo $club_content;
  else
    return $club_content;

  return;
}


?>
