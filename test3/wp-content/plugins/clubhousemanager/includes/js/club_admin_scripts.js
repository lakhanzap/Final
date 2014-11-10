var jQuery = jQuery.noConflict();

jQuery(document).ready( function() {
          jQuery('#club_plugin_option_header_bg_color').jPicker({window:{expandable: true}});
          jQuery('#club_plugin_option_header_txt_color').jPicker({window:{expandable: true}});
          jQuery('#club_plugin_option_bg_color').jPicker({window:{expandable: true}});
          jQuery('#club_plugin_option_hover_color').jPicker({window:{expandable: true}});
          jQuery('#club_plugin_option_txt_color').jPicker({window:{expandable: true}});
          jQuery('#CSVTable').CSVToTable('/wp-content/plugins/clubhousemanager/upload_tmp');
          jQuery('#club_schedules_edit_type_select_id').change(function(){
	    var typeVal = jQuery('#club_schedules_edit_type_select_id').val(); 
	    if ((typeVal != 'game')){
	      jQuery('#club_schedules_edit_vteam_select_id').val("");
	    }
           });
	  // Setup the ajax indicator
	  
	  jQuery('#spinnerdisplay').append('<div id="ajaxBusy"><p><img src="images/loading.gif"></p></div>');
	
  	  jQuery('#ajaxBusy').css({
	    display:"none",
	    margin:"0px",
	    paddingLeft:"0px",
	    paddingRight:"0px",
	    paddingTop:"0px",
	    paddingBottom:"0px",
	    right:"3px",
	    top:"3px",
	     width:"auto"
 	  });
   
    	jQuery('#ajaxBusy').ajaxStart(function(){ 
       	  jQuery(this).show(); 
    	}).ajaxStop(function(){ 
      	  jQuery(this).hide();
    	});	

////////////////////////////////////////////////////////////
// Auto Calculate Hits/Runs/Errors for Entering Game Results
///////////////////////////////////////////////////////////	
  jQuery(".v_inning").blur(function() {
	var Total = 0;
	jQuery(".v_inning").each(function() {
		if (!isNaN(this.value) && this.value.length != 0) {
			Total += parseFloat(this.value);
		}		
		jQuery("#vruns_total").val(Total);
	});
  });
	
  jQuery(".h_inning").blur(function() {
	var Total = 0;
	jQuery(".h_inning").each(function() {
		if (!isNaN(this.value) && this.value.length != 0) {
			Total += parseFloat(this.value);
		}
		jQuery("#hruns_total").val(Total);
	});
  });

  jQuery(".classBA").blur(function() {
	var Total = 0;
	jQuery(".classBA").each(function() {
		if (!isNaN(this.value) && this.value.length != 0) {
			Total += parseFloat(this.value);
		}
		jQuery("#vhits_total").val(Total);
	});
  });

  jQuery(".classPI").blur(function() {
	var Total = 0;
	jQuery(".classPI").each(function() {
		if (!isNaN(this.value) && this.value.length != 0) {
			Total += parseFloat(this.value);
		}
		jQuery("#hhits_total").val(Total);
	});
  });
	 
//////////////////////////////////////////////////
//   Show posts dropdown menu on select
///////////////////////////////////////////////// 
  jQuery("#club_include_post").click(function() {
	jQuery("#club_select_post").toggle(this.checked);
  });


//////////////////////////////////////////////////////////////////
//  Retrieve stats for game from gamechanger.io
//  depricated as of release 1.2, gamechanger now requires a login
///////////////////////////////////////////////////////////////////
  jQuery("#club_retrieve_gamechanger_results_btn_id").bind('click', function() {
	
	var typeArray = new Array('pitching','fielding','offense');
//        var pitchLink = 'https://www.gamechanger.io/game-'+gameID+'/stats/batting/standard';

	for ( var typeA in typeArray) {
	        var gameID = jQuery("#club_plugin_gamechanger_import").val();
		var pitchLink = 'https://www.gamechanger.io/game-'+gameID+'/stats/batting/standard';
		var home_or_away = jQuery("#tbl_home_or_away").val();
		var tableToGet = "tbl_"+ home_or_away +"_batting";
		var classSection = "offense";

		var tA = typeArray[typeA];
		
		jQuery("#game-results-dump").html('');
		
		if (tA == 'pitching') {
			pitchLink = 'https://www.gamechanger.io/game-'+gameID+'/stats/pitching/standard';
			tableToGet = "tbl_"+ home_or_away +"_pitching";
			classSection = "pitching";
		}
		else if ( tA == 'fielding' ) {
			pitchLink = 'https://www.gamechanger.io/game-'+gameID+'/stats/fielding/';
			tableToGet = "tbl_"+ home_or_away + "_fielding";
			classSection = "fielding";
		}
		else {
			_getTopValues(pitchLink,'tbl_linescore','gresults-form-table');
		}
		_callYQL(pitchLink, tableToGet, classSection);
	}
  });

//////////////////////////////////////////////
// UPDATE TEAMS LIST BASED ON SELECTED SEASON
/////////////////////////////////////////////
  jQuery('#club_player_edit_season_id').change(function() {
        var seasonSel = jQuery('#club_player_edit_season_id').val(); //get selected season
	var path = jQuery('#path').val();  
	jQuery('#club_player_edit_team_id').empty(); //empty teams array
        jQuery.get(path, { season: seasonSel, load: 'pass' }, function(json) {
		var teams = jQuery.parseJSON(json); //make an array of returned elements
                jQuery.each(teams, function(key, value) { //sort through each value and build the options list
			    jQuery('#club_player_edit_team_id')
                                .append(jQuery("<option></option>")
                                .attr("value", value)
                                .text(value));
                });
        });
  });

  jQuery('#club_select_season_id').change(function() {
        var seasonSel = jQuery('#club_select_season_id').val(); //get selected season
         
        var path = jQuery('#path').val();

        jQuery('#club_select_season_team_id').empty(); //empty teams array
        jQuery.get(path, { season: seasonSel, load: 'pass' }, function(json) {
        	console.log("asd");
                var teams = jQuery.parseJSON(json); //make an array of returned elements

                jQuery.each(teams, function(key, value) { //sort through each value and build the options list
                            jQuery('#club_select_season_team_id')
                                .append(jQuery("<option></option>")
                                .attr("value", value)
                                .text(value));
                });
        });
  });
  /*jQuery('#club_players_select_season_id').change(function() {

        var seasonSel = jQuery('#club_players_select_season_id').val(); //get selected season
        var path = jQuery('#path').val();

                
        //jQuery('#club_players_select_season_team_id').empty(); //empty teams array
        jQuery.get(path, { season: seasonSel, load: 'pass' }, function(json) {
        	console.log(json);
                var teams = jQuery.parseJSON(json);
                 //make an array of returned elements
                jQuery.each(teams, function(key, value) { //sort through each value and build the options list
                            jQuery('#club_players_select_season_team_id')
                                .append(jQuery("<option></option>")
                                .attr("value", value)
                                .text(value));
                });
        });

  });*/

  /* Player add form validation */
   jQuery("#club_players_edit_form").validate({
    
        // Specify the validation rules
        rules: {
            club_player_edit_fname: "required",
            club_player_edit_lname: "required"
            
        },
        
        // Specify the validation error messages
        messages: {
            club_player_edit_fname: "Please enter your first name",
            club_player_edit_lname: "Please enter your last name"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });


   /* Select box change */
   jQuery("#club_players_assign_select_id").change(function() {
	 	var fullname = jQuery('#club_players_assign_select_id option:selected').text();
	 	var name = fullname.split(",");
	 	var firstname = name[0];
	 	var lastname = name[1];
	 	jQuery('#club_player_edit_fname').val(firstname);
	 	jQuery('#club_player_edit_lname').val(lastname);
	});

   /*  Add Location Field */
   jQuery("#club_field_edit_fieldname").keyup(function() {
	  var location = jQuery('#club_field_edit_fieldname').val();
	  var src = "https://maps.google.com/maps?q='"+location;
	  jQuery('#fieldiframe').attr('src',src);
	  //jQuery('#fieldiframe')[0].contentWindow.location.reload(true);
	  //club_plugin_print_fields_page(location)
	});

	jQuery( "#datepicker" ).datepicker({ 
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		 changeYear: true,
		 yearRange: "-60:+0"
		 });

	jQuery('#game_links a').click(function(){
		
		var hteam = jQuery('#club_schedules_edit_hteam_select_id').val();
		var vteam = jQuery('#club_schedules_edit_vteam_select_id').val();
		var currentSeason = jQuery('#club_schedules_edit_select_season_id').val();
		var field = jQuery('#club_schedules_edit_field_select_id').val();

		jQuery('#statastics_home_team').val(hteam);
		jQuery('#statastics_visiting_team').val(vteam);
		jQuery('#statastics_current_season').val(currentSeason);
		jQuery('#statastics_selected_field').val(field);
		jQuery('#frm_Statastics').submit();
		return false;
	});

	jQuery("#club-players-season-team-form #club_players_select_season_team_id").change(function(){
		var currentSeason = jQuery("#club-players-season-team-form #club_players_select_season_id").val();
		var currentTeam  = jQuery("#club-players-season-team-form #club_players_select_season_team_id").val();
		//console.log(currentTeam+'>>>'+currentSeason);
		var plugin_url = jQuery('#plugin_url').val();
		formData = "action=filterRoster&season="+currentSeason+"&team="+currentTeam;


		jQuery.ajax({
		    url : plugin_url+'ajax/ajaxfile.php',
		    type: "POST",
		    data : formData,
		    success: function(data)
		    {	

		    	jQuery('.remove-player').html('');
		    	jQuery('.remove-player').html(data);
		        //data - response from server
		    },
		    error: function (data)
		    {
		 		
		    }
		});
	})

	
}); //doc ready end

function _callYQL(pitchLink, tableToGet, classSection) {

	var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select tbody FROM html where url ="'+ pitchLink +'" and xpath="//table[@id=' + "'" + tableToGet + "'" + ']"') + '&format=xml&callback=?';
	jQuery.getJSON( yql, cbFunc );
	function cbFunc(data) {
		if ( data.results[0] ) {
			data = data.results[0].replace(/<script[^>]*>[\s\S]*?<\/script>/gi, '');
			//jQuery("#game-results-dump").html(data);
			jQuery('#hiddendump').html(data);
			//get data and fill form
			_parseYQLandFillForm(data, classSection);
		}
		else {
			jQuery("#game-results-dump").append("Error loading " + classSection + "<BR>");

		}
	  };
}


function _getTopValues(plink, tbl, btbl) {
	var yqlTop = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * FROM html where url ="'+ plink +'" and xpath="//table[@id=' + "'" + tbl + "'" + ']"') + '&format=xml&callback=?';
	jQuery.getJSON( yqlTop, cbFuncTop );
	function cbFuncTop(data) {
		if ( data.results[0] ) {
			data = data.results[0].replace(/<script[^>]*>[\s\S]*?<\/script>/gi, '');
			//get data and fill form
			jQuery('#hiddendump').html(data);
			//_parseYQLandFillTop(data, btbl);	
			_parseYQLandFillTop();
		}
		else {
			jQuery("#game-results-dump").html("Error");
			//throw new Error('Nothing returned from getJSON.');
		}

         }
}

function _parseYQLandFillTop() {
	for (var count = 1; count < 10; count++) {
		jQuery('input[name="v'+count+'"]').val( jQuery('#linescore_away_inning_'+count).html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
		jQuery('input[name="h'+count+'"]').val( jQuery('#linescore_home_inning_'+count).html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
		
		if (count == 9) {
			
			jQuery('input[name="vruns"]').val( jQuery('#away-score').html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
			jQuery('input[name="vhits"]').val( jQuery('#away-hits').html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
			jQuery('input[name="verr"]').val( jQuery('#away-errors').html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );

			jQuery('input[name="hruns"]').val( jQuery('#home-score').html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
			jQuery('input[name="hhits"]').val( jQuery('#home-hits').html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
			jQuery('input[name="herr"]').val( jQuery('#home-errors').html().replace('<p>','').replace('</p>','').replace('&nbsp;','0') );
			
		}
	}
	
	jQuery('#hiddendump').html('');	

}

//////////////////////////////////////////////
//  Show/Hide data on click for TABS
//////////////////////////////////////////////
function showTab( toShow ) {
	jQuery(".tabContent").hide();
	jQuery(toShow).show();
	
}

function _parseYQLandFillForm(data, classSection) {
	var ord = 0;
	var playerArray = data.split("<tr");
	for (var a in playerArray) {
		var gamerIDname = jQuery(playerArray[a]).find('a').text();
		if (gamerIDname == 'undefined' || gamerIDname == '') { 
			continue;
		}
		gamerIDname = gamerIDname.toLowerCase();
		var gamerIDname_mod = gamerIDname.split(" ");
		var giFirst = gamerIDname_mod[0];
		var giLast = gamerIDname_mod[1];
		jQuery('.playername_'+classSection).find('input[type=hidden]').each( function() {
			var bbName = this.id;
			var pID = jQuery(this).val();
			bbName = bbName.replace(/playerID_for_/, '');
			bbName = bbName.toLowerCase();
			var bbName_mod = bbName.split("_");
			if (!jQuery(bbName_mod[1])) {
				return true;
			}
			var bbLast = bbName_mod[0];
			var bbFirst = bbName_mod[1];
			var bbarr = bbFirst.split('');
			var bF = bbarr[0];
			if (bbLast == giLast && bF == giFirst) { 
				ord++;
				var playerID = pID;
				var statList = _getFillData(playerArray[a], playerID, classSection, ord);
			}                                        
		});
	}
	jQuery('#hiddendump').html('');	
}

function _getFillData(playerTR, playerID, classSection, ord) {
	if ( classSection == 'fielding' ) {		
        	var fieldingList = new Array(playerID+'_fiPO',playerID+'_fiE',playerID+'_fiA');

		var count = 0;
		jQuery(playerTR).find('p').each( function() {
			var gcP = jQuery(this).html();
			jQuery('input[name="'+fieldingList[count]+'"]').val(gcP);
			count++;
		});
	}
	else {
		playerTR = playerTR.replace(/<p>/ig, "=");
		playerTR = playerTR.replace(/<\/p>/ig, ";");
		playerTR = playerTR.replace(/<td class/ig, "");
		playerTR = playerTR.replace(/<.*?>/ig, "");
		txtarray = playerTR.split(";");
		txtarray[0] = txtarray[0].replace(/.*num ?(.*)\">=/i, "num $1=");

		for (var i in txtarray) {
			txtarray[i]=txtarray[i].replace(/>/,"");
			txtarray[i]=txtarray[i].replace(/="(.*)"/, "$1");
		}

		_populateFields(txtarray, classSection, playerID, ord);
	}
}

function _populateFields(statList, classSection, playerID, ord) {
	var pitchingList = new Array('num IP='+playerID+'_piIP','num H:pitching='+playerID+'_piHits','num R:pitching='+playerID+'_piRA','num ER='+playerID+'_piRuns','num BB:pitching='+playerID+'_piWalks','num SO:pitching='+playerID+'_piSO','num W='+playerID+'_piWin','num L='+playerID+'_piLose','num SV='+playerID+'_piSave','num BS='+playerID+'_piBS','num HBP:pitching='+playerID+'_piHBP','num GP:pitching='+playerID+'_piGP','num SVO='+playerID+'_piSVO');

	var offenseList = new Array('num AB='+playerID+'_baAB', 'num R='+playerID+'_baRuns', 'num RBI='+playerID+'_baRBI', 'num BB='+playerID+'_baBB', 'num SO='+playerID+'_baK', 'num 2B='+playerID+'_ba2b', 'num 3B='+playerID+'_ba3b', 'num HR='+playerID+'_baHR', 'num ROE='+playerID+'_baRE', 'num FC='+playerID+'_baFC', 'num HBP='+playerID+'_baHP', 'num 1B='+playerID+'_ba1b');

	var list = offenseList;
	if (classSection == 'pitching') {
		list = pitchingList;
		jQuery('input[name="'+playerID+'_pitchOrd"]').val(ord);
	}
	else {
		jQuery('input[name="'+playerID+'_battOrd"]').val(ord);
	}

	for (var x in statList) {
		var gdata = statList[x].split("=");
		for (var i in list) {
			var fields = list[i].split("=");
			if (gdata[0] == fields[0]) {
				jQuery('input[name="'+fields[1]+'"]').val(gdata[1]);
			}
		}
	}
}


function fieldEditSubmit(field)
{

	document.getElementById("club_form_edit").value = field;
	document.club_fields_list_form.submit();

}
function showlink(optval) {
   
    if(optval=="game"){ 
      jQuery('#game_links').attr('style','display:block;');
    }else{ 
      jQuery('#game_links').attr('style','display:none;');
    }
}
 function submitResult(gameID)
{
	jQuery('#club_results_edit_game_select_id').val(gameID);
	jQuery('#club_add_edit_game_btn').val('add/edit statistics');
	jQuery('#club_results_list_form').submit();

}