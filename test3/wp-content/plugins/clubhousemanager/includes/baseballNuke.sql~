--
-- Table structure for table `nuke_clubhouseManager_boxscores`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_boxscores`;
CREATE TABLE `nuke_clubhouseManager_boxscores` (
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
  `notes` longtext,
  PRIMARY KEY  (`gameID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `nuke_clubhouseManager_locations`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_locations`;
CREATE TABLE `nuke_clubhouseManager_locations` (
  `fieldname` mediumtext NOT NULL,
  `directions` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `nuke_clubhouseManager_players`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_players`;
CREATE TABLE `nuke_clubhouseManager_players` (
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
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

--
-- Table structure for table `nuke_clubhouseManager_schedule`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_schedule`;
CREATE TABLE `nuke_clubhouseManager_schedule` (
  `gameID` int(11) NOT NULL auto_increment,
  `visitingTeam` varchar(255) default NULL,
  `homeTeam` varchar(255) default NULL,
  `gameDate` date default NULL,
  `field` mediumtext,
  `umpire` varchar(255) default NULL,
  `homeScore` int(11) default NULL,
  `visitScore` int(11) default NULL,
  `gameTime` time default NULL,
  `notes` varchar(255) default NULL,
  `type` text,
  `season` varchar(20) default NULL,
  PRIMARY KEY  (`gameID`)
) ENGINE=MyISAM AUTO_INCREMENT=748 DEFAULT CHARSET=latin1;

--
-- Table structure for table `nuke_clubhouseManager_settings`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_settings`;
CREATE TABLE `nuke_clubhouseManager_settings` (
  `defaultTeam` varchar(255) default NULL,
  `defaultSeason` varchar(4) default NULL,
  `displayMenu` char(1) default '1',
  `ID` tinyint(4) NOT NULL auto_increment,
  `version` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `nuke_clubhouseManager_stats`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_stats`;
CREATE TABLE `nuke_clubhouseManager_stats` (
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
  `baHP` int(11) NOT NULL default '0',
  `baLOB` int(11) NOT NULL default '0',
  `fiPO` int(11) NOT NULL default '0',
  `fiA` int(11) NOT NULL default '0',
  `fiE` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `nuke_clubhouseManager_teams`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_teams`;
CREATE TABLE `nuke_clubhouseManager_teams` (
  `teamname` varchar(255) NOT NULL default '',
  `wins` int(11) default NULL,
  `losses` int(11) default NULL,
  `winPer` float default NULL,
  `season` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`teamname`,`season`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Table structure for table `nuke_clubhouseManager_league`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_league`;
CREATE TABLE `" . $wpdb->prefix . "clubhouseManager_league` (
`league_id` int(11) NOT NULL auto_increment,
`leaguename` varchar(50) NOT NULL default,
 PRIMARY KEY  (`league_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Final view structure for view `nuke_clubhouseManager_batTotals`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_batTotals`;
DROP VIEW IF EXISTS `nuke_clubhouseManager_batTotals`;
CREATE VIEW `nuke_clubhouseManager_batTotals` AS select `nuke_clubhouseManager_players`.`playerID` AS `playerID`,`nuke_clubhouseManager_players`.`lastname` AS `lastname`,`nuke_clubhouseManager_players`.`firstname` AS `firstname`,`nuke_clubhouseManager_players`.`middlename` AS `middlename`,`nuke_clubhouseManager_players`.`jerseyNum` AS `jerseyNum`,sum(`nuke_clubhouseManager_stats`.`baRuns`) AS `baTotRuns`,sum(`nuke_clubhouseManager_stats`.`baAB`) AS `baTotAB`,sum((((`nuke_clubhouseManager_stats`.`ba1b` + `nuke_clubhouseManager_stats`.`ba2b`) + `nuke_clubhouseManager_stats`.`ba3b`) + `nuke_clubhouseManager_stats`.`baHR`)) AS `baTotH`,sum(`nuke_clubhouseManager_stats`.`ba1b`) AS `baTot1b`,sum(`nuke_clubhouseManager_stats`.`ba2b`) AS `baTot2b`,sum(`nuke_clubhouseManager_stats`.`ba3b`) AS `baTot3b`,sum(`nuke_clubhouseManager_stats`.`baHR`) AS `baTotHR`,sum(`nuke_clubhouseManager_stats`.`baRE`) AS `baTotRE`,sum(`nuke_clubhouseManager_stats`.`baFC`) AS `baTotFC`,sum(`nuke_clubhouseManager_stats`.`baHP`) AS `baTotHP`,sum(`nuke_clubhouseManager_stats`.`baRBI`) AS `baTotRBI`,sum(`nuke_clubhouseManager_stats`.`baBB`) AS `baTotBB`,sum(`nuke_clubhouseManager_stats`.`baK`) AS `baTotK`,sum(`nuke_clubhouseManager_stats`.`baLOB`) AS `baTotLOB`,sum(`nuke_clubhouseManager_stats`.`baSB`) AS `baTotSB` from ((`nuke_clubhouseManager_players` join `nuke_clubhouseManager_stats`) join `nuke_clubhouseManager_schedule`) where ((`nuke_clubhouseManager_players`.`playerID` = `nuke_clubhouseManager_stats`.`playerID`) and (year(`nuke_clubhouseManager_schedule`.`gameDate`) = year(now())) and (`nuke_clubhouseManager_stats`.`gameID` = `nuke_clubhouseManager_schedule`.`gameID`) and (`nuke_clubhouseManager_players`.`season` = year(now()))) group by `nuke_clubhouseManager_players`.`playerID`;

--
-- Final view structure for view `nuke_clubhouseManager_pitchTotals`
--

DROP TABLE IF EXISTS `nuke_clubhouseManager_pitchTotals`;
DROP VIEW IF EXISTS `nuke_clubhouseManager_pitchTotals`;
CREATE VIEW `nuke_clubhouseManager_pitchTotals` AS select `nuke_clubhouseManager_players`.`playerID` AS `playerID`,`nuke_clubhouseManager_players`.`lastname` AS `lastname`,`nuke_clubhouseManager_players`.`firstname` AS `firstname`,`nuke_clubhouseManager_players`.`middlename` AS `middlename`,`nuke_clubhouseManager_players`.`jerseyNum` AS `jerseyNum`,sum(`nuke_clubhouseManager_stats`.`piWin`) AS `piTotWin`,sum(`nuke_clubhouseManager_stats`.`piLose`) AS `piTotLose`,sum(`nuke_clubhouseManager_stats`.`piSave`) AS `piTotSave`,sum(`nuke_clubhouseManager_stats`.`piIP`) AS `piTotIP`,sum(`nuke_clubhouseManager_stats`.`piHits`) AS `piTotHits`,sum(`nuke_clubhouseManager_stats`.`piRuns`) AS `piTotRuns`,sum(`nuke_clubhouseManager_stats`.`piER`) AS `piTotER`,sum(`nuke_clubhouseManager_stats`.`piWalks`) AS `piTotWalks`,sum(`nuke_clubhouseManager_stats`.`piSO`) AS `piTotSO`,year(now()) AS `year` from ((`nuke_clubhouseManager_stats` join `nuke_clubhouseManager_players`) join `nuke_clubhouseManager_schedule`) where ((`nuke_clubhouseManager_schedule`.`gameID` = `nuke_clubhouseManager_stats`.`gameID`) and (`nuke_clubhouseManager_stats`.`playerID` = `nuke_clubhouseManager_players`.`playerID`) and (year(`nuke_clubhouseManager_schedule`.`gameDate`) = year(now())) and (`nuke_clubhouseManager_players`.`season` = year(now())) and (`nuke_clubhouseManager_stats`.`piIP` > 0)) group by `nuke_clubhouseManager_players`.`playerID`;

-- 
