<?php

global $wpdb;

require_once(ABSPATH . 'wp-includes/pluggable.php');
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');


function  club_db_delta()
{
  global $wpdb;
  global $club_db_version;
  if ($wpdb->supports_collation())
  {
    if ( ! empty($wpdb->charset) )
      $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
    if ( ! empty($wpdb->collate) )
      $charset_collate .= " COLLATE $wpdb->collate";
  }

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_boxscores` (
           `gameID` int(11) NOT NULL default '0',
           `v1` int(11) default NULL,
           `v2` int(11) default NULL,
           `v3` int(11) default NULL,
           `v4` int(11) default NULL,
           `v5` int(11) default NULL,
           `v6` int(11) default NULL,
           `v7` int(11) default NULL,
           `v8` int(11) default NULL,
           `v9` int(11) default NULL,
           `h1` int(11) default NULL,
           `h2` int(11) default NULL,
           `h3` int(11) default NULL,
           `h4` int(11) default NULL,
           `h5` int(11) default NULL,
           `h6` int(11) default NULL,
           `h7` int(11) default NULL,
           `h8` int(11) default NULL,
           `h9` int(11) default NULL,
           `vhits` int(11) default NULL,
           `vruns` int(11) default NULL,
           `verr` int(11) default NULL,
           `hhits` int(11) default NULL,
           `hruns` int(11) default NULL,
           `herr` int(11) default NULL,
     `postID` int(11) default NULL,
     `status` varchar(20) default NULL,
           `winner` varchar(20) default NULL,
           `loser` varchar(20) default NULL,
           PRIMARY KEY  (`gameID`)
           ) ENGINE=MyISAM " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_locations` (
            `field_id` int(11) NOT NULL auto_increment,
            `fieldname` mediumtext NOT NULL,
            `directions` longtext,
            PRIMARY KEY  (`field_id`)
            ) ENGINE=MyISAM " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_players` (
           `playerID` int(11) NOT NULL auto_increment,
           `teamName` varchar(255) default NULL,
           `firstname` varchar(255) default NULL,
           `middlename` varchar(255) default NULL,
           `lastname` varchar(255) default NULL,
           `positions` mediumtext,
           `bats` tinytext,
           `throws` tinytext,
           `height` int(11) default NULL,
           `weight` int(11) default NULL,
           `address` varchar(255) default NULL,
           `city` varchar(255) default NULL,
           `state` tinytext,
           `zip` int(11) default NULL,
           `homePhone` varchar(255) default NULL,
           `workPhone` varchar(255) default NULL,
           `cellphone` varchar(255) default NULL,
           `jerseyNum` int(10) unsigned default NULL,
           `picLocation` varchar(255) default NULL,
           `season` varchar(20) NOT NULL default '',
           `profile` text,
           `bdate` date default NULL,
     `school` varchar(255) default NULL,
           `email` varchar(255) default NULL,
           PRIMARY KEY  (`playerID`,`season`)
           ) ENGINE=MyISAM AUTO_INCREMENT=141 " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_schedule` (
            `gameID` int(11) NOT NULL auto_increment,
            `visitingTeam` varchar(255) default NULL,
            `homeTeam` varchar(255) default NULL,
            `gameDate` date default NULL,
            `field_id` int(11),
            `umpire` varchar(255) default NULL,
            `homeScore` int(11) default NULL,
            `visitScore` int(11) default NULL,
            `gameTime` time default NULL,
            `notes` varchar(255) default NULL,
            `type` text,
            `season` varchar(20) default NULL,
            PRIMARY KEY  (`gameID`)
            ) ENGINE=MyISAM AUTO_INCREMENT=748 " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_settings` (
            `defaultTeam` varchar(255) default NULL,
            `defaultSeason` varchar(20) default NULL,
             `defaultLeague` varchar(255) default NULL,
            `defaultCheck` varchar(20) default NULL,
             `defaultCredit` varchar(255) default NULL,
            `displayMenu` char(1) default '1',
            `ID` tinyint(4) NOT NULL auto_increment,
            `version` varchar(20) NOT NULL default '',
            PRIMARY KEY  (`ID`)
            ) ENGINE=MyISAM AUTO_INCREMENT=2 " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_stats` (
            `gameID` int(11) NOT NULL default '0',
            `playerID` int(11) NOT NULL default '0',
            `battOrd` int(11) default NULL,
            `pitchOrd` int(11) default NULL,
            `baAB` int(11) default NULL,
            `ba1b` int(11) default NULL,
            `ba2b` int(11) default NULL,
            `ba3b` int(11) default NULL,
            `baHR` int(11) default NULL,
            `baRBI` int(11) default NULL,
            `baBB` int(11) default NULL,
            `baK` int(11) default NULL,
            `baSB` int(11) default NULL,
            `piWin` int(11) default NULL,
            `piLose` int(11) default NULL,
            `piSave` int(11) default NULL,
            `piIP` float(3,2) default NULL,
            `piHits` int(11) default NULL,
            `piRuns` int(11) default NULL,
            `piER` int(11) default NULL,
            `piWalks` int(11) default NULL,
            `piSO` int(11) default NULL,
            `baRuns` int(11) default NULL,
            `baRE` int(11) default '0',
            `baFC` int(11) default '0',
      `baSF` int(11) default '0',
            `baHP` int(11) NOT NULL default '0',
            `baLOB` int(11) NOT NULL default '0',
            `fiPO` int(11) NOT NULL default '0',
            `fiA` int(11) NOT NULL default '0',
            `fiE` int(11) NOT NULL default '0'
            ) ENGINE=MyISAM " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_teams` (
            `teamname` varchar(255) NOT NULL default '',
            `wins` int(11) default NULL,
            `losses` int(11) default NULL,
            `winPer` float default NULL,
            `season` varchar(20) NOT NULL default '',
            PRIMARY KEY  (`teamname`,`season`)
            ) ENGINE=MyISAM " . $charset_collate . ";";
  dbDelta($query);

  $query = "CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_league` (
            `league_id` int(11) NOT NULL auto_increment,
            `leaguename` varchar(50) NOT NULL default '',
            PRIMARY KEY  (`league_id`)
            ) ENGINE=MyISAM " . $charset_collate . ";";
  dbDelta($query);

  $wpdb->query = ("DROP VIEW {$wpdb->prefix}clubhouseManager_statTotals;");

  $query = "CREATE VIEW `" . $wpdb->prefix . "clubhouseManager_statTotals` AS 
  select `" . $wpdb->prefix . "clubhouseManager_players`.`playerID` AS `playerID`,
  `" . $wpdb->prefix . "clubhouseManager_players`.`season` AS `season`,
  `" . $wpdb->prefix . "clubhouseManager_players`.`lastname` AS `lastname`,
  `" . $wpdb->prefix . "clubhouseManager_players`.`firstname` AS `firstname`,
  `" . $wpdb->prefix . "clubhouseManager_players`.`middlename` AS `middlename`,
  `" . $wpdb->prefix . "clubhouseManager_players`.`teamName` AS `teamName`,
  `" . $wpdb->prefix . "clubhouseManager_players`.`jerseyNum` AS `jerseyNum`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baRuns`) AS `baTotRuns`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baAB`) AS `baTotAB`,
  sum((((`" . $wpdb->prefix . "clubhouseManager_stats`.`ba1b` + `" . $wpdb->prefix . "clubhouseManager_stats`.`ba2b`) + `" . $wpdb->prefix . "clubhouseManager_stats`.`ba3b`) + `" . $wpdb->prefix . "clubhouseManager_stats`.`baHR`)) AS `baTotH`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`ba1b`) AS `baTot1b`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`ba2b`) AS `baTot2b`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`ba3b`) AS `baTot3b`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baHR`) AS `baTotHR`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baRE`) AS `baTotRE`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baFC`) AS `baTotFC`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baSF`) AS `baTotSF`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baHP`) AS `baTotHP`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baRBI`) AS `baTotRBI`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baBB`) AS `baTotBB`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baK`) AS `baTotK`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baLOB`) AS `baTotLOB`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`baSB`) AS `baTotSB` ,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piWin`) AS `piTotWin`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piLose`) AS `piTotLose`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piSave`) AS `piTotSave`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piIP`) AS `piTotIP`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piHits`) AS `piTotHits`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piRuns`) AS `piTotRuns`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piER`) AS `piTotER`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piWalks`) AS `piTotWalks`,
  sum(`" . $wpdb->prefix . "clubhouseManager_stats`.`piSO`) AS `piTotSO` 
  from ((`" . $wpdb->prefix . "clubhouseManager_players`  
  join `" . $wpdb->prefix . "clubhouseManager_stats`)  
  join `" . $wpdb->prefix . "clubhouseManager_schedule`)  
  where ((`" . $wpdb->prefix . "clubhouseManager_players`.`playerID` = `" . $wpdb->prefix . "clubhouseManager_stats`.`playerID`) 
  and (`" . $wpdb->prefix . "clubhouseManager_stats`.`gameID` = `" . $wpdb->prefix . "clubhouseManager_schedule`.`gameID`) 
  and (`" . $wpdb->prefix . "clubhouseManager_players`.`season` = `" . $wpdb->prefix . "clubhouseManager_schedule`.`season`)) 
  group by `" . $wpdb->prefix . "clubhouseManager_players`.`playerID`,`" . $wpdb->prefix . "clubhouseManager_players`.`season` 
  order by playerID;";

  mysql_query($query);

  update_option( "club_db_version", $club_db_version );

  $wpdb->flush();

  return;
}

function club_update_tables()
{
  global $wpdb;
//  Set version
    $query = $wpdb->query("UPDATE {$wpdb->prefix}clubhouseManager_settings SET version='1.2.2' WHERE version is NOT NULL;");
    mysql_query($query);

// Add status column
    $query = $wpdb->query = ("ALTER TABLE {$wpdb->prefix}clubhouseManager_boxscores ADD `status` varchar(20) default NULL;");
    mysql_query($query);

//  Update type field in the schedule table RELEASE 1.2
    $query = $wpdb->query("UPDATE {$wpdb->prefix}clubhouseManager_schedule SET type='game' WHERE visitingTeam!='tournament' AND visitingTeam!='practice' AND type IS NULL;");
    mysql_query($query);

    $query = $wpdb->query("UPDATE {$wpdb->prefix}clubhouseManager_schedule SET type='practice' WHERE visitingTeam='practice' AND type IS NULL;");
    mysql_query($query);

    $query = $wpdb->query("UPDATE {$wpdb->prefix}clubhouseManager_schedule SET type='tournament' WHERE visitingTeam='tournament' AND type IS NULL;");
    mysql_query($query);

// Remove pitchTotals and batTotals VIEW's.  No longer needed from v1.2 +
    $query = $wpdb->query = ("DROP VIEW {$wpdb->prefix}clubhouseManager_batTotals;");
    mysql_query($query);

    $query = $wpdb->query = ("DROP VIEW {$wpdb->prefix}clubhouseManager_pitchTotals;");
    mysql_query($query);

    return;
}

function  club_drop_tables()
{
  global $wpdb; 

  $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}clubhouseManager_pitchTotals,
                         {$wpdb->prefix}clubhouseManager_batTotals,
                         {$wpdb->prefix}clubhouseManager_statTotals,
                         {$wpdb->prefix}clubhouseManager_teams,
                        {$wpdb->prefix}clubhouseManager_updatesetting,
                         {$wpdb->prefix}clubhouseManager_league,
                         {$wpdb->prefix}clubhouseManager_stats,
                         {$wpdb->prefix}clubhouseManager_players,
                         {$wpdb->prefix}clubhouseManager_locations,
                         {$wpdb->prefix}clubhouseManager_boxscores,
                         {$wpdb->prefix}clubhouseManager_settings,
                         {$wpdb->prefix}clubhouseManager_schedule" );
  $wpdb->query( "DROP VIEW IF EXISTS {$wpdb->prefix}clubhouseManager_statTotals,{$wpdb->prefix}clubhouseManager_pitchTotals,{$wpdb->prefix}clubhouseManager_batTotals" );

  return;
}


function  club_check_tables()
{
  global $wpdb;

  //  check if tables are empty
  $query  = "SELECT Count(*) FROM " . $wpdb->prefix . "clubhousemanager_teams";
  $result = mysql_query($result);
  if ( $result )
    $count = mysql_num_rows($result);

  if ( ($count == 0) OR (!$result) )
  {
    //  tables are empty
//    $query = mysql_real_escape_string("INSERT INTO `" . $wpdb->prefix . "clubhouseManager_players` (`playerID`, `teamName`, `firstname`, `middlename`, `lastname`, `positions`, `bats`, `throws`, `height`, `weight`, `address`, `city`, `state`, `zip`, `homePhone`, `workPhone`, `cellphone`, `jerseyNum`, `picLocation`, `season`, `profile`, `bdate`, `email`) VALUES
    $query = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_players` (`playerID`, `teamName`, `firstname`, `middlename`, `lastname`, `positions`, `bats`, `throws`, `height`, `weight`, `address`, `city`, `state`, `zip`, `homePhone`, `workPhone`, `cellphone`, `jerseyNum`, `picLocation`, `season`, `profile`, `bdate`, `school`, `email`) VALUES
      (51, 'Flying Dogs', 'Steve', '', 'Canale', 'INF, P', 'L', 'R', 0, 0, '', '', '', 0, '', '', '', 22, 'images/profiles/Canale.jpg', '2008', 'Played high school ball for Frederick High School from ''94-''96. As a senior, led his team to the state semifinals where he threw a 1 hitter, striking out 15 in a loss that sent them home. It was the farthest a team from Frederick HS had advanced since 1976, and earned him a spot as starting pitcher for the Crown All Star game (which he declined to pursue opportunity at Penn State). Played for a couple years at Penn State, first at Altoona, and then walking on at State College, where he didn''t do much at all. Stopped playing for several years, before coming back to the Frederick Flying Dogs.<br /> <br />His days are numbered, he has hurt his arm, began boozing pretty heavily, developed serious problems with gambling, cocaine, and hookers, before waking up in a pool of his own blood, and urine, and becoming a born again Christian, where he will begin a pilgrimage to the holy land later this year. In his own words &quot;can''t stop, won''t stop, bad boy, come on...&quot; ', '0000-00-00', 'State College', ''),
      (4, 'Flying Dogs', 'Nick', '', 'Collingham', 'P', 'R', 'R', 0, 190, '429 Megan Ct', 'Frederick', 'MD', 21701, '301-620-1239', '410-558-58031', '240-409-6337', 19, 'images/profiles/collingham.jpg', '2008', 'Has been a member of the Frederick Flying Dogs since their inaugural season in 1999, becoming manager in 2000. Prior to becoming a Flying Dog, Nick played High School Baseball at Galena High School in Reno, NV.', '0000-00-00', 'Capitol College', ''),
      (42, 'Flying Dogs', 'Heath', '', 'Gibson', 'OF', 'L', 'R', 0, 0, '', '', '', 0, '', '', '', 3, 'images/profiles/Gibson.jpg', '2008', 'Heath compiled several honors in baseball growing up in Arkansas, including: All Conference 4yrs, All Regional team 2yrs Soph/Senior, All Regional MVP (Senior), All State 2yrs (Soph/Senior), and AAU All American in high school. In college he was selected to the All Conference Team 3 times (Fresh/Soph/Senior). At Carl Albert Junior College Heath set records for: doubles (season and career), runs scored (season and career), and triples (season and career). Over his 4 year college baseball career at Carl Albert JC and Southern Arkansas Univ. Heath recorded a .371 batting average and also holds the unofficial JR College National Record for being hit by a pitch (21 &ndash; season, 38 career).', '0000-00-00', 'Southern Arkansas Univ', '');";
    mysql_query($query);

    //$query = mysql_real_escape_string("INSERT INTO `" . $wpdb->prefix . "clubhouseManager_settings` (`defaultTeam`, `defaultSeason`, `defaultLeague`, `defaultCheck`, `defaultCredit`,`displayMenu`, `ID`, `version`) VALUES
    $query = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_settings` (`defaultTeam`, `defaultSeason`, `defaultLeague`, `defaultCheck`, `defaultCredit`, `displayMenu`, `ID`, `version`) VALUES ('Flying Dogs', '2008', '', 'Baseball', '1', '', 1,'1.2.2');";
    
    //mysql_query($query);
    mysql_query($query);


//    $query = mysql_real_escape_string("INSERT INTO `" . $wpdb->prefix . "clubhouseManager_teams` (`teamname`, `wins`, `losses`, `winPer`, `season`) VALUES
    $query = "INSERT INTO `" . $wpdb->prefix . "clubhouseManager_teams` (`teamname`, `wins`, `losses`, `winPer`, `season`) VALUES
      ('Flying Dogs', NULL, NULL, NULL, '2008'),
      ('Team 2', NULL, NULL, NULL, '2008');";
    mysql_query($query);
    }



  return;
}


?>
