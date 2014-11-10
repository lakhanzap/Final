<?php


global $wpdb;


function club_plugin_print_option_page()
{
  global $wpdb;

  $options = get_option('club_plugin_options');

  $team_leaders = $options['club_team_leaders'];
  $bg_color     = $options['club_widget_bg_color'];
  $hover_color     = $options['club_widget_hover_color'];
  $txt_color    = $options['club_widget_txt_color'];
  $header_bg_color    = $options['club_widget_header_bg_color'];
  $header_txt_color    = $options['club_widget_header_txt_color'];
  $wdg_playerstats_player_id  = $options['club_widget_playerstats_player_id'];
  $wdg_game_results_player_id = $options['club_widget_game_results_player_id'];
  $wdg_game_results_game_id   = $options['club_widget_game_results_game_id'];
  $game_results_page   = $options['club_game_results_page'];
  $player_stats_page   = $options['club_player_stats_page'];
  $locations_page   = $options['club_locations_page'];
  $erainnings = $options['club_era_innings'];
  $roster_img = $options['club_roster_img'];
  $roster_num = $options['club_roster_num'];
  $roster_name = $options['club_roster_name'];
  $roster_pos = $options['club_roster_pos'];
  $roster_bats = $options['club_roster_bats'];
  $roster_throws = $options['club_roster_throws'];
  $roster_home = $options['club_roster_home'];
  $roster_school = $options['club_roster_school'];
  $batting_num = $options['club_batting_num'];
  $batting_name = $options['club_batting_name'];
  $batting_ab = $options['club_batting_ab'];
  $batting_r = $options['club_batting_r'];
  $batting_h = $options['club_batting_h'];
  $batting_2b = $options['club_batting_2b'];
  $batting_3b = $options['club_batting_3b'];
  $batting_hr = $options['club_batting_hr'];
  $batting_re = $options['club_batting_re'];
  $batting_fc = $options['club_batting_fc'];
  $batting_sf = $options['club_batting_sf'];
  $batting_hp = $options['club_batting_hp'];
  $batting_rbi = $options['club_batting_rbi'];
  $batting_ba = $options['club_batting_ba'];
  $batting_obp = $options['club_batting_obp'];
  $batting_slg = $options['club_batting_slg'];
  $batting_ops = $options['club_batting_ops'];
  $batting_bb = $options['club_batting_bb'];
  $batting_k = $options['club_batting_k'];
  $batting_lob = $options['club_batting_lob'];
  $batting_sb = $options['club_batting_sb'];
  $pitching_num = $options['club_pitching_num'];
  $pitching_name = $options['club_pitching_name'];
  $pitching_w = $options['club_pitching_w'];
  $pitching_l = $options['club_pitching_l'];
  $pitching_s = $options['club_pitching_s'];
  $pitching_ip = $options['club_pitching_ip'];
  $pitching_h = $options['club_pitching_h'];
  $pitching_r = $options['club_pitching_r'];
  $pitching_er = $options['club_pitching_er'];
  $pitching_bb = $options['club_pitching_bb'];
  $pitching_k = $options['club_pitching_k'];
  $pitching_era = $options['club_pitching_era'];
  $pitching_whip = $options['club_pitching_whip'];

  $fielding_num = $options['club_fielding_num'];
  $fielding_name = $options['club_fielding_name'];
  $fielding_g = $options['club_fielding_g'];
  $fielding_st = $options['club_fielding_st'];
  $fielding_ip = $options['club_fielding_ip'];
  $fielding_op = $options['club_fielding_op'];
  $fielding_po = $options['club_fielding_po'];
  $fielding_a = $options['club_fielding_a'];
  $fielding_err = $options['club_fielding_err'];
  $fielding_dp = $options['club_fielding_dp'];
  $fielding_fp = $options['club_fielding_fp'];
  


  //   get seasons
  $seasons_list    = club_get_seasons();
  $league_list     = club_get_leagues();

  $upid = "";
  $edit_league="";
  $label = "Add League";
  /*if(isset($_REQUEST['uid']) )
  {
    $upid = $_REQUEST['uid'];
    $label = "Edit League";
    $edit_league     = club_get_leagues($_REQUEST['uid']); 
  }*/

  

  $team_list       = club_get_teams($defs['defaultSeason']);
  $defs            = club_get_defaults();

  $players         = club_get_players($defs['defaultSeason']);
  $games           = club_get_past_games_with_results();

  		  $tabclass1 = "";
          $tabclass2 = "";
          $tabclass3 = "";
          $tabclass4 = "";

          if($_GET["tab"] == "1" || $_GET["tab"] =="" ){
          	
          	$tabclass1 = 'class=active';

          }else if($_GET["tab"] == "2"){

          	$tabclass2 = 'class=active';

          }else if($_GET["tab"] == "3"){

          	$tabclass3 = 'class=active';

          }else if($_GET["tab"] == "4"){

          	$tabclass4 = 'class=active';

          }
        

echo '
<div class="wrap">
    <a name="Top"></a>
    <div class="club-icon32"></div>
    <h2>Clubhouse Manager - Baseball Management System</h2>
    <hr />
    <p>
      <b>Welcome to Clubhouse Manager</b><br />
     '. __('Clubhouse Manager is a WordPress plugin for the administration of a single baseball team or league. It is a complete team management tool and information source. Clubhouse Manager provides team and individual information about the players including schedule, field directions, player stats, team stats, player profiles and game results.', 'club') . '<br />
    </p>
    <hr />
    <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
      <div class="postbox-container" id="club-plugin-main">
        <div class="has-sidebar-content">



          <ul class="tabs">
			      <li '.$tabclass1.' id=tab1 ><a href="#season-div">Settings</a></li>
            <li '.$tabclass2.'  id=tab2 ><a href="#club_links">Leagues & Seasons</a></li>
            <li '.$tabclass3.' id=tab3><a href="#club-settings">Display Options</a></li>
            <li '.$tabclass4.'  id=tab4><a href="#teams-div">Addons</a></li>
          </ul>

          <div class="meta-box-sortables ui-sortable tab_container" id="normal-sortables" unselectable="on">
            <div class="postbox ui-droppable tab_content" id="season-div">
            <form name="club_plugin_option_form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-option-page&tab=1">
              <h3 class="hndle">' . __('Settings', 'club') . '</h3>
              <div class="inside-container">
                <div class="active-team">
                  <p>The team chosen here will be the team whose Calendar, Roaster, Results and Stats will be displayed.</p>
                  <p>
                  <label for="club_select_season"><strong>Chose your Team:</strong></label>
                    <select size="1" name="club_def_team_select" class="select-team-single">';
                    reset($team_list);
                    for ( $i=0; $i < count($team_list); $i++ ) {
                      if ( $team_list[$i] == $defs['defaultTeam'] )
                        echo '<option value="' . $i . '" selected="yes">' . $team_list[$i] . '</option>';
                      else
                        echo '<option value="' . $i . '">' . $team_list[$i] . '</option>';
                    }
                    echo '

                    </select>

                  </p>


                </div>
                  <div class="active-team">
                  
                  <p>
                  <label for="club_select_season"><strong>Add Team:</strong></label>';

echo'
           <tr><th class="club_option_left_part"><label for="club_add_new_team">Add new team: </label></th>
                    <td><input type="text" name="club_add_new_team" size="25" value="" />
                      <div class="div-wait" id="divwaitt0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                      <input type="submit" class="button-primary" value="' . __('Add', 'club') . '" id="club_add_new_team_btn_id" name="club_add_new_team_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />
                    </td>
                </tr>
</p>
                   

</div>

                    <div class="active-season">
                  <p><strong>Active Season</strong></p>
                  <p>Select the Season that entire will apply to by default, League selection can be adjusted when editing entires.</p>
                  <p><select size="1" class="select-season-single" name="club_def_season_select">';
                  reset($seasons_list);
                  for ( $i=0; $i < count($seasons_list); $i++ ) {
                    if ( $seasons_list[$i] == $defs['defaultSeason'] )
                      echo '<option value="' . $i . '" selected="yes">' . $seasons_list[$i] . '</option>';
                    else
                      echo '<option value="' . $i . '">' . $seasons_list[$i] . '</option>';
                  }
                  echo '</select></p>
                </div>

                <div class="active-league">';
                //echo "<pre>";
                //print_r($defs);
                //echo $defs['defaultLeague'];
                //die;
                echo '<p><strong>Active League</strong></p>
                  <p>Select the League that entires will apply to by default. League selection can be adjusted when editing entires.</p>
                  <p><select size="1" name="club_def_league_select" class="select-league-single">';
                  for ( $i=0; $i < count($league_list); $i++ ) {
                    if ( $league_list[$i]->leaguename == $defs['defaultLeague'] )
                      echo '<option value="' . $league_list[$i]->leaguename . '" selected="yes">' . $league_list[$i]->leaguename . '</option>';
                    else 
                      echo '<option value="' . $league_list[$i]->leaguename . '">' . $league_list[$i]->leaguename . '</option>';
                  }
                  echo '</select></p>
                </div>

                <div class="check-one">
                  <p><strong>Check One</strong></p>';
                  if($defs['defaultCheck'] == 'Baseball') {
                    echo '<input type="radio" name="club_def_check_select" value="Baseball" id="baseball" checked="checked" /><label for="baseball">Baseball</label><br />';
                  } else {
                    echo '<input type="radio" name="club_def_check_select" value="Baseball" id="baseball" /><label for="baseball">Baseball</label><br />';
                  }

                  if($defs['defaultCheck'] == 'Softball') {
                    echo '<input type="radio" name="club_def_check_select" value="Softball" id="softball" checked="checked" /><label for="softball">Softball</label>';
                  } else {
                    echo '<input type="radio" name="club_def_check_select" value="Softball" id="softball" /><label for="softball">Softball</label>';
                  }
                echo '</div>
              </div>
              <h3 class="hndle">Donations</h3>
              <div class="inside-container">
                <p>Show your support for the Clubhouse Manager plugin by donating to its continued development.</p>
                <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!">   
                <div class="chk-plugindev">';
                if($defs["defaultCredit"] == "1") {
                  echo '<input type=checkbox name="club_plugin_option_plugin_credit" id="club_plugin_option_plugin_credit" checked="checked" />';
                } else {
                  echo '<input type=checkbox name="club_plugin_option_plugin_credit" id="club_plugin_option_plugin_credit" />';
                }

                echo '&nbsp;<label for="club_plugin_option_plugin_credit">After you donate, please feel free to remove the small credit link.</label></div>
                  

                <div class="submit">
                  <div class="div-wait" id="divwaitms0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                  <input type="submit" class="button-primary" value="Update Settings" id="club_set_defs_btn_id" name="club_set_defs_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                </div>
              </div>
            </form>
            </div>


       <div class="postbox ui-droppable tab_content" id="club_links">
          <h3 class="hndle">' . __('Leagues', 'club') . '</h3>
          <div class="inside-container">
            <p>Enter leagues in order to group games. You can also use leagues to group tournament games separate from regular games.</p>
            <form name="club_plugin_option_form" id="club_plugin_option_form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-option-page&tab=2">
              <input type="hidden" name="club_league_upid" id="club_league_upid" value="" >
              <input type="hidden" name="club_league_delid" id="club_league_delid" value="" >';
              wp_nonce_field('club_plugin_options');
              echo '<div class="add-new-league">
                      <label for="club_add_new_league">Name of League:</label>
                      <input type="text" name="club_add_new_league" id="club_add_new_league" size="25" value="" />
                      <div class="div-wait" id="divwaitt0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                      <input type="submit" class="button-primary" value="' . __($label, 'club') . '" id="club_add_new_league_btn_id" name="club_add_new_league_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                    </div>';
              echo '<div class="list-contaier">';
              if(count($league_list)>0)
              {
                for ( $i=0; $i < count($league_list); $i++ ) { //echo "<pre>"; print_r($league_list); die;
                  $lid = $league_list[$i]->league_id;
                  $lname = $league_list[$i]->leaguename;
                  $vale = "return League_Edit(".$lid.",'".$lname."');";
                  $vald = "return League_Delete(".$lid.");";
                  echo '<div class="list-item"><div class="item-name">'.$league_list[$i]->leaguename.'</div><div class="item-links"><a href="javascript: void(0);" onclick="'.$vale.'" >Edit</a> | <a href="javascript: void(0);" name="legeau-delete-btn" id="legeau-delete-btn" onclick="'.$vald.'" >Delete</a></div></div>';
                }
              }  
                echo '</div></form></div>

            <h3 class="hndle">' . __('Seasons', 'club') . '</h3>
            <div class="inside-container">
              <form id="club_plugin_season_option_form" name="club_plugin_season_option_form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-option-page&tab=2">
              <input type="hidden" name="club_season_upid" id="club_season_upid" value="" >
              <input type="hidden" name="club_season_delid" id="club_season_delid" value="" >';
              wp_nonce_field('club_plugin_options');
              echo '<div class="add-new-season">
                    <label for="club_season_new">Name of Season:</label>
                    <input type="text" size="25" id="club_season_new_id" name="club_season_new" value="" />
                    <div class="div-wait" id="divwaitsn0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                    <input type="submit" class="button-primary" value="Add Season" id="club_add_season_btn_id" name="club_add_season_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                </div>';

              echo '<div class="list-contaier">';
            if(count($seasons_list)>0)
            {
              for ( $i=0; $i < count($seasons_list); $i++ ) {
                  $sid = $seasons_list[$i];
                  $sname = $seasons_list[$i];
                  $vale = "return Season_Edit('".$sid."','".$sname."');";
                  $vald = "return Season_Delete('".$sid."');";
                  echo '<div class="list-item"><div class="item-name">'.$seasons_list[$i].'</div><div class="item-links"><a href="javascript: void(0);" onclick="'.$vale.'" >Edit</a> | <a href="javascript: void(0);" name="legeau-delete-btn" id="legeau-delete-btn" onclick="'.$vald.'" >Delete</a></div></div>';
                }
             }   
                echo '</div>
                </form>
            

            </div>
          </div>








            <div class="postbox ui-droppable tab_content" id="club-settings">
              <h3 class="hndle">' . __('The options and stats with checkmarks will be display throughout the website.', 'club') . '</h3>
              <div class="inside-container">
                <form name="club_plugin_option_form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-option-page&tab=3">';
                wp_nonce_field('club_plugin_options');
                echo '<table class="form-table table-stats">

    <tr>
      <th class="club_option_left_part"><label for="club_plugin_option_roster_widget">Display Options for Player Information</label></th>
      <td>
    <table id="club_options_table">
      <tr>
        <th>Img</th>
        <th>#</th>
        <th>Name</th>
        <th>Position</th>
        <th>Bats</th>
        <th>Throws</th>
        <th>Home</th>
        <th>School</th>
      </tr>
      <tr>';
      if ($roster_img == 'true') 
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_img" value="img" checked="checked"></td>';
      else 
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_img" value="img"></td>';
      if ($roster_num == 'true') 
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_num" value="num" checked="checked"></td>';
      else 
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_num" value="num"></td>';
                  if ($roster_name == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_name" value="name" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_name" value="name"></td>';
                  if ($roster_pos == 'true') 
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_pos" value="pos" checked="checked"></td>';
      else
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_pos" value="pos"></td>';
      if ($roster_bats == 'true')
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_bats" value="bats" checked="checked"></td>';
      else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_bats" value="bats"></td>';
      if ($roster_throws == 'true')
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_throws" value="throws" checked="checked"></td>';
      else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_throws" value="throws"></td>';
      if ($roster_home == 'true')
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_home" value="home" checked="checked"></td>';
      else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_home" value="home"></td>';
      if ($roster_school == 'true')
        echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_school" value="school" checked="checked"></td>';
      else 
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_roster_school" value="school"></td>';
echo '
      </tr>
    </table>
      </td>
    </tr>
                <tr>
                  <th class="club_option_left_part"><label for="club_plugin_option_batting_widget">Display Options for Batting Statistics</label></th>
                  <td>
                <table id="club_options_table">
                  <tr>
                    <th id="club_option_subtable">#</th>
                    <th id="club_option_subtable">Batter</th>
                    <th id="club_option_subtable">AB</th>
                    <th id="club_option_subtable">R</th>
                    <th id="club_option_subtable">H</th>
                    <th id="club_option_subtable">2B</th>
                    <th id="club_option_subtable">3B</th>
                    <th id="club_option_subtable">HR</th>
                    <th id="club_option_subtable">RE</th>
                    <th id="club_option_subtable">FC</th>
                    <th id="club_option_subtable">SF</th>
                    <th id="club_option_subtable">HP</th>
                    <th id="club_option_subtable">RBI</th>
                    <th id="club_option_subtable">BA</th>
                    <th id="club_option_subtable">OBP</th>
                    <th id="club_option_subtable">SLG</th>
                    <th id="club_option_subtable">OPS</th>
                    <th id="club_option_subtable">BB</th>
                    <th id="club_option_subtable">K</th>
                    <th id="club_option_subtable">LOB</th>
                    <th id="club_option_subtable">SB</th>
                  </tr>
                  <tr>';
                  if ($batting_num == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_num" value="num" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_num" value="num"></td>';
                  if ($batting_name == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_name" value="name" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_name" value="name"></td>';
                  if ($batting_ab == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_ab" value="ab" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_ab" value="ab"></td>';
                  if ($batting_r == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_r" value="r" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_r" value="r"></td>';
                  if ($batting_h == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_h" value="h" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_h" value="h"></td>';
                  if ($batting_2b == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_2b" value="2b" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_2b" value="2b"></td>';
                  if ($batting_3b == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_3b" value="3b" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_3b" value="3b"></td>';
                  if ($batting_hr == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_hr" value="hr" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_hr" value="hr"></td>';
                  if ($batting_re == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_re" value="re" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_re" value="re"></td>';                    
                  if ($batting_fc == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_fc" value="fc" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_fc" value="fc"></td>';
                  if ($batting_sf == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_sf" value="sf" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_sf" value="sf"></td>';
                  if ($batting_hp == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_hp" value="hp" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_hp" value="hp"></td>';
                  if ($batting_rbi == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_rbi" value="rbi" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_rbi" value="rbi"></td>';
                  if ($batting_ba == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_ba" value="ba" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_ba" value="ba"></td>';
                  if ($batting_obp == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_obp" value="obp" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_obp" value="obp"></td>';
                  if ($batting_slg == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_slg" value="slg" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_slg" value="slg"></td>';
                  if ($batting_ops == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_ops" value="ops" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_ops" value="ops"></td>';
                  if ($batting_bb == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_bb" value="bb" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_bb" value="bb"></td>';
                  if ($batting_k == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_k" value="k" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_k" value="k"></td>';
                  if ($batting_lob == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_lob" value="lob" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_lob" value="lob"></td>';
                  if ($batting_sb == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_sb" value="sb" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_batting_sb" value="sb"></td>';                    
echo '
                  </tr>
                </table>
                  </td>
                </tr>
                <tr>
                  <th class="club_option_bbft_part"><label for="club_plugin_option_pitching_widget">Display Options for Pitching Statistics</label></th>
                  <td>
                <table id="club_options_table">
                  <tr>
                    <th id="club_option_subtable">#</th>
                    <th id="club_option_subtable">Pitcher</th>
                    <th id="club_option_subtable">W</th>
                    <th id="club_option_subtable">L</th>
                    <th id="club_option_subtable">S</th>
                    <th id="club_option_subtable">IP</th>
                    <th id="club_option_subtable">H</th>
                    <th id="club_option_subtable">R</th>
                    <th id="club_option_subtable">ER</th>
                    <th id="club_option_subtable">BB</th>
                    <th id="club_option_subtable">K</th>
                    <th id="club_option_subtable">ERA</th>
                    <th id="club_option_subtable">WHIP</th>
                  </tr>
                  <tr>';
                  if ($pitching_num == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_num" value="num" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_num" value="num"></td>';
                  if ($pitching_name == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_name" value="name" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_name" value="name"></td>';
                  if ($pitching_w == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_w" value="w" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_w" value="w"></td>';
                  if ($pitching_l == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_l" value="l" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_l" value="l"></td>';
                  if ($pitching_s == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_s" value="s" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_s" value="s"></td>';
                  if ($pitching_ip == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_ip" value="ip" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_ip" value="ip"></td>';
                  if ($pitching_h == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_h" value="h" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_h" value="h"></td>';
                  if ($pitching_er == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_r" value="r" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_r" value="r"></td>';
                  if ($pitching_er == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_er" value="er" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_er" value="er"></td>';
                  if ($pitching_bb == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_bb" value="bb" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_bb" value="bb"></td>';                    
                  if ($pitching_k == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_k" value="k" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_k" value="k"></td>';
                  if ($pitching_era == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_era" value="era" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_era" value="era"></td>';
                  if ($pitching_whip == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_whip" value="whip" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_pitching_whip" value="whip"></td>';
echo '
                  </tr>
                </table>
                  </td>
                </tr>

                <tr>
                  <th class="club_option_bbft_part"><label for="club_plugin_option_fielding_widget">Display Options for Fielding Statistics</label></th>
                  <td>
                <table id="club_options_table">
                  <tr>
                    <th id="club_option_subtable">#</th>
                    <th id="club_option_subtable">Name</th>
                    <th id="club_option_subtable">G</th>
                    <th id="club_option_subtable">ST</th>
                    <th id="club_option_subtable">IP</th>
                    <th id="club_option_subtable">OP</th>
                    <th id="club_option_subtable">PO</th>
                    <th id="club_option_subtable">A</th>
                    <th id="club_option_subtable">ERR</th>
                    <th id="club_option_subtable">DP</th>
                    <th id="club_option_subtable">FP</th>
                  </tr>
                  <tr>';
                  if ($fielding_num == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_num" value="num" checked="checked"></td>';
                   // echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_num" value="num" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_num" value="num"></td>';
                  if ($fielding_name == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_name" value="name" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_name" value="name"></td>';
                  if ($fielding_g == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_g" value="g" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_g" value="g"></td>';
                  if ($fielding_st == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_st" value="st" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_st" value="st"></td>';
                  if ($fielding_ip == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_ip" value="ip" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_ip" value="ip"></td>';
                  if ($fielding_op == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_op" value="op" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_op" value="op"></td>';
                  if ($fielding_po == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_po" value="po" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_po" value="po"></td>';
                  if ($fielding_a == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_a" value="a" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_a" value="a"></td>';
                  if ($fielding_err == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_err" value="err" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_err" value="err"></td>';
                  if ($fielding_dp == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_dp" value="dp" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_dp" value="dp"></td>';
                  if ($fielding_fp == 'true')
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_fp" value="dp" checked="checked"></td>';
                  else
                    echo '<td id="club_option_subtable"><input type=checkbox name="club_plugin_option_fielding_fp" value="dp"></td>';
                  echo '</tr>
                </table>
                  </td>
                </tr>
                </table>

                <h3 class="hndle">Coose the WordPress page you would like to use to display the Clubhouse Manaegr information</h3>
                <table class="form-table page-display-options">
                <tr><th class="club_option_left_part"><label>Team Stats Page</label></th>
                    <td>' .wp_dropdown_pages(array('name'=>'club_plugin_option_game_results_page','selected'=>"$game_results_page",'echo'=>'0')).'
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label>Roster</label></th>
                    <td>' .wp_dropdown_pages(array('name'=>'club_plugin_option_player_stats_page','selected'=>"$player_stats_page",'echo'=>'0')).' 
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label>Calendar Page</label></th>
                    <td>' .wp_dropdown_pages(array('name'=>'club_plugin_option_locations_page','selected'=>"$locations_page",'echo'=>'0')).'
                    </td>
                </tr>
                </table>

                <h3 class="hndle">Table Color Options</h3>
                <table class="form-table table-color-options">';
                echo '<tr><th class="club_option_left_part"><label for="club_plugin_option_header_bg_color">Table Header Background Color</label></th>
                    <td><input type="text" name="club_plugin_option_header_bg_color" id="club_plugin_option_header_bg_color" value="' . $header_bg_color . '" />
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label for="club_plugin_option_header_txt_color">Table Header Text Color</label></th>
                    <td><input type="text" name="club_plugin_option_header_txt_color" id="club_plugin_option_header_txt_color" value="' . $header_txt_color . '" />
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label for="club_plugin_option_bg_color">Table Body Background Color</label></th>
                    <td><input type="text" name="club_plugin_option_bg_color" id="club_plugin_option_bg_color" value="' . $bg_color . '" />
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label for="club_plugin_option_txt_color">Table Body Text Color</label></th>
                    <td><input type="text" name="club_plugin_option_txt_color" id="club_plugin_option_txt_color" value="' . $txt_color . '" />
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label for="club_plugin_option_hover_color">Table Body Hover Color</label></th>
                    <td><input type="text" name="club_plugin_option_hover_color" id="club_plugin_option_hover_color" value="' . $hover_color . '" />
                    </td>
                </tr>
                </table>
                <div class="submit">
                  <div class="div-wait" id="divwaitms0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                  <input type="submit" class="button-primary" value="Save Changes" id="club_save_btn_above" name="club_update_options_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                </div>
                </form>
              </div>
            </div>
            
            <div class="postbox ui-droppable tab_content" id="teams-div">
              <h3 class="hndle">' . __('Addons', 'club') . '</h3>
              <div class="inside-container">
              <form name="club_plugin_option_form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-option-page&tab=4">';
              wp_nonce_field('club_plugin_options');
              echo '<div class="clubhouse-uploader">
              <img src="' . CHMPURL . 'images/clubhouse-manager-uploader-icon.png" alt="" style="width:50px;height:50px">
              <p class="uploader">Clubhouse Manager Uploader<span>$5</span></p>

              <p>Add the ability to upload information using CSV or XLS files.</p>
              <input type="button" class="button-primary" value="Upgrade" id="club_save_btn_above" name="club_update_options_btn" />
               </div>

             
             
              <div class="clubhouse-uploader" style="margin-left:15px;"><p>More addons are in development. If you have a request please use our <a href="#">Addons Request Page</a> to submit your ideas. To stay up to date with Announcements, Development Progress and Special Offers, you can sign-up for our <a href="#">Mailing List</a>.</p></div>
               <div>&nbsp</div>
               <div class="clubhouse-uploader">
<img src="' . CHMPURL . 'images/clubhouse-manager-advanced-statistics-icon.png" alt="" style="width:50px;height:50px">
               <p class="uploader">Advanced Statistics<span>$5</span></p>
              <p>Add the ability to upload information using CSV or XLS files.</p>
              <input type="button" class="button-primary" value="Coming Soon" id="club_save_btn_above" name="club_update_options_btn" />
              </div>
             </form>

            </div>
              
              
          </div>
        </div>
      </div>

    </div>';
echo '</div>
</div>';

}

////////////////////////////////////////////////////////////////////////////////
// show locations page
////////////////////////////////////////////////////////////////////////////////
function club_plugin_print_fields_page( $edit_field = false ) {
  global $wpdb;
//echo "<pre>";print_r($_POST);
  $options = get_option('club_plugin_options');
  $fields_list = club_get_locations();
  $field_id = $_POST['club_form_edit'];
  $fieldname   = NULL;
  if (isset($field_id)) {
   // echo "asd";die;
    //$field_id =$_POST['club_form_edit'];
    //$field_id   = club_get_option('club_location_edit_id');
    $fieldname  = $fields_list[$field_id]['fieldname'];
    $directions = club_get_field_data($fieldname);
  }

//die;
echo '
<div class="wrap">
  <a name="Top"></a>
  <div class="club-icon32"></div>
  <h2>Clubhouse Manager Plugin  -  Manage Fields</h2>
  <hr />
  <div class="clear"></div>
  <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
    <div class="postbox-container" id="club-plugin-main">
      <div class="has-sidebar-content">
        <div class="meta-box-sortables ui-sortable" id="normal-sortables" unselectable="on">
          <div class="postbox ui-droppable" id="club-fields-edit">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __('Field Edit', 'club') . '</h3>
            <div class="inside">
              <b>Add or Edit a Location</b>
              <p>
               '. __('Edit the location or add a new entry.', 'club').'
              </p>
              <form name="club_fields_edit_form" method="post" id="club_fields_edit_form" action="">';


  wp_nonce_field('club_fields_edit');

echo ' <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="'.plugin_dir_url( __FILE__ ) .'includes/js/jquery.geocomplete.js"></script>
      <script type="text/javascript">
      jQuery(function(){
        var fieldlocation = "";

        var field = jQuery("#club_field_edit_fieldname").val();

        if(field == "")
        {
          fieldlocation = "";
        }
        else
        {
          fieldlocation = field;
        }
      var options = {
          map: ".map_canvas",
          location: fieldlocation
        };
        
        jQuery("#club_field_edit_fieldname").geocomplete(options);
         });
        </script>
    
              <table class="form-table">
              <tr><th class="club_option_left_part"><label for="club_field_edit_fieldname">Field Name</label></th>
                  <td>
                      <input id="club_field_edit_fieldname" name="club_field_edit_fieldname"  type="text" value="' . $fieldname . '" placeholder="Type in an address" size="30" />
                      <input type="hidden" name="field_id" id="field_id" value= "'.$field_id.'">
                  </td>
                  
              </tr>
              <td><div style="height:300px;width:300px;" class="map_canvas"></div></td>
          </tr>';  
                
             
 /*<td>
 <iframe id="fieldiframe" width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="20" target="_top"
src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='.$fieldname.'&amp;ie=UTF8t=m&amp;output=embed">
</iframe></td>*/



echo '
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td>';

  if ( $edit_field === true )
  echo '                    <input type="hidden" value="' . $field_id . '" name="club_delete_field_id" />';
  else
  echo '                    <input type="hidden" value="none" name="club_delete_field_id" />';

echo '
                  </td>
              </tr>
              </table>
              <div class="submit-bottom-div">
                <div class="div-wait" id="divwaitedl0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                <input type="submit" class="button-primary" value="Save Changes" id="club_save_location_btn_id" name="club_save_location_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />&nbsp;';

  if ( $edit_field === true )
  {
  echo '
                  <div class="div-wait" id="divwaitedl1"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                  <input type="submit" class="button-primary" value="Delete Field" id="club_delete_field_' . $field_id . '_btn_id" name="club_delete_field_' . $field_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />';
  }

echo '
              </div>
              </form>


            </div>
          </div>
          <div class="postbox ui-droppable" id="club-locations-list">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __('Fields List', 'club') . '</h3>
            <div class="inside">
              <p>
               '. __('Edit or delete a Fields.', 'club').'
              </p>
              <form name="club_fields_list_form" method="post" action="">';

  wp_nonce_field('club_fields_list');

echo '
              <table class="form-table">
              <tr><th class="club_option_left_part"><label for="">Total Fields:</label></th>
                  <td>' . count($fields_list) . '&nbsp;&nbsp;
                    <div class="div-wait" id="divwaitlloc0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                    <input type="submit" class="button-primary" value="Delete all Fields" id="club_del_all_fields_btn_id" name="club_del_all_fields_btn" onclick="return confirm(\'Are you sure you want to delete ALL locations?\');"  /><br />
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_list_fields">Current Fields:</label></th>
                  <td><ul class="locations-list">';

  for ( $i=0; $i < count($fields_list); $i++ )
  {
    $fieldname   = $fields_list[$i]['fieldname'];
    $directions  = $fields_list[$i]['directions'];
  echo '
                         <li class="locations-list-entry">
                           <label for="club_field_' . $i . '" class="locations-list-entry-label">' . $fieldname . '</label> -- &nbsp;
                           <div class="div-wait" id="divwaitlloc1"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                           
                           <input type="button" class="button-primary" value="Edit" id="club_edit_field_' . $i . '_btn_id" name="club_edit_field_' . $i . '_btn" onclick="fieldEditSubmit('.$i.');" />&nbsp;&nbsp;
                           <div class="div-wait" id="divwaitlloc2"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                           <input type="submit" class="button-primary" value="Delete" id="club_delete_field_' . $i . '_btn_id" name="club_delete_field_' . $i . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />&nbsp;&nbsp;
                         </li>';
  }

echo '<input type="hidden" id="club_form_edit"  name="club_form_edit"/>
                      </ul></td>
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td></td>
              </tr>
              </table>
              <div class="submit-bottom-div">
                <div class="right-bottom"><a href="#Top">Back to Top</a></div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';

  return;
}



////////////////////////////////////////////////////////////////////////////////
// show players page
////////////////////////////////////////////////////////////////////////////////
function club_plugin_print_players_option_page( $edit_player = false )
{
  global $wpdb;

  $options = get_option('club_plugin_options');

  //   get seasons
  $defs         = club_get_defaults();
  $season = $defs['defaultSeason'];
  $team   = $defs['defaultTeam'];
  $seasons_list = club_get_seasons();
  $team_list    = club_get_teams($season);
  $players      = array();
  $player_id    = $_POST['club_players_assign_select'][0];
  $player       = NULL;

  if ( $edit_player === true )
  {
    //echo $player_id;die;
    $season  = club_get_option('club_players_season');
    $team    = club_get_option('club_players_team');
    $players = club_get_players_season_team($season, $team);
    $player  = $players[$player_id];

    $player_obj = club_get_player_info($player_id, $season);
    //   set player variables
    //print_r($player_obj);die;
    $firstname  = $player_obj->firstname;
    //echo $firstname;die;
    $middlename = $player_obj->middlename;
    $lastname   = $player_obj->lastname;

    $profile    = $player_obj->profile;
    $positions  = $player_obj->positions;
    $bats       = $player_obj->bats;
    $throws     = $player_obj->throws;
    $height     = $player_obj->height;
    $weight     = $player_obj->weight;
    $bdate      = $player_obj->bdate;
    $address    = $player_obj->address;
    $city       = $player_obj->city;
    $state      = $player_obj->state;
    $zip        = $player_obj->zip;
    $homephone  = $player_obj->homePhone;
    $cellphone  = $player_obj->cellphone;
    $workphone  = $player_obj->workPhone;
    $jerseynum   = $player_obj->jerseyNum;

    $email       = $player_obj->email;
    $school      = $player_obj->school;
    $piclocation = $player_obj->picLocation;
  

 $tabclass1 = "";
          $tabclass2 = "";
          $tabclass3 = "";


          if($_GET["tab"] == "1" || $_GET["tab"] =="" ){
            
            $tabclass1 = 'class=active';

          }else if($_GET["tab"] == "2"){

            $tabclass2 = 'class=active';

          }else if($_GET["tab"] == "3"){

            $tabclass3 = 'class=active';

          }
        

  }



echo '

<div class="wrap">
  <a name="Top"></a>
  <div class="club-icon32"></div>
  <h2>Clubhouse Manager Plugin  -  Players Settings</h2>
  <hr />
 

  <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
    <div class="postbox-container" id="club-plugin-main">
      <div class="has-sidebar-content">
      
      <ul class="tabs">
            <li '. $tabclass1.' id=tab1 ><a href="#manage-div">Manage Player</a></li>
            <li '. $tabclass2.' id=tab2 ><a href="#assign-team">Assign Team`s Playesrs</a></li>
            <li '. $tabclass3.' id=tab3 ><a href="#bulk-div">Bulk Uploader </a></li>
           
          </ul>
           <div class="meta-box-sortables ui-sortable tab_container" id="normal-sortables" unselectable="on">
        <div class="postbox ui-droppable tab_content" id="manage-div">
           
             <h3 class="hndle">' . __('Manage Player', 'club') . '</h3>
                <div class="inside-container">
   <form name="club_players_edit_form" id="club_players_edit_form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-players&tab=1">';


  wp_nonce_field('club_players_edit_form');


echo '
              <table class="form-table">
              <tr><th class="club_option_left_part"><label for="club_player_edit_fname">First Name</label></th>
                  <td><input type="text" name="club_player_edit_fname" id="club_player_edit_fname" value="' . $firstname . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_mname">Middle Name</label></th>
                  <td><input type="text" name="club_player_edit_mname" value="' . $middlename . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_lname">Last Name</label></th>
                  <td><input type="text" name="club_player_edit_lname" id="club_player_edit_lname" value="' . $lastname . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_pprofile">Player Profile</label></th>
                  <td><textarea class="club_textarea" rows="10" cols="30" name="club_player_edit_pprofile">' . $profile . '</textarea></td>';
// //echo "<pre>";
//                 print_r($profile );
//                 //echo $defs['defaultLeague'];
//                 //die;
//         exit;

  if ( !empty($season) AND !empty($team) )
    $players = club_get_all_players();
echo '
              
              <tr><th class="club_option_left_part"><label for="club_players_list_players">Edit palyer:</label></th>
              <td> 
                  <select name="club_players_assign_select[]" id="club_players_assign_select_id" size="10" multiple="multiple">';

  for ( $i=0; $i < count($players); $i++ )
  {
    $player_id1   = $players[$i]['playerID'];
    $lastname   = $players[$i]['lastname'];
    $firstname  = $players[$i]['firstname'];
    $middlename = $players[$i]['middlename'];
  echo '<option value="' . $player_id1 . '">' . $lastname . ', ' . $firstname . ' ' . $middlename . '</option>';
  }

echo '
                      </select>
                      <div>
                      <input type="submit" class="button-primary" value="Edit" id="club_edit_player_' . $player_id . '_btn_id" name="club_edit_player_' . $player_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                      </div></td>
                        </tr>
            
              <tr><th class="club_option_left_part"><label for="club_player_edit_position">Position(s)</label></th>
                  <td><input type="text" name="club_player_edit_position" value="' . $positions . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_bats">Bats</label></th>
                  <td><input type="text" name="club_player_edit_bats" value="' . $bats . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_throws">Throws</label></th>
                  <td><input type="text" name="club_player_edit_throws" value="' . $throws . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_height">Height</label><i> (value in inches) </i></th>
                  <td><input type="text" name="club_player_edit_height" value="' . $height . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_weight">Weight</label></th>
                  <td><input type="text" name="club_player_edit_weight" value="' . $weight . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_bdate">Birth Date</label></th>
                  <td><input id="datepicker" type="text" name="club_player_edit_bdate" value="' . $bdate . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_address">Address</label></th>
                  <td><input type="text" name="club_player_edit_address" value="' . $address . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_city">City</label></th>
                  <td><input type="text" name="club_player_edit_city" value="' . $city . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_state">State</label></th>
                  <td><input type="text" name="club_player_edit_state" value="' . $state . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_zip">Zip</label></th>
                  <td><input type="text" name="club_player_edit_zip" value="' . $zip . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_hphone">Home Phone</label></th>
                  <td><input type="text" name="club_player_edit_hphone" value="' . $homephone . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_cphone">Cell Phone</label></th>
                  <td><input type="text" name="club_player_edit_cphone" value="' . $cellphone . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_wphone">Work Phone</label></th>
                  <td><input type="text" name="club_player_edit_wphone" value="' . $workphone . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_email">Email</label></th>
                  <td><input type="text" name="club_player_edit_email" value="' . $email . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_player_edit_school">School</label></th>
                  <td><input type="text" name="club_player_edit_school" value="' . $school . '"></td>
              </tr>
             <tr><th class="club_option_left_part"><label for="club_player_edit_pictureloc">Image</label></th>
       <td><label for="upload_image">
         <input id="upload_image" type="text" size="36" name="club_player_edit_pictureloc" value="' . $piclocation . '" />
         <input id="upload_image_button" type="button" value="Upload Image" />
         <br />Enter an URL or upload an image for player profile.
       </label></td>
              </tr>
                  </td>
              </tr>
              </table>';


     
             

echo '
              <table class="form-table">
             
             

              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td><hr /></td>
              </tr>

                    
                        
      
              </table>
          
     

              <div class="submit">';

  if ( $edit_player === true )
echo '
                <div class="div-wait" id="divwaitped1"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                <input type="submit" class="button-secondary" value="Update Player" id="club_update_player_' . $player_id . '_btn_id" name="club_update_player_' . $player_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                <div class="right-bottom"><a href="#Top">Back to Top</a></div>';

//echo "<pre>";
//                 print_r($edit_player );
//                 //echo $defs['defaultLeague'];
//                 //die;
//         exit;
  else echo '

                <div class="div-wait" id="divwaitped1"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                <input type="submit" class="button-secondary" value="Save Players Data" id="club_save_player_btn_id" name="club_save_player_btn"      onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />';
         
echo '
      </div>
              </form>
                 
            </div>
          </div>

          <div class="postbox ui-droppable tab_content" id="assign-team">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __('Assign Existing Players to Team Roster', 'club') . '</h3>
            <div class="inside">
              <p>
               '. __('Select a team and season to manage its roster.', 'club').' 
              </p>
              <form id="club-players-season-team-form"  name="club-players-season-team-form" method="post" action="'.site_url().'/wp-admin/admin.php?page=club-players&tab=2">';

  wp_nonce_field('club-players-season-team-form');

echo '
              <table class="form-table">
              <input type="hidden" id="plugin_url" value="'.CHMPURL.'">
              <tr><th class="club_option_left_part"><label for="club_players_select_season">Select season:</label></th>';
              $ajpath = CHMPURL.'club-get-teams.php';
        echo '<input type=hidden id=path value='.$ajpath.'>
                  <td><select size="1" id="club_players_select_season_id" name="club_players_select_season">';
// print_r($ajpath);
// exit;
        

  for ( $i=0; $i < count($seasons_list); $i++ )
  {
    if ( $seasons_list[$i] == $season )
    echo '<option selected="selected" value="' . $seasons_list[$i] . '">' . $seasons_list[$i] . '</option>';
    else
    echo '<option value="' . $seasons_list[$i] . '">' . $seasons_list[$i] . '</option>';
  }

echo '
                    </select>
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_players_select_season_team">Select team: </label></th>
                  <td><select size="1" id="club_players_select_season_team_id" name="club_players_select_season_team">';

  for ( $i=0; $i < count($team_list); $i++ )
  {
    if ( $team_list[$i] == $team )
    echo '<option selected="selected" value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
    else
    echo '<option value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
  }

echo '
                    </select><br /><br />
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td><hr /></td>
              </tr>';
                                         
  if ( !empty($season) AND !empty($team) )
    $players = club_get_all_players();

  
echo '
              <tr><th class="club_option_left_part"><label for="">Total Players:</label></th>
                  <td>' . count($players) . '</td>
              </tr>
                </tr>

              <tr><th class="club_option_left_part"><label for="club_player_edit_jerseynum">Jersey Number</label></th>
                  <td><input type="text" name="club_player_edit_jerseynum" value="' . $jerseynum . '"></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_players_list_players">Assign Players:</label></th>
                  <td><select name="club_players_assign_select[]" id="club_players_assign_select_id" size="8" multiple="multiple">';

  for ( $i=0; $i < count($players); $i++ )
  {
    $player_id   = $players[$i]['playerID'];
    $lastname   = $players[$i]['lastname'];
    $firstname  = $players[$i]['firstname'];

    $middlename = $players[$i]['middlename'];
  echo '<option value="' . $i . '">' . $lastname . ', ' . $firstname . ' ' . $middlename . '</option>';
  }

echo '
                      </select>
                      <div>
                        <div class="div-wait" id="divwaitcpl' . $i . '"><img src="' . CHMPURL . 'img/loading.gif" /></div>';
                           /*<input type="submit" class="button-primary" value="Edit" id="club_edit_player_' . $player_id . '_btn_id" name="club_edit_player_' . $player_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />*/
       echo '                 </tr>

      <td class="remove-player"><ul class="players-list">';

    $players = club_get_players_season_team($season,$team);  

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

echo '
                      </ul></td>
            
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td></td>
            
              </table>
              <div class="submit-bottom-div">
                <div class="div-wait" id="divwaitapl0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                <input type="submit" class="button-primary" value="Save Roster Changes" id="club_assign_players_team_btn_id" name="club_assign_players_team_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                <div class="right-bottom"><a href="#Top">Back to Top</a></div>
              </div>
              </form>
            </div>
          </div>
                    <div class="postbox ui-droppable tab_content" id="bulk-div">
          
             <h3 class="hndle">' . __('Upload Players', 'club') . '</h3>
             <div class="inside-container">
               <p>
                '. __('Choose a file to upload in the form: ', 'club').'
               '. __('teamName, firstname, middlename, lastname, img,positions, bats, throws, height, weight, address, city, state, zip, homePhone, workPhone, cellphone, jerseyNum, picLocation, season, profile, email, school, bdate.', 'club').'
               </p>

            

               <table class="form-table">
               <tr><th class="club_option_left_part"><label for="">File</label></th>
                   <td>
                     <form enctype="multipart/form-data" method="POST" action="'.site_url().'/wp-admin/admin.php?page=club-players&tab=3">

                       <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                       <input name="club_uploadedfile" type="file" /><br />
                       <input type="submit" name="club_players_file_upload_btn" value="Upload" />
                     </form>
                   </td>
               </tr>
               <tr><th class="club_option_left_part"><label for=""></label></th>
                   <td></td>
               </tr>
               </table>
               <div class="submit-bottom-div">
                 
               </div>
             </div>
           </div>

        </div>
      </div>
    </div>
  
    </div>
  </div>
</div>';

}



////////////////////////////////////////////////////////////////////////////////
// show schedules page
////////////////////////////////////////////////////////////////////////////////

function club_plugin_print_schedules_page( $edit_game = false )
{
//echo "<pre>";print_r($_POST);
  global $wpdb;

  $defs    = club_get_defaults();
  
  $options = get_option('club_plugin_options');

  $fields_list  = club_get_locations();
  $seasons_list = club_get_seasons();
  $season       = $defs['defaultSeason'];

  $team_list    = club_get_teams($season);

  $games        = club_get_schedules($season);

  $hteam  = NULL;
  $vteam  = NULL;

  if ( $edit_game === true )
  {

 $params = array_flip($_POST);
   $gameID = preg_replace('/\D/', '', $params['Edit']);
    $game_id    = $gameID;

   // $game_id    = club_get_option('club_game_edit_id');
    //   get schedule data
    $game = club_get_game($game_id);
    // echo ($game_id);
     $vteam       = $game['visitingTeam'];
    $hteam       = $game['homeTeam'];
    $gdate       = $game['gameDate'];
    // $gdate       = $game['datepicker'];
    $gtime       = $game['gameTime'];
    $field       = $game['fieldname'];
   // $hscore      = $game['homeScore'];
   // /'$vscore      = $game['visitScore'];
    $season  = $game['season'];
  }


echo '

<div class="wrap">
  <a name="Top"></a>

  <div class="club-icon32 "></div>

  <h2>Clubhouse Manager Plugin  -  Schedules Settings</h2>
  <hr />
  <div class="clear"></div>
  <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
    <div class="postbox-container" id="club-plugin-main">
      <div class="has-sidebar-content">
        <div class="meta-box-sortables ui-sortable" id="normal-sortables" unselectable="on">
          <div class="postbox ui-droppable" id="club-schedules-edit">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __('Schedule Edit', 'club') . '</h3>
            <div class="inside">
              <b>Add an Event</b>
              <p>
               '. __('Select a season  and team to manage their schedule.', 'club').' 
              </p>
              <form name="club_schedules_edit_form" method="post" action="">';

  wp_nonce_field('club_schedules_edit');

echo '
              <table class="form-table">
              <tr><th class="club_option_left_part"><label for="club_schedules_edit_select_season">Select season:</label></th>
                  <td><select size="1" id="club_schedules_edit_select_season_id" name="club_schedules_edit_select_season">';

  for ( $i=0; $i < count($seasons_list); $i++ )
  {
    if ($seasons_list[$i] == $season)
    echo '<option value="' . $seasons_list[$i] . '" selected="yes">' . $seasons_list[$i] . '</option>';
    elseif ( ($seasons_list[$i] == $defs['defaultSeason']) && (is_null($season)) )
    echo '<option value="' . $seasons_list[$i] . '" selected="yes">' . $seasons_list[$i] . '</option>';
    else
    echo '<option value="' . $seasons_list[$i] . '">' . $seasons_list[$i] . '</option>';
  }

echo '
                    </select>
                  </td>
              </tr>
               <tr><th class="club_option_left_part"><label for="club_players_select_season_team">Select team: </label></th>
                  <td><select size="1" id="club_players_select_season_team_id" name="club_players_select_season_team">';

  for ( $i=0; $i < count($team_list); $i++ )
  {
    if ( $team_list[$i] == $team )
    echo '<option selected="selected" value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
    else
    echo '<option value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
  }

echo '
                    </select>
                    <br /><br />
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td><hr /></td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_schedules_edit_type_select">Category</label></th>
                  
              
                  <td><select class="mysspan" onchange="showlink(this.value)" size="1" id="club_schedules_edit_type_select_id" name="club_schedules_edit_type_select">
      
      <option id="selected" value="game" class="mySpan"  >Game</option> 

                  <option value="practice">Practice</option>
                  <option value="tournament">Tournament</option>
                 
      </select> 
      
      <span id="game_links" >
      <a href="'.site_url().'/wp-admin/admin.php?page=club-statsticsgame">  club-statsticsgame  </a>
      
       </span> 
        
     

      </td>
        </tr>
      



     <tr><th class="club_option_left_part"><label for="club_schedules_edit_gdate">Date</label></th>
                  <td><input type="text" id="datepicker" name="club_schedules_edit_gdate" value="' . $gdate . '" />&nbsp;</td>
                    
              </tr>
              <tr><th class="club_option_left_part"><label for="club_schedules_edit_gtime">Time</label></th>
                  <td><input type="text" name="club_schedules_edit_gtime" value="' . $gtime . '" />&nbsp;(In the form: "HH:MM:SS")</td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_schedules_edit_hteam_select">Home</label></th>
                  <td><select size="1" id="club_schedules_edit_hteam_select_id" name="club_schedules_edit_hteam_select">';

  for ( $i=0; $i < count($team_list); $i++ )
  {
    if ( $team_list[$i] == $hteam )
    echo '<option selected="selected" value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
    elseif ( ($team_list[$i] == $defs['defaultTeam']) && (is_null($hteam)) )
    echo '<option value="' . $team_list[$i] . '" selected="yes">' . $team_list[$i] . '</option>';
    else
    echo '<option value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
  }

echo '
                  </select>
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_schedules_edit_vteam_select">Visitors</label></th>
                  <td><select size="1" id="club_schedules_edit_vteam_select_id" name="club_schedules_edit_vteam_select">';

  for ( $i=0; $i < count($team_list); $i++ )
  {
    if ( $team_list[$i] == $vteam )
    echo '<option selected="selected" value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
    elseif ( ($team_list[$i] == $defs['defaultTeam']) && (is_null($vteam)) )
    echo '<option value="' . $team_list[$i] . '" selected="yes">' . $team_list[$i] . '</option>';
    else
    echo '<option value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
  }

echo '<option value=""></option>
                  </select>
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for="club_schedules_edit_field_select">Field</label></th>
                  <td><select size="1" id="club_schedules_edit_field_select_id" name="club_schedules_edit_field_select">';

  reset($fields_list);
  for ( $i=0; $i < count($fields_list); $i++ )
  {
    if ( $fields_list[$i]['fieldname'] == $field )
    echo '<option selected="selected" value="' . $fields_list[$i]['field_id'] . '">' . $fields_list[$i]['fieldname'] . '</option>';
    else
    echo '<option value="' . $fields_list[$i]['field_id'] . '">' . $fields_list[$i]['fieldname'] . '</option>';
  }

echo '
                    </select><br /><br />
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td>';

  if ( $edit_game === true )
  echo '                    <input type="hidden" value="' . $game_id . '" name="club_game_delete_id" />';
  else
  echo '                    <input type="hidden" value="none" name="club_game_delete_id" />';

echo '
                  </td>
              </tr>
              </table>
              <div class="submit-bottom-div">
                <div class="div-wait" id="divwaiteds0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                <input type="submit" class="button-secondary" value="Save Changes" id="club_save_game_btn_id" name="club_save_game_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />&nbsp;';

  if ( $edit_game === true )
  {
  echo '
                  <div class="div-wait" id="divwaiteds1"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                  <input type="submit" class="button-primary" value="Delete Game" id="club_delete_game_' . $game_id . '_btn_id" name="club_delete_game_' . $game_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />';
  }

echo '
              </div>
              </form>
              <form method="post" id="frm_Statastics" action="'.site_url().'/wp-admin/admin.php?page=club-statsticsgame">
              <input type="hidden" id="statastics_home_team" name="statastics_home_team">
              <input type="hidden" id="statastics_visiting_team" name="statastics_visiting_team">
              <input type="hidden" id="statastics_current_season" name="statastics_current_season">
              <input type="hidden" id="statastics_selected_field" name="statastics_selected_field">
              </form>
            </div>
          </div>
          <div class="postbox ui-droppable" id="club-upload-schedules">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __('Upload Schedules for season ' . $season, 'club') . '</h3>
            <div class="inside">
              <p>
               '. __('Choose a file to upload in the form: ', 'club').' 
               '. __('visitingTeam,homeTeam,gameDate,gameTime,field.', 'club').'
              </p>
              <table class="form-table">
              <tr><th class="club_option_left_part"><label for="">File</label></th>
                  <td>
                    <form enctype="multipart/form-data" method="POST" action="">
                      <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                      <input name="club_schedules_uploadedfile" type="file" /><br />
                        <input type="submit" name="club_schedules_file_upload_btn" value="Upload" />
                      </form>
                    </td>
                </tr>
                <tr><th class="club_option_left_part"><label for=""></label></th>
                    <td></td>
                </tr>
                </table>
                <div class="submit-bottom-div">
                  <div class="right-bottom"><a href="#Top">Back to Top</a></div>
                </div>
              </div>
            </div>
            <div class="postbox ui-droppable" id="club-schedules-list">
              <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
              <h3 class="hndle">' . __('Event List', 'club') . '</h3>
              <div class="inside">
               
                <form name="club_schedules_list_form" method="post" action="">';

    wp_nonce_field('club_schedules_list');

  echo '
                <table class="form-table">
 
                <tr><th class="club_option_left_part"><label for=""></label></th>
                  
                </tr>
               
                <tr><th class="club_option_left_part"><label for="club_list_games">Existing Games:</label></th>
                    <td><ul class="games-list">';

    for ( $i=0; $i < count($games); $i++ )
    {
      $game_id     = $games[$i]['gameID'];
      $vteam       = $games[$i]['visitingTeam'];
      $hteam       = $games[$i]['homeTeam'];
     $gdate       = $games[$i]['gameDate'];
      $gtime       = $games[$i]['gameTime'];
      $field       = $games[$i]['fieldname'];
      $hscore      = $games[$i]['homeScore'];
      $vscore      = $games[$i]['visitScore'];

    echo '
                           <li class="games-list-entry">
                                   <input type="submit" class="button-primary" value="Edit" id="club_edit_game_' . $game_id . '_btn_id" name="club_edit_game_' . $game_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />&nbsp;&nbsp;
                              <input type="submit" class="button-primary" value="Delete" id="club_delete_game_' . $game_id . '_btn_id" name="club_delete_game_' . $game_id . '_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />
                             <label for="club_game_' . $i . '" class="games-list-entry-label"><b>' . $hteam . '</b> VS <b>' . $vteam . '</b> on <b>' . $gdate . '</b> at ' . $gtime . ' @ ' . $field . '&nbsp;&nbsp;</label>
                             <div class="div-wait" id="divwaitsch1"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                           </li>';
    }

  echo '
                        </ul></td>
                </tr>
                <tr><th class="club_option_left_part"><label for=""></label></th>
                    <td></td>
                </tr>
                </table>
                <div class="submit-bottom-div">
                  <div class="right-bottom"><a href="#Top">Back to Top</a></div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     
       
      </div>    
    </div>
  </div>';

    return;
  }




  ////////////////////////////////////////////////////////////////////////////////
  // show tournament page
  ////////////////////////////////////////////////////////////////////////////////
  function club_plugin_print_Statsticsgame_page($edit_results  = false )
  {
   
    if(isset($edit_results['statastics_home_team']) && isset($edit_results['statastics_visiting_team']))
    {
   

        $homeTeam = $edit_results['statastics_home_team'];
        $visitingTeam = $edit_results['statastics_visiting_team'];
        $season = $edit_results['statastics_current_season'];
        $field = $edit_results['statastics_selected_field'];

        $game_stats = club_game_statasctics( $homeTeam,$visitingTeam,$season,$field);
       

    }
    global $wpdb;

    if(isset($_POST) && !empty($_POST))
    {
    	// print_r($_POST);
     //     exit;

    	extract($_POST);

    	$wpdb->insert( 'wp_clubhouseManager_saveboxscores', array( 'a1'  => $score1, 'a2' => $score2, 'a3' => $score3, 'a4' => $score4, 'a5' => $score5, 'a6' => $score6, 'a7' => $score7, 'a8' => $score8,  'a9' => $score9, 'Run' => $score10, 'Hits' => $score11, 'Err' => $score12, ) );
    	$wpdb->insert( 'wp_clubhouseManager_homeboxscores', array( 'a1'  => $hscore1, 'a2' => $hscore2, 'a3' => $hscore3, 'a4' => $hscore4, 'a5' => $hscore5, 'a6' => $hscore6, 'a7' => $hscore7, 'a8' => $hscore8,  'a9' => $hscore9, 'Run' => $hscore10, 'Hits' => $hscore11, 'Err' => $hscore12, 'hteam' => $hteam, ) );	
    }
    
    if(isset($_POST['num_of_inning']))
    {
      $num_of_inning = $_POST['num_of_inning'];
    }
    else
    {
      $num_of_inning = 9;
    }

    $options = get_option('club_plugin_options');

    $ret_flag = NULL;

          $season           = club_get_option('club_results_season');
         $fields_list      = club_get_locations();
          $seasons_list     = club_get_seasons();
          $team_list    = club_get_teams($season);
         $def              = club_get_defaults();
         $hometeam         = $def['defaultTeam'];
          $games_list       = club_get_past_games($season);

if(isset($_POST['submit']))
 {

    $score1=$_POST['score1'];
    $score2=$_POST['score2'];
    $score3=$_POST['score3'];
    $score4=$_POST['score4'];
    $score5=$_POST['score5'];
    $score6=$_POST['score6'];
    $score7=$_POST['score7'];
    $score8=$_POST['score8'];
    $score9=$_POST['score9'];
    $score10=$_POST['score10'];
    $score11=$_POST['score11'];
    $score12=$_POST['score12'];
    $hscore1=$_POST['hscore1'];
    $hteam=$_POST['hteam'];
//     // $wpdb->query("INSERT INTO wp_email_subscription (name, email, date) VALUES ('$name', '$email', '$date')"  );
// $query = mysql_query("INSERT INTO  . $wpdb->prefix . 'clubhouseManager_saveboxscores SET  (a1, a2, a3, a4, a5, a6, a7, a8, a9, Run, Hits, Err) VALUES ('$score1','$score2','$score3','$score4','$score5','$score6','$score7','$score8','$score9','$score10','$score11','$score12',)" );

// if($query)
//   { return true;  }
// else
//  { return false; }
}



  echo '
  <div class="wrap">
    <a name="Top"></a>
    <div class="club-icon32"></div>
    <h2>Clubhouse Manager Plugin  -  Statastics and Result</h2>
   <hr />
    
    <div class="clear"></div>
    <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
      <div class="postbox-container" id="club-plugin-main">
       

        <div class="postbox ui-droppable" id="club-games-list">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            
            <div class="inside">
       
  
    



      <form name="club_results_list_form" method="post" action="">';

  wp_nonce_field('club_results_list');

echo '
              <table class="form-table">
           
              <tr><th class="club_option_left_part"><label for=""></label></th>
               
              </tr>
               <tr>
               <td class="club_option_left_part"><label for="">Game name</label></td>
               <td class="club_option_left_part"><label for="">Game date</label></td>
                </tr>


               <tr>
             
                  <td>'.$game_stats[0]->homeTeam. ' Vs '.$game_stats[0]->visitingTeam.' </td>

              
                      <td>'.$game_stats[0]->gameDate. ' </td>
                   
                    </tr>

                   

              <tr><th class="club_option_left_part"><label for="">Number Of Inning</label></th>
                  <td><input type="text" name="num_of_inning"id ="num_of_inning" size="3">&nbsp;&nbsp;
                    <div class="div-wait" id="divwaitpl0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
             
                     <input type="submit" class="button-primary" value="Save" id="club_edit_game_btn_id" name="club_edit_game_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />
                  </td>
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td></td>
              </tr>
              </table>
              <input type="hidden" name="statastics_home_team" value="'.$edit_results['statastics_home_team'].'"/>
              <input type="hidden" name="statastics_visiting_team" value="'.$edit_results['statastics_visiting_team'].'"/>
              <input type="hidden" name="statastics_current_season" value="'.$edit_results['statastics_current_season'].'"/>
              <input type="hidden" name="statastics_selected_field" value="'.$edit_results['statastics_selected_field'].'"/>
               
            </form>


 <form name="club_results_list_form" method="post" action="">

              
              <table border="0" style="width:50%" cellspacing="10" rules="none">

<center><h2> Score By inning</h2></center>
             
              <tr>

       
   
              
              <th>  </th>
              <th> Team</th>';

              for($i=1;$i<=$num_of_inning;$i++)
              {

               echo '<th>'.$i.'</th>';
              }
            
            echo '<th>Runs</th>
              <th>Hits</th>
               <th>Err</th>
               </tr>
               <tr>
              <tr><strong><th class="club_option_left_part"><label for="club_schedules_edit_vteam_select">Visitors</label></th></strong>
                  <td>'.$edit_results['statastics_visiting_team'].'</td>';
             
               for($i=1;$i<=$num_of_inning;$i++)
              {

               echo '<td ><input type="text" size="3" name="score'.$i.'"></td>';
              }
         
       echo '<td><input type="text" size="3" name="score10"></td>
        <td><input type="text" size="3" name="score11"></td>
        <td><input type="text" size="3"name="score12" ></td>

            </tr>
         <tr><th class="club_option_left_part"><label for="club_schedules_edit_hteam_select">Home</label></th>
                  <td>'.$edit_results['statastics_home_team'].'</td>';
              for($i=1;$i<=$num_of_inning;$i++)
              {

               echo '<td ><input type="text" size="3" name="hscore'.$i.'"></td>';
              }
      echo  '<td><input type="text" size="3" name="hscore10"></td>
        <td><input type="text" size="3" name="hscore11"></td>
         <td><input type="text" size="3" name="hscore12"></td>


            </tr>
               </table>
            <input type="hidden" name="hteam" value="'.$_POST['statastics_home_team'].'"/>
            <input type="hidden" name="club_schedules_edit_vteam_select" value="'.$_POST['statastics_visiting_team'].'"/>
           <input type="submit" name="submit" class="button-primary" value="Save Game Box Score" id="club_save_results_btn" name="club_save_results_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />
<div class="submit-bottom-div">
       
              </div>
</form> 


        




              <html>
<body>


<hr>
<strong>Game Result Uploader</strong>

<p>
<a href="http://www.zaptechsolutions.com/">***Link for purchasing bulk uplodefr addon***</a>
</p>
<p>
<a href="http://www.zaptechsolutions.com/">***upload instructions/file uploader button show here if addon has been purchased***</a>
</p>
<hr>
<strong>coming soon</strong></br>
<strong>Advanced Statastics Addons with the purchase of this addon, you will be able to enter and display individul hitting,pitching and fielding statistic</strong>
</body>
</html>


            </div>
          </div>

          </div>
        </div>
      </div>
    </div>

  </div>
 
  </div>';

    return;
  }




  ////////////////////////////////////////////////////////////////////////////////
  // show game result page
  ////////////////////////////////////////////////////////////////////////////////
  function club_plugin_print_game_results_page( $edit_results = false )
  {

    global $wpdb;

    $options = get_option('club_plugin_options');

    $ret_flag = NULL;

    $season           = club_get_option('club_results_season');
    $fields_list      = club_get_locations();
    $seasons_list     = club_get_seasons();
    $team_list    = club_get_teams($season);
    $def              = club_get_defaults();
    $hometeam         = $def['defaultTeam'];
    $games_list       = club_get_past_games($season);

    if ( $edit_results === true )
    {
      
      $game_id     = club_get_option('club_game_edit_id');
      $gresults    = club_get_game_results($game_id);
            //   get schedule data
            $game        = club_get_game($game_id);
            $vteam       = $game['visitingTeam'];
            $hteam       = $game['homeTeam'];
            $gdate       = $game['gameDate'];
            $gtime       = $game['gameTime'];
            $field       = $game['field'];
            $notes       = $game['notes'];
            $hscore      = $game['homeScore'];
            $vscore      = $game['visitScore'];
           
      if ( $gresults )
      {
        
        $homeplayers = club_get_players_from_team( $hteam, $season);
        
        if (!$homeplayers)
        $ret_flag = -1;

              $visitplayers = club_get_players_from_team( $vteam, $season);
              if (!$visitplayers)
              $ret_flag = -1;
      }

      $presults    = club_get_game_results_all($game_id, $season);
     // echo "<pre>";print_r($presults);die;
      if (!$presults)
      {
              $homeplayers = club_get_players_from_team( $hteam, $season);
              if (!$homeplayers)
                $ret_flag = -1;
              $visitplayers = club_get_players_from_team( $vteam, $season);
              if (!$visitplayers)
                $ret_flag = -1;
      }
      
      if ($vteam == $hometeam)
      {
        $HomeAway = 'away';
      }
      else{
        $HomeAway = 'home';
      }
    }


 echo '
  <div class="wrap">
    <a name="Top"></a>
    <div class="club-icon32"></div>
    <h2>Clubhouse Manager Plugin  -  Game Results Page</h2>
    <hr />
    <div class="clear"></div>
    <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
      <div class="postbox-container" id="club-plugin-main">
        <div class="has-sidebar-content">
          <div class="meta-box-sortables ui-sortable" id="normal-sortables" unselectable="on">
            <div class="postbox ui-droppable" id="club-results-edit">
              <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
              <h3 class="hndle">' . __('Game Results Edit', 'club') . '</h3>
              <div class="inside">';
             
        



    if ( $edit_results === true )
  //   echo '              <b>Edit Results for game:</b>&nbsp;&nbsp; ' . $vteam . ' v. ' . $hteam . '</b>';
  //   else
  //   {
  //   echo '              <b>Edit Results</b>
  //                 <p>
  //                  '. __('Select a season  - edit the game results and save them.', 'club').'
  //                 </p>';
  //   }

   echo '
                 <form name="club_results_edit_form" method="post" action="">';
     wp_nonce_field('club_results_edit');

  // echo '
  //               <table class="form-table">
  //               <tr><th class="club_option_left_part"><label for="">Box Score</label></th>
  //                   <td>
  //                   </td>
  //               </tr>
  //               </table>';

    if ( $edit_results === true )
    {
      
      list($gameID,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$vhits,$vruns,$verr,$hhits,$hruns,$herr,$content,$postID,$gameStatus) = $gresults[0];
      echo '
                 <table width="75%" border="1" class="gresults-form-table">
          <tr>
          <td width="13%"></td>';
        for ($i=1; $i <= 9; $i++)
        echo '
                          <td width="5%" align="center">' . $i . '</td>';

      echo '
                        <td width="5%" align="center">R</td>
                <td width="5%" align="center">H</td>
                <td width="5%" align="center">E</td>
            </tr>
            <tr>
              <td width="13%">' . $vteam . '</td>';

      echo 
        "<td width=5%>
          <input type=text name=v1 class='v_inning' size=2 value=".$v1.">
              </td>
              <td width=5%>
            <input type=text name=v2 class='v_inning' size=2 value=".$v2.">
              </td>
              <td width=5%>
            <input type=text name=v3 class='v_inning' size=2 value=".$v3.">
               </td>
              <td width=5%>
            <input type=text name=v4 class='v_inning'size=2 value=".$v4.">
                </td>
              <td width=5%>
            <input type=text name=v5 class='v_inning' size=2 value=".$v5.">
                </td>
              <td width=5%>
            <input type=text name=v6 class='v_inning' size=2 value=".$v6.">
                </td>
              <td width=5%>
            <input type=text name=v7 class='v_inning'  size=2 value=".$v7.">
                </td>
              <td width=5%>
            <input type=text name=v8 class='v_inning' size=2 value=".$v8.">
                </td>
              <td width=5%>
            <input type=text name=v9 class='v_inning'size=2 value=".$v9.">
                </td>
              <td width=5%>
            <input type=text name=vruns size=2 id='vruns_total' value=".$vruns.">
                </td>
              <td width=5%>
            <input type=text name=vhits size=2 id='vhits_total' value=".$vhits.">
                </td>
              <td width=5%>
            <input type=text name=verr size=2 id='verr_total' value=".$verr.">
                </td>
            </tr>
            <tr>
              <td width=13%>$hteam</font></td>
              <td width=5%>
            <input type=text name=h1 class='h_inning' size=2 value=".$h1.">
                </td>
              <td width=5%>
            <input type=text name=h2 class='h_inning' size=2 value=".$h2.">
                </td>
              <td width=5%>
            <input type=text name=h3 class='h_inning' size=2 value=".$h3.">
                </td>
              <td width=5%>
            <input type=text name=h4 class='h_inning' size=2 value=".$h4.">
                </td>
              <td width=5%>
            <input type=text name=h5 class='h_inning' size=2 value=".$h5.">
                </td>
              <td width=5%>
            <input type=text name=h6 class='h_inning' size=2 value=".$h6.">
                </td>
              <td width=5%>
            <input type=text name=h7 class='h_inning' size=2 value=".$h7.">
                </td>
              <td width=5%>
            <input type=text name=h8 class='h_inning' size=2 value=".$h8.">
                </td>
              <td width=5%>
            <input type=text name=h9 class='h_inning' size=2 value=".$h9.">
                </td>
              <td width=5%>
            <input type=text name=hruns size=2 id='hruns_total' value=".$hruns.">
                </td>
              <td width=5%>
            <input type=text name=hhits size=2 id='hhits_total' value=".$hhits.">
                </td>
              <td width=5%>
            <input type=text name=herr size=2 id='herr_total' value=".$herr.">
                </td>
            </tr>
          </td>
              </table>
           <div class='game-results-table'>
           Game status  <select name='club_game_status' id='club_game_status'>";
$statusOptions = array("Complete", "Suspended", "Postponed", "Cancelled");
  for ( $i=0; $i < count($statusOptions); $i++ )
  {
    if ( $statusOptions[$i] == $gameStatus )
    echo '<option selected="selected" value="' . $statusOptions[$i] . '">' . $statusOptions[$i] . '</option>';
    else
    echo '<option value="' . $statusOptions[$i] . '">' . $statusOptions[$i] . '</option>';
  } 
    echo '
         </select><br />
         Attach post to game results? 
         <input type="checkbox" name="club_include_post" id="club_include_post" /> <br />
         <div id="club_select_post" style="display:none">
         Select post title: &nbsp;';
         club_display_post_selectbox();
      echo ' 
         </div>
         </div>
         <div>&nbsp;</div>
         <div class="game-results-table">
       <div class="tabs">
         <a class="tab" onclick=showTab("#Offense")>Offense</a>
         <a class="tab" onclick=showTab("#Pitching")>Pitching</a>
         <a class="tab" onclick=showTab("#Fielding")>Fielding</a>
         <hr>
       </div>
         <div>&nbsp;</div>
       
         <div id="Offense" class="tabContent" style="display:block">         
           <div class="game-results-table"><h3>'.$hteam.'</h3></div>
            <table id=home_team_offense_results class=gresults-form-table>
        <tr>
            <th width=150px>&nbsp;</th>
            <th align=center>Inactive</th>
            <th align=center>Ord</th>
            <th align=center>AB</th>
            <th align=center>R</th>
            <th align=center>1B</th>
            <th align=center>2B</th>
            <th align=center>3B</th>
            <th align=center>HR</th>
            <th align=center>RE</th>
            <th align=center>FC</th>
            <th align=center>HP</th>
            <th align=center>RBI</th>
            <th align=center>BB</th>
            <th align=center>K</th>
            <th align=center>LOB</th>
            <th align=center>SB</th>
                                    <th align=center>SF</th>
        </tr>';
      //Lookup players
      if ( $presults )
        $count_off_h = count($presults);
      else
        $count_off_h = count($homeplayers);

      for ($m=0; $m < $count_off_h; $m++)
      {
        if ( $presults )
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE,$baFC,$baHP,$baLOB,$fiPO,$fiA,$fiE,$baSF) = $presults[$m];
        else
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname) = $homeplayers[$m];
        if ( $teamname == $hteam )
        {

  echo '                    <tr>
            <td class="playername_offense">' . $lastname . ', ' . $firstname . ' ' . $middlename . '
                                      <input type=hidden id="playerID_for_'.$lastname.'_'.$firstname.'" value="'.$PLAYERID.'">
            </td>
            <td align=center>
              <input type="checkbox" name="' . $PLAYERID . '_chkbxDNP" value="DNP" >
            </td>
            <td align=center>
              <input type="text" name="' . $PLAYERID . '_battOrd" size="1" value="'.$battOrd.'">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baAB" size="1" value="' . $baAB . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baRuns" size="1" value="' . $baRuns . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_ba1b" class="classBA" size="1" value="' . $ba1b . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_ba2b" class="classBA" size="1" value="' . $ba2b . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_ba3b" class="classBA"" size="1" value="' . $ba3b . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baHR" class="classBA" size="1" value="' . $baHR . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baRE" size="1" value="' . $baRE . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baFC" size="1" value="' . $baFC . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baHP" size="1" value="' . $baHP . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baRBI" size="1" value="' . $baRBI . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baBB" size="1" value="' . $baBB . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baK" size="1" value="' . $baK . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baLOB" size="1" value="' . $baLOB . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baSB" size="1" value="' . $baSB . '">
            </td>
                                    <td>
                                      <input type="text" name="' . $PLAYERID . '_baSF" size="1" value="' . $baSF . '">
                                    </td>
          </tr>'."\n";
              }
      }
         echo ' </table>
           <div><br>&nbsp;<br></div>
                       <div class="game-results-table"><h3>'.$vteam.'</h3></div>
                              <table id=visit_team_offense_results class=gresults-form-table>
                                <tr>
                                    <th width=150px>&nbsp;</th>
                                    <th align=center>Inactive</th>
                                    <th align=center>Ord</th>
                                    <th align=center>AB</th>
                                    <th align=center>R</th>
                                    <th align=center>1B</th>
                                    <th align=center>2B</th>
                                    <th align=center>3B</th>
                                    <th align=center>HR</th>
                                    <th align=center>RE</th>
                                    <th align=center>FC</th>
                                    <th align=center>HP</th>
                                    <th align=center>RBI</th>
                                    <th align=center>BB</th>
                                    <th align=center>K</th>
                                    <th align=center>LOB</th>
                                    <th align=center>SB</th>
                                    <th align=center>SF</th>
                                </tr>';

           if ( $presults )
              $count_off_v = count($presults);
            else
              $count_off_v = count($visitplayers);

      for ($n=0; $n < $count_off_v; $n++)
      {
        if ( $presults )
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE,$baFC,$baHP,$baLOB,$fiPO,$fiA,$fiE,$baSF) = $presults[$n];
        else
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname) = $visitplayers[$n];
        if ( $teamname == $vteam )
        {

  echo '                    <tr>
            <td class="playername_offense">' . $lastname . ', ' . $firstname . ' ' . $middlename . '
                                      <input type=hidden id="playerID_for_'.$lastname.'_'.$firstname.'" value="'.$PLAYERID.'">
            </td>
            <td align=center>
              <input type="checkbox" name="' . $PLAYERID . '_chkbxDNP" value="DNP" >
            </td>
            <td align=center>
              <input type="text" name="' . $PLAYERID . '_battOrd" size="1" value="'.$battOrd.'">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baAB" size="1" value="' . $baAB . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baRuns" size="1" value="' . $baRuns . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_ba1b" class="classBA" size="1" value="' . $ba1b . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_ba2b" class="classBA" size="1" value="' . $ba2b . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_ba3b" class="classBA"" size="1" value="' . $ba3b . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baHR" class="classBA" size="1" value="' . $baHR . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baRE" size="1" value="' . $baRE . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baFC" size="1" value="' . $baFC . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baHP" size="1" value="' . $baHP . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baRBI" size="1" value="' . $baRBI . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baBB" size="1" value="' . $baBB . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baK" size="1" value="' . $baK . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baLOB" size="1" value="' . $baLOB . '">
            </td>
            <td>
              <input type="text" name="' . $PLAYERID . '_baSB" size="1" value="' . $baSB . '">
            </td>
                                    <td>
                                      <input type="text" name="' . $PLAYERID . '_baSF" size="1" value="' . $baSF . '">
                                    </td>
          </tr>'."\n";
              }

  }

   echo ' </table></div>
        <div id="Pitching" class="tabContent" style="display:none">
                       <div class="game-results-table"><h3>'.$hteam.'</h3></div>
             <table id=home_team_pitch_results class=gresults-form-table>
         <tr>
             <th width=150px>&nbsp;</th>
             <th align=center>Ord</th>
             <th align=center>W</th>
             <th align=center>L</th>
             <th align=center>S</th>
             <th align=center>IP</th>
             <th align=center>H</th>
             <th align=center>R</th>
             <th align=center>ER</th>
             <th align=center>BB</th>
             <th align=center>K</th>
        </tr>';
      //Lookup players
            if ( $presults )
              $count_pit_h = count($presults);
            else
              $count_pit_h = count($homeplayers);

            for ($m=0; $m < $count_pit_h; $m++)
            {
              if ( $presults )
                list($PLAYERID,$firstname,$middlename,$lastname,$teamname,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE,$baFC,$baHP,$baLOB,$fiPO,$fiA,$fiE) = $presults[$m];
              else
                list($PLAYERID,$firstname,$middlename,$lastname,$teamname) = $homeplayers[$m];

              if ( $teamname == $hteam )
              {

  echo '                    <tr>
             <td class="playername_pitching">' . $lastname . ', ' . $firstname . ' ' . $middlename . '
                                        <input type=hidden id="playerID_for_'.$lastname.'_'.$firstname.'" value="'.$PLAYERID.'">
                 </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_pitchOrd" size="1" value="' . $pitchOrd . '">
             </td>
             <td>  <b>
               <input type="checkbox" name="' . $PLAYERID . '_piWin" value="1" ';

         if($piWin){
         echo ' checked="checked" ';
         }

       echo '
        >
               </b> </td>
             <td>
               <input type="checkbox" name="' . $PLAYERID . '_piLose" value="1" ';

         if($piLose){
         echo ' checked="checked" ';
         }
       echo ' >
               </td>
             <td>
               <input type="checkbox" name="' . $PLAYERID . '_piSave" value="1" ';
         if($piSave){
         echo ' checked="checked" ';
         }
       echo ' >
               </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piIP" size="2" value="'.$piIP.'" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piHits" class="classPI" size="1" value="'.$piHits.'" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piRuns" size="1" value="' . $piRuns . '" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piER" size="1" value="' . $piER . '" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piWalks" size="1" value="' . $piWalks . '" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piSO" size="1" value="' . $piSO . '" >
             </td>
           </tr>
          </tr>';
              }
  }

   echo ' </table>
                       <div><br>&nbsp;<br></div>
                       <div class="game-results-table"><h3>'.$vteam.'</h3></div>
             <table id=visit_team_pitch_results class=gresults-form-table>
         <tr>
             <th width=150px>&nbsp;</th>
             <th align=center>Ord</th>
             <th align=center>W</th>
             <th align=center>L</th>
             <th align=center>S</th>
             <th align=center>IP</th>
             <th align=center>H</th>
             <th align=center>R</th>
             <th align=center>ER</th>
             <th align=center>BB</th>
             <th align=center>K</th>
        </tr>';
      //Lookup players
      if ( $presults )
        $count_pit_v = count($presults);
      else
        $count_pit_v = count($visitplayers);

      for ($m=0; $m < $count_pit_v; $m++)
      {
        if ( $presults )
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE,$baFC,$baHP,$baLOB,$fiPO,$fiA,$fiE) = $presults[$m];
        else
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname) = $visitplayers[$m];

              if ( $teamname == $vteam )
              {

  echo '                    <tr>
             <td class="playername_pitching">' . $lastname . ', ' . $firstname . ' ' . $middlename . '
                                        <input type=hidden id="playerID_for_'.$lastname.'_'.$firstname.'" value="'.$PLAYERID.'">
                 </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_pitchOrd" size="1" value="' . $pitchOrd . '">
             </td>
             <td>  <b>
               <input type="checkbox" name="' . $PLAYERID . '_piWin" value="1" ';

         if($piWin){
         echo ' checked="checked" ';
         }

       echo '
        >
               </b> </td>
             <td>
               <input type="checkbox" name="' . $PLAYERID . '_piLose" value="1" ';

         if($piLose){
         echo ' checked="checked" ';
         }
       echo ' >
               </td>
             <td>
               <input type="checkbox" name="' . $PLAYERID . '_piSave" value="1" ';
         if($piSave){
         echo ' checked="checked" ';
         }
       echo ' >
               </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piIP" size="2" value="'.$piIP.'" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piHits" class="classPI" size="1" value="'.$piHits.'" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piRuns" size="1" value="' . $piRuns . '" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piER" size="1" value="' . $piER . '" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piWalks" size="1" value="' . $piWalks . '" >
             </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_piSO" size="1" value="' . $piSO . '" >
             </td>
           </tr>
          </tr>';
              }
  }

        echo ' </table></div> 
        <div id="Fielding" class="tabContent" style="display:none">
                       <div class="game-results-table"><h3>'.$hteam.'</h3></div>
                                 <table id=visit_team_field_results class=gresults-form-table>
                                   <tr>
                                     <th width=150px>&nbsp;</th>
                                     <th align=center>PO</th>
                                     <th align=center>A</th>
                                     <th align=center>E</th>
                                </tr>';
            //Lookup players
            if ( $presults )
              $count_fld_h = count($presults);
            else
              $count_fld_h = count($homeplayers);

            for ($m=0; $m < $count_fld_h; $m++)
            {
              if ( $presults )
                list($PLAYERID,$firstname,$middlename,$lastname,$teamname,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE,$baFC,$baHP,$baLOB,$fiPO,$fiA,$fiE) = $presults[$m];
              else
                list($PLAYERID,$firstname,$middlename,$lastname,$teamname) = $homeplayers[$m];

              if ( $teamname == $hteam )
              {

        echo '                    <tr>
                                     <td class="playername_fielding">' . $lastname . ', ' . $firstname . ' ' . $middlename . '
                                        <input type=hidden id="playerID_for_'.$lastname.'_'.$firstname.'" value="'.$PLAYERID.'">
                                        </td>
                                     <td>
                                       <input type="text" name="' . $PLAYERID . '_fiPO" size="1" value="' . $fiPO . '">
                                       </td>
                                     <td>
                                       <input type="text" name="' . $PLAYERID . '_fiA" size="1" value="' . $fiA . '">
                                       </td>
                                     <td>
                                       <input type="text" name="' . $PLAYERID . '_fiE" size="1" value="' . $fiE . '">
                                       </td>
                                  </tr>';
       }
        }
         echo '</table>
                       <div><br>&nbsp;<br></div>
                       <div class="game-results-table"><h3>'.$vteam.'</h3></div>
         <table id=visit_team_field_results class=gresults-form-table>
           <tr>
             <th width=150px>&nbsp;</th>
             <th align=center>PO</th>
             <th align=center>A</th>
             <th align=center>E</th>
        </tr>';
      //Lookup players
      if ( $presults )
        $count_fld_v = count($presults);
      else
        $count_fld_v = count($visitplayers);

      for ($m=0; $m < $count_fld_v; $m++)
      {
        if ( $presults )
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname,$battOrd,$pitchOrd,$baAB,$ba1b,$ba2b,$ba3b,$baHR,$baRBI,$baBB,$baK,$baSB,$piWin,$piLose,$piSave,$piIP,$piHits,$piRuns,$piER,$piWalks,$piSO,$baRuns,$baRE,$baFC,$baHP,$baLOB,$fiPO,$fiA,$fiE) = $presults[$m];
        else
    list($PLAYERID,$firstname,$middlename,$lastname,$teamname) = $visitplayers[$m];

              if ( $teamname == $vteam )
              {

  echo '                    <tr>
             <td class="playername_fielding">' . $lastname . ', ' . $firstname . ' ' . $middlename . '
          <input type=hidden id="playerID_for_'.$lastname.'_'.$firstname.'" value="'.$PLAYERID.'">
          </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_fiPO" size="1" value="' . $fiPO . '">
               </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_fiA" size="1" value="' . $fiA . '">
               </td>
             <td>
               <input type="text" name="' . $PLAYERID . '_fiE" size="1" value="' . $fiE . '">
               </td>
          </tr>';
         }
  }
   echo '</table> </div>

        <table class="form-table">
        <tr><th class="club_option_left_part"><label for=""></label></th>
            <td>
          <div class="div-wait" id="divwaitedgr0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
          <input type="submit" class="button-secondary" value="Update" id="club_save_results_btn_id" name="club_save_results_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" />&nbsp;
            </td><br><br>
        </tr>
        </table>
        </form>
<div id=spinnerdisplay>
<div id=game-results-dump></div>
<div id=hiddendump style="display:none"> </div>
</div>';

/////////////////////////////////////////////////
//  Import Stats
/////////////////////////////////////////////////

echo '
        <hr>
        <div class="game-results-table"><h3>Import Game Stats From File</h3></div>
        <table class="form-table">';
////////////////////////////////////////////////

 // Import stats from gamechanger, depricated in release 1.2
 //        <tr>
 //          <th class="club_option_left_part"><label for="club_plugin_gamechanger_import">Retrieve GameChanger Results</label></th>
 //        <td><input type=hidden id="tbl_home_or_away" value= ' . $HomeAway . '></td>
 //                    <td width=150><input type="text" name="club_plugin_gamechanger_import" id="club_plugin_gamechanger_import"/><br>
 //      <i>GameChanger Game ID</i></td>
 //                    <td align=left valign=top class=gamechanger_import_status> <input type="button" class="button-secondary" value="Retrieve" id="club_retrieve_gamechanger_results_btn_id" name="club_retrieve_gamechanger_results_btn" />&nbsp;</td>
 //                </tr> 

echo '
                  <tr>
                    <th class="club_option_left_part"><label for="club_plugin_stats_upload">Upload All Stats</label></th>
        <form enctype="multipart/form-data" method="POST" action="">
        <td><input type="hidden" name="MAX_FILE_SIZE" value="100000"/></td>
        <td><input type="radio" name="club_home_or_away" value="'.$vteam.'" /><label>'.$vteam.'</label><br>
      <input type="radio" name="club_home_or_away" value="'.$hteam.'" /><label>'.$hteam.'</label>
        </td>
                    <td width=150><input type="file" name="club_plugin_stats_upload_file" id="club_plugin_stats_upload_file"/><br>
                        <i>CSV file in the following</i>
      <a href="#TB_inline?height=300&width=300&inlineId=club_stat_format_popup" class="thickbox"> format</a>
        </td>
                    <td align=left valign=top> <input type="submit" value="Upload" id="club_stats_upload_btn_id" name="club_stats_upload_btn" /></td>
        </form>
                  </tr>
                  <tr>
                    <th class="club_option_left_part"><label for="club_plugin_iScore_batting_upload">Upload Batting Stats</label></th>
        <form enctype="multipart/form-data" method="POST" action="">
                    <td><input type="hidden" name="MAX_FILE_SIZE" value="100000"/></td>
                    <td><input type="radio" name="'.$vteam.'" value="'.$vteam.'"><label>'.$vteam.'</label><br>
                        <input type="radio" name="'.$hteam.'" value="'.$hteam.'"><label>'.$hteam.'</label>
                    </td>
                    <td width=150><input type="file" name="club_plugin_iScore_batting_upload" id="club_plugin_iScore_batting_upload"/><br>
                        <i>iScore Batting Stats CSV File</i></td>
                    <td align=left valign=top> <input type="submit" value="Upload" id="club_iScore_batting_upload_btn_id" name="club_iScore_batting_upload_btn" /></td>
        </form>
                  </tr>
                  <tr>
                    <th class="club_option_left_part"><label for="club_plugin_iScore_pitching_upload">Upload Pitching Stats</label></th>
                    <form enctype="multipart/form-data" method="POST" action="">
        <td><input type="hidden" name="MAX_FILE_SIZE" value="100000"/></td>
                    <td><input type="radio" name="'.$vteam.'" value="'.$vteam.'"><label>'.$vteam.'</label><br>
                        <input type="radio" name="'.$hteam.'" value="'.$hteam.'"><label>'.$hteam.'</label>
                    </td>
        <td width=150><input type="file" name="club_plugin_iScore_pitching_upload" id="club_plugin_iScore_pitching_upload"/><br>
                        <i>iScore Pitching Stats CSV File</i></td>
                    <td align=left valign=top> <input type="submit" value="Upload" id="club_iScore_pitching_upload_btn_id" name="club_iScore_pitching_upload_btn" /></td>
        </form>
                </tr>
                </table>
    </div>';

/////////////////////////////////////////////////
//  File format popup thickbox
////////////////////////////////////////////////
echo '
<div id="club_stat_format_popup" style="display:none">
<h2>Stats Import CSV File Format</h2>
<div>
<b>Use the following as a template for your CSV header</b><hr>
jersey#,battOrd,baAB,ba1b,ba2b,ba3b,baHR,baRBI,baBB,
baK,baSB,baRuns,baRE,baFC,baHP,baLOB,baSF,pitchOrd,
piWin,piLose,piSave,piIP,piHits,piRuns,piER,piWalks,piSO,
fiPO,fiA,fiE
<br>&nbsp;<br>
<b>ba</b> = batting or offensive statistic<br>
<b>pi</b> = pitching statistic<br>
<b>fi</b> = fielding or defensive statistic<br>
</div>
<br>&nbsp;<br>
<strong>Just click outside the pop-up to close it.</strong>
</div>
';
    
  }
echo '
              <div class="submit-bottom-div">
              
              </div>
              </form>
            </div>
          </div>
          <div class="postbox ui-droppable" id="club-games-list">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __(' Games List', 'club') . '</h3>
            <div class="inside">
              <p>
               '. __('Select a game for edit.', 'club').'
              </p>
              <form name="club_results_list_form" id="club_results_list_form" method="post" action="">';

  wp_nonce_field('club_results_list');

echo '
              <table class="form-table">
              <tr><th class="club_option_left_part"><label for="club_results_list_select_season">Select season:</label></th>
                  <td><select size="1" id="club_results_list_select_season_id" name="club_results_list_select_season">';

  for ( $i=0; $i < count($seasons_list); $i++ )
  {
    if ( $seasons_list[$i] == $season )
    echo '<option selected="selected" value="' . $seasons_list[$i] . '">' . $seasons_list[$i] . '</option>';
    else
    echo '<option value="' . $seasons_list[$i] . '">' . $seasons_list[$i] . '</option>';
  }


echo '
                    </select><br><br>
                      <tr><th class="club_option_left_part"><label for="club_players_select_season_team">Select team: </label></th>
                  <td><select size="1" id="club_players_select_season_team_id" name="club_players_select_season_team">';

  for ( $i=0; $i < count($team_list); $i++ )
  {
    if ( $team_list[$i] == $team )
    echo '<option selected="selected" value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
    else
    echo '<option value="' . $team_list[$i] . '">' . $team_list[$i] . '</option>';
  }

echo '
                    </select><br /><br />
                

                    <div class="div-wait" id="divwaitrl0"><img src="' . CHMPURL . 'img/loading.gif" /></div>
                    <input type="submit" class="button-primary" value="Filter" id="club_results_list_set_season_btn_id" name="club_results_list_set_season_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />
                  </td>
  </tr>
                   
            
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td><hr /></td>
              </tr>
            
              <tr><th class="club_option_left_part"><label for="club_results_edit_game_select">Select a game to update</label></th>
                  <td>
                  <table>
                  <tr>
                  <th>Game</th><th>Date</th><th>Season</th><th>League</th><th>Team</th><th>Action</th>
                  </tr>';
          //  echo '      <select size="1" id="club_results_edit_game_select_id" name="club_results_edit_game_select">';

  reset($games_list);
  for ( $i=0; $i < count($games_list); $i++ )
  {
    $game_id = $games_list[$i]['gameID'];
    $hteam   = $games_list[$i]['homeTeam'];
    $vteam   = $games_list[$i]['visitingTeam'];
    $gdate   = date("F j Y", strtotime($games_list[$i]['gameDate']));
    $gtime   = $games_list[$i]['gameTime'];
   
  //echo '<option value="' . $game_id . '">'  . $hteam . ' v. ' . $vteam . '  (' . $gdate . ' <b>'. $vteam .'</b>' . $gtime . ')</option>';
  echo '<tr><td>'  . $hteam . ' v. ' . $vteam . '</td><td>'.$gdate.'</td><td>'.$season.'</td><td>League</td><td>'.$vteam.'</td><td><input type="button" class="button-primary" value="add/edit statistics" id="club_edit_game_btn_id_'.$game_id.'" name="club_edit_game_btn" onclick="submitResult('.$game_id.')" /></td></tr>';
  }

 
echo '
                    </select>
                   
                    <input type="hidden" name="club_results_edit_game_select" id="club_results_edit_game_select_id"/>
                    
                    <input type="hidden" id="club_add_edit_game_btn" name="club_edit_game_btn"/>
                    <div class="div-wait" id="divwaitgl1"><img src="' . CHMPURL . 'img/loading.gif" /></div>';
                 //   echo '<input type="submit" class="button-primary" value="add/edit statistics" id="club_edit_game_btn_id" name="club_edit_game_btn" onclick="document.getElementById(nameofDivWait).style.display=\'inline\';this.form.submit();" /><br />';
                 echo ' </td>
              </tr>
              <tr><th class="club_option_left_part"><label for=""></label></th>
                  <td></td>
              </tr>
              </table>
              <div class="submit-bottom-div">
                <div class="right-bottom"><a href="#Top">Back to Top</a></div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>';

  return $ret_flag;
}



// ////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////
// show uninstall page
////////////////////////////////////////////////////////////////////////////////
function club_plugin_print_uninstall_page()
{
  global $wpdb;

  $options = get_option('club_plugin_options');

echo '
<div class="wrap">
  <a name="Top"></a>
  <div class="club-icon32"></div>
  <h2>Clubhouse Manager Plugin  -  Uninstall</h2>
  <hr />
  <div class="clear"></div> 
  <div class="metabox-holder has-right-sidebar" id="plugin-panel-widgets">
    <div class="postbox-container" id="club-plugin-main">
      <div class="has-sidebar-content">
        <div class="meta-box-sortables ui-sortable" id="normal-sortables" unselectable="on">
          <div class="postbox ui-droppable" id="club-fields-edit">
            <div title="' . __('Zum umschalten klicken', 'club') . '" class="handlediv"><br /></div>
            <h3 class="hndle">' . __('Uninstall Warning', 'club') . '</h3>
            <div class="inside">
              <b> Data Will be Lost</b>
              <p>
               '. __('Uninstalling Clubhouse Manager will delete all data that has been entered including schedules, players, locations and game results.  If you would like to delete the plugin but not your data, please uninstall Clubhouse Manager from the plugins page', 'club') . '
              </p>
        <form method=post name=club_uninstall_form>
              <input type="submit" class="button-primary" value="Uninstall clubhouseManager" id="club_uninstall_plugin_btn" name="club_uninstall_plugin_btn" onclick="return confirm("You Are About To Uninstall WP-DBManager From WordPress.\nThis Action Is Not Reversible.\n\n Choose [Cancel] To Stop, [OK] To Uninstall.")">&nbsp;&nbsp;
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>';

  return;
}


  $latestVersion="1.2.2";


  function getbnukeVersion(){
    global $prefix,$dbi;
    $sqlString="SELECT version FROM ".$prefix."_clubhouseManager_settings WHERE ID=1 LIMIT 1";
                $resultVersion=sql_query($sqlString,$dbi);
                list($version)=sql_fetch_row($resultVersion,$dbi);
    return $version;
  }
?>
