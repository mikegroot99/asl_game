
<!doctype html>
<html  >
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Speler</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link REL="stylesheet" href="styles/default.css" type="text/css">
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<link REL="stylesheet" href="styles/bootstrap.min.css" type="text/css">
		
		<link REL="stylesheet" href="styles/bootstrap-theme.min.css" type="text/css">
		
		<link REL="stylesheet" href="styles/bs.css" type="text/css">
		
		<link REL="stylesheet" href="styles/custom.css" type="text/css">
		
		<link REL="stylesheet" href="include/jquery-ui.min.css" type="text/css">
		
		<link REL="stylesheet" href="include/jquery.mCustomScrollbar.css" type="text/css">
		
		<link REL="stylesheet" href="include/jquery-ui.theme.min.css" type="text/css">
		
	</head>

	<body class="body-sidebar OfficeOffice page-list_bootstrap2 function-list" >
	<script type="text/javascript" src="include/loadfirst.js"></script><script type="text/javascript" src="include/Dutch.js"></script><div id="search_suggest" class="search_suggest"></div>
<style>
.scenario_badge { background-color: teal; }.speler_groep_badge { background-color: mediumseagreen; }
</style>
<div class="bs-fixedheader" id="fixedheader1">
	<IMG ALIGN=left SRC="https://extern.spinam.nl/wp-content/uploads/2015/09/cropped-logo.png" ALT="Spinam"></IMG><IMG ALIGN=right SRC="https://www.horizoncollege.nl/uploads/tx_templavoila/HoriCol_01.jpg" ALT="Horizon College"></IMG>
	<nav  data-pageid="1" data-container="menu" class="navbar navbar-default ">					




<div  data-pageid="1" data-container="hdr" class=" navbar-header   "> 


<a href="menu.php"  data-pageid="1" data-brick="logo" class="navbar-brand" >ASL Inzicht</a>




<button  data-pageid="1" data-brick="bsnavbarcollapse" type="button" class="navbar-toggle collapsed" data-runner-toggle="collapse" data-target=".bs-navcontrolled">	
	<span class="sr-only">Toggle navigation</span>	
	<span class="icon-bar"></span>					
</button>												





</div>







<div  data-pageid="1" data-container="menu_1" class="bs-navform navbar-collapse bs-hidden-xs bs-navcontrolled" aria-expanded="false" >												   

<ul class="nav navbar-nav">

			<li  class="  active">
			<a  id="itemlink14" itemtitle="Speler" href="speler_list.php"> Speler</a>

			</li>
			
			<li  class="  ">
			<a  id="itemlink15" itemtitle="Speler Groep" href="speler_groep_list.php"> Speler Groep</a>

			</li>
			
			<li  class="  ">
			<a  id="itemlink16" itemtitle="Scenario" href="scenario_list.php"> Scenario</a>

			</li>
			
	
	
	
	
	
</ul>










<div  data-pageid="1" data-container="more" class=" navbar-right navbar-form   "> 


<div  data-pageid="1" data-brick="morebutton" class="btn-group bs-navsection">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="glyphicon glyphicon-cog"></span>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
				
		<li class="massButton1 disabled"><a href="#" 
					href='speler_edit.php' 
					name="edit_selected1" 
					id="edit_selected1"  >Wijzig het geselecteerde</a></li>
		

				
		
				
		<li class="massButton1 disabled"><a href="#" id="delete_selected1" name="delete_selected1"  >Verwijder geselecteerde</a></li>
		
		
				<li role="separator" class="divider"></li>	

				
		<li><a href="speler_search.php" id="advButton1">Uitgebreid zoeken</a></li>
		

				
		<li><a href=# id="showOptPanel1">Toon zoekpaneel</a></li>
			
		
				
				<li role="separator" class="divider"></li>	
		
				
				

				

				
	</ul>  
</div>





<span  data-pageid="1" data-brick="loggedas" id="login_block1" class="bs-navsection">
	
	 
		<span class="dropdown">
			<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="glyphicon glyphicon-user"></span>	Mike</button>
			<ul class="dropdown-menu">
		
				<li><a href="#" id="logoutButton1">Uitloggen</a></li>
		
		
		


	
				<li><a href="#" href="changepwd.php" onclick="window.location.href='changepwd.php';return false;">Wijzig wachtwoord</a></li>
	
			</ul>
		</span>
	
</span>




</div>










<div  data-pageid="1" data-container="more_1" class=" navbar-right navbar-form   "> 


<span  data-pageid="1" data-brick="search" class="form-group">

 <div  class="input-group">

	<input type="search" class="form-control" name="ctlSearchFor1" id="ctlSearchFor1" autocomplete=off  placeholder="Zoek" size="25">

	<span class="input-group-btn">
	
		<button class="btn btn-default" style="display: none;" id="showAll1" style="display: none;" title="Toon alles">
			<span class="glyphicon glyphicon-remove"></span>
		</button>
	
	
	<button id="searchButtTop1" title="Zoek" class="btn btn-primary" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
	
	</span>
</div>
		
</span>




</div>





												</div>						


									</nav>
</div>	
<div class="container-fluid" class="bs-underheader" id="underheader1">
	<div class="row" >
		<div class="sidebar bs-fixed"  id="sidebar1"  data-hidden>
			


<div data-hidden data-pageid="1" data-container="left" class="    "> 


<div data-hidden data-pageid="1" data-brick="searchpanel" class="searchOptions panel panel-primary searchPanelContainer "  >
	<!-- Search panel content -->
	
	<div class="panel-heading">
		<div class="btn-group" id="addSearchFieldButton1">
			<button id="showHideControlChooseMenu1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Zoek in
			<span class="caret"></span>
			</button>
		</div>

		
		<div class="btn-group searchpanel-options" id="searchPanelOptions1">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="glyphicon glyphicon glyphicon-option-vertical"></span>
			</button>
			<ul class="dropdown-menu dropdown-left">
				<li id="showHideSearchType1" style="display: none;"><a>Opties tonen</a></li>
				<li role="separator" class="divider"></li>
				<li class="srchCritTop" style="display: none;"><a><input type="radio" name="srchType1" id="radioAll" id="all_checkbox" value="and"  checked><label for="radioAll"><span class="glyphicon">&nbsp;</span>Alle condities</label></a></li>
				<li class="srchCritTop" style="display: none;"><a><input type="radio" name="srchType1" id="radioAny" id="any_checkbox" value="or" ><label for="radioAny"><span class="glyphicon">&nbsp;</span>Elke conditie</label></a></li>
				<li role="separator" class="divider"></li>
				<li><a class="close-button"><span class="glyphicon glyphicon-remove">&nbsp;</span>Verbergen</a></li>
			</ul>
		</div>
	
		
		</div>
	<div class="panel-body controlsBlock" style="display: none;" >


		
		


	</div>
	
	<div class="panel-footer bottomSearchButt" style="display: none;">
		<button class="btn btn-primary" id="searchButton1" id="searchButtTop1" title="Zoek">Zoek</button>
		<button class="btn btn-default" style="display: none;" id="showAll1" style="display: none;">Toon alles</button>
	</div>
</div>







</div>



		</div>
		<div data-offsetblock="true" class="bs-sidebar-main">
			<div class="bs-sidebar-screenbound">
				


<div  data-pageid="1" data-container="breadcrumbs" class="    "> 





<div  data-pageid="1" data-container="bc" class="    "> 


<ol class="breadcrumb">
<li ><a href="menu.php"><span class="glyphicon glyphicon-home"></span></a></li>

  <li class="dropdown">

	<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ASL Game<span class="caret"></span></a>

	
	<ul class="dropdown-menu"><li><a href="ASL_dashboard.php">ASL Werkblad</a></li><li><a href="Organization_Cycle_Management_list.php">ASL in het kort</a></li><li><a href="Proces_groepen_list.php">Basisinformatie</a></li><li><a href="asl_inzicht_audit_Report_report.php">Rapportages</a></li></ul>
  </li>

  <li class="dropdown">

	<a href="speler_list.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Speler<span class="caret"></span></a>

	
	<ul class="dropdown-menu"><li><a href="speler_groep_list.php">Speler Groep</a></li><li><a href="scenario_list.php">Scenario</a></li></ul>
  </li>

</ol>




</div>







</div>





			</div>
			<div></div>
			<div class="bs-sidebar-screenbound bs-minwidth">
				


<div data-hidden data-pageid="1" data-container="messagerow" class="row rnr-rowcontainer bs-screenwidth">











</div>




<div  data-pageid="1" data-container="gridcontrols" class="row rnr-rowcontainer bs-navcontrolled bs-hidden-xs bs-screenwidth">





<div  data-pageid="1" data-container="add_delete" class=" bottom-margin  col-md-6 "> 


	
		
		<button  data-pageid="1" data-brick="add" type="button" class="btn btn-primary" name="inlineAdd_1" href='speler_add.php' id="inlineAdd1">Toevoegen in lijst</button>
	





<span  data-pageid="1" data-brick="recordcontrol">
		
	<button type="button" class="btn btn-default" id="delete_selected1" name="delete_selected1"   disabled>Verwijderen</button>
	
			
		<button type="button" class="btn btn-primary" name="saveall_edited1" id="saveall_edited1"  style="display:none;" >Alles opslaan</button>
	
	
		<button type="button" class="btn btn-default" name="revertall_edited1" id="revertall_edited1"  style="display:none;" >Alles annuleren</button>
	
</span>





</div>










<div  data-pageid="1" data-container="gridinfo" class=" bottom-margin text-right col-md-6 "> 


<span  data-pageid="1" data-brick="details_found" class="form-inline form-inline-always">
	Displaying <span class="bs-number">1</span> - <span class="bs-number">1</span> of <span class="bs-number">1</span>
	<span>
	
			<select class="form-control" id="recordspp1"><option value="10" >10</option><option value="20" selected>20</option><option value="30" >30</option><option value="50" >50</option><option value="100" >100</option><option value="500" >500</option><option value="-1" >Alles</option></select>
	
	</span>
</span>








</div>








</div>




<div  data-pageid="1" data-container="center" class="    "> 





<div  data-pageid="1" data-container="grid" class="bs-grid    "> 

<style class="rnr-cells-css" type="text/css"> .badge.badge.scenario_badge { background-color: #DC143C }

 </style>
	<style>
	.bs-gridcell[data-field=speler_id]:before {
		content: "Speler Id";
	}
	.bs-gridcell[data-field=speler_punten]:before {
		content: "Speler Punten";
	}
	.bs-gridcell[data-field=spelleider]:before {
		content: "Spelleider";
	}
	.bs-gridcell[data-field=Naam_Speler]:before {
		content: "Naam Speler";
	}
	.bs-gridcell[data-field=username]:before {
		content: "Username";
	}
</style>
<table  data-pageid="1" data-brick="grid" class="table table-bordered table-striped bs-flexgrid rnr-b-grid rnr-gridtable" cellpadding="0" >
	<thead>
										
								<tr class="rnr-toprow " >
									
									
									<th iEditCont="all">&nbsp;</th>
										

																		
									<th class="">
										<input type="checkbox" id="chooseAll_1" class="chooseAll1">
									</th>
									

																		
									<th >&nbsp;</th>
									
									
									
									<th class="rnr-gridfieldlabel rnr-field-text" data-field=username>
									
																				<span  data-order="ausername" id="order_username_1" name="order_username_1" data-href="speler_list.php?orderby=ausername" class="rnr-orderlink">
											Username
										</span>
									
									</th>
									
									
									
									
									
									
									<th class="rnr-gridfieldlabel rnr-field-text" data-field=Naam_Speler>
									
																				<span  data-order="aNaam_Speler" id="order_Naam_Speler_1" name="order_Naam_Speler_1" data-href="speler_list.php?orderby=aNaam_Speler" class="rnr-orderlink">
											Naam Speler
										</span>
									
									</th>
									
									
									
									
									
									
									<th class="rnr-gridfieldlabel  rnr-field-checkbox" data-field=spelleider>
									
																				<span  data-order="aspelleider" id="order_spelleider_1" name="order_spelleider_1" data-href="speler_list.php?orderby=aspelleider" class="rnr-orderlink">
											Spelleider
										</span>
									
									</th>
									
									
									
									
									
									
									<th class="rnr-gridfieldlabel  rnr-field-number" data-field=speler_punten>
									
																				<span  data-order="aspeler_punten" id="order_speler_punten_1" name="order_speler_punten_1" data-href="speler_list.php?orderby=aspeler_punten" class="rnr-orderlink">
											Speler Punten
										</span>
									
									</th>
									
									
									
									
									
									
									
									
									
								</tr>
								

	</thead>
	<tbody>	
		
<tr class="gridRowAdd rnr-hiddenelem bs-gridrow"  >
	
	
	<td class="bs-gridicons" iEditCont="all"  >
	
		
	
			<a class="glyphicon glyphicon-edit" id="inlineEdit_add1"  title="Bewerken in de lijst"></a>
	
	

	
		
	
			<a class="glyphicon glyphicon-search" id="viewLink_add1" name="viewLink_add1" title="Tonen"></a>
	
	
	</td>	
		

		
	<td  iEditCont="checkBox" class="bs-gridcheckbox"  >
	
	<input type="checkbox" id="check_add1" name="selection[]">
	
	</td>
	

		
	<td class="rnr-nowrap bs-griddetails"  >
	
			
		
							
				
								<a  href="#" id="details_add1"   title="Bekijk details">
				<span class="badge scenario_badge"  id='cntDet_scenario_'>
					<span class="glyphicon glyphicon-th-list"></span> 
					<span class="" ></span>
				</span></a>
		
	
	
	</td>
	


	
	<td class="bs-gridcell rnr-field-text"  data-field=username  >
		<span id="add1_username" ></span>
	</td>



	
	<td class="bs-gridcell rnr-field-text"  data-field=Naam_Speler  >
		<span id="add1_Naam_Speler" ></span>
	</td>



	
	<td class="bs-gridcell  rnr-field-checkbox"  data-field=spelleider  >
		<span id="add1_spelleider" ></span>
	</td>



	
	<td class="bs-gridcell  rnr-field-number"  data-field=speler_punten  >
		<span id="add1_speler_punten" ></span>
	</td>


	
									
	

</tr>

<tr class=" bs-gridrow"  id="gridRow4" >
	
	
	<td class="bs-gridicons" iEditCont="all"  data-record-id="4">
	
		
	
			<a class="glyphicon glyphicon-edit" id="iEditLink4" name="iEditLink4" href='speler_edit.php?editid1=4' title="Bewerken in de lijst"></a>
	
	

	
		
	
			<a class="glyphicon glyphicon-search" id="viewLink4" name="viewLink4" href='speler_view.php?editid1=4' title="Tonen"></a>
	
	
	</td>	
		

		
	<td  iEditCont="checkBox" class="bs-gridcheckbox"  data-record-id="4">
	
	<input type="checkbox" name="selection[]" value="4" id="check1_4">
	
	</td>
	

		
	<td class="rnr-nowrap bs-griddetails"  data-record-id="4">
	
			
		
							
				
								<a  href="#" id="details_4"   title="Bekijk details">
				<span class="badge scenario_badge"  id='cntDet_scenario_4'>
					<span class="glyphicon glyphicon-th-list"></span> 
					<span class="hidden-detcounter" >0</span>
				</span></a>
		
	
	
	</td>
	


	
	<td class="bs-gridcell rnr-field-text"  data-field=username  data-record-id="4">
		<span id="edit4_username" >Mike</span>
	</td>



	
	<td class="bs-gridcell rnr-field-text"  data-field=Naam_Speler  data-record-id="4">
		<span id="edit4_Naam_Speler" >Mike</span>
	</td>



	
	<td class="bs-gridcell  rnr-field-checkbox"  data-field=spelleider  data-record-id="4">
		<span id="edit4_spelleider" ><img src="images/check_no.gif" border=0></span>
	</td>



	
	<td class="bs-gridcell  rnr-field-number"  data-field=speler_punten  data-record-id="4">
		<span id="edit4_speler_punten" val="0" >0</span>
	</td>


	
									
	

</tr>

	</tbody>
	<tfoot>
																		
								<tr class="rnr-bottomrow style1 ">
									
									
									<td class="bs-gridcell"></td>
										

																		
									<td class="bs-gridcell"></td>
									

																		
									<td class="bs-gridcell"></td>
									

										
										<td class="bs-gridcell rnr-field-text" data-field="username">
																				</td>
										
										
										<td class="bs-gridcell rnr-field-text" data-field="Naam_Speler">
																				</td>
										
										
										<td class="bs-gridcell  rnr-field-checkbox" data-field="spelleider">
																				</td>
										
										
										<td class="bs-gridcell  rnr-field-number" data-field="speler_punten">
																					
																							Totaal:
											<span id="total1_speler_punten">0</span>
											
										</td>
										
									
									
								</tr>
								
								
	</tfoot>
</table>







</div>







</div>







			</div>
		</div>
	</div>
</div>
	

		 
<P align="center"><FONT size="1">Deze website is bedoeld om de ontwikkeling van  
ASL te  verbeteren door middel  van drie verschillende hulpmiddelen.</FONT></P>
<P align="center"><FONT size="1">U kunt de&nbsp;informatiebank 
raadplegen,&nbsp;u kunt&nbsp;ons ASL  Game spelen met teams. Of u gebruikt het 
werkblad om u te helpen de juiste keuze te maken op uw werk.</FONT></P>
<P align="center"><FONT size="1"> 
<FONT size="1">Als u meer informatie wilt kunt u altijd </FONT><A href="http://www.spinam.nl/wie-zijn-wij/contact-opnemen"><FONT 
size="1">contact</FONT></A><FONT size="1">&nbsp;met  ons  
opnemen.</FONT></FONT></P><FONT size="1"></FONT> 

<P align="center"><FONT size="1">(c) 2018 </FONT><A 
href="http://www.spinam.nl"><FONT size="1">Spinam</FONT></A><FONT 
size="1">&nbsp;in  samenwerking met </FONT><A href="https://www.horizoncollege.nl/locaties/purmerend/"><FONT 
size="1">Horizon College  Purmerend</FONT></A><FONT size="1">&nbsp;en met dank  
aan  PEITO16AO-A</FONT></P>
	<script>
			window.controlsMap = {"speler":{"list":{"1":{"oldLayout":false,"layoutVersion":3,"layoutName":"OfficeOffice","video":[],"toolTips":[],"searchPanelActivated":true,"controls":[],"search":{"searchBlocks":[],"allSearchFields":["username","speler_id","Naam Speler","spelleider","speler_punten"],"allSearchFieldsLabels":{"username":"Username","speler_id":"Speler Id","Naam Speler":"Naam Speler","spelleider":"Spelleider","speler_punten":"Speler Punten"},"panelSearchFields":[],"googleLikeFields":["speler_id","speler_punten","spelleider","Naam Speler","username"],"inflexSearchPanel":false,"requiredSearchFields":[],"isSearchRequired":false,"searchTableName":"speler","shortSearchTableName":"speler","submitPageType":"list","searchPanelRunByUserApi":false,"usedSrch":false},"filters":{"controls":[]},"gridRows":[{"id":4,"rowInd":0,"contextRowId":4,"isEditOwnRow":true,"gridLayout":3,"keyFields":["speler_id"],"keys":["4"],"masterKeys":{"scenario":{"masterkey1":"4"},"speler_groep":{"masterkey1":"4"}},"childNum":"0"}],"gMaps":{"isUseMainMaps":false,"isUseFieldsMaps":false,"isUseGoogleMap":false,"APIcode":"","mainMapIds":[],"fieldMapsIds":[],"mapsData":[],"tName":"speler"}}}}};
			window.viewControlsMap = {"speler":{"list":{"1":[]}}};
			window.settings = {"tableSettings":{"speler":{"proxy":{"proxy":""},"fieldSettings":{"speler_id":{"list":{"strName":"speler_id","editFormat":"Readonly","mask":false,"maxFileSize":false,"maxTotalFilesSize":false},"search":{"strName":"speler_id","editFormat":"Readonly","mask":false,"maxFileSize":false,"maxTotalFilesSize":false}},"speler_punten":{"list":{"strName":"speler_punten","editFormat":"Readonly","mask":false,"maxFileSize":false,"maxTotalFilesSize":false},"search":{"strName":"speler_punten","editFormat":"Readonly","mask":false,"maxFileSize":false,"maxTotalFilesSize":false}},"spelleider":{"list":{"strName":"spelleider","editFormat":"Checkbox","viewFormat":"Checkbox","mask":false,"maxFileSize":false,"maxTotalFilesSize":false},"search":{"strName":"spelleider","editFormat":"Checkbox","viewFormat":"Checkbox","mask":false,"maxFileSize":false,"maxTotalFilesSize":false}},"Naam Speler":{"list":{"strName":"Naam Speler","editFormat":"Text field","mask":false,"maxFileSize":false,"maxTotalFilesSize":false},"search":{"strName":"Naam Speler","editFormat":"Text field","mask":false,"maxFileSize":false,"maxTotalFilesSize":false}},"username":{"list":{"strName":"username","editFormat":"Readonly","mask":false,"maxFileSize":false,"maxTotalFilesSize":false},"search":{"strName":"username","editFormat":"Readonly","mask":false,"maxFileSize":false,"maxTotalFilesSize":false}}},"strCaption":"Speler","pageMode":0,"detailTables":{"scenario":{"pageType":"list","dispChildCount":"1","hideChild":false,"listShowType":"1","addShowType":0,"editShowType":0,"viewShowType":0,"proceedLink":true,"label":"Scenario"},"speler_groep":{"pageType":"list","dispChildCount":"0","hideChild":false,"listShowType":"1","addShowType":0,"editShowType":0,"viewShowType":0,"proceedLink":true,"label":"Speler Groep"}},"isShowDetails":true,"simpleSearchActive":false,"totalFields":[{"type":"TOTAL","fName":"speler_punten","format":""}],"scrollGridBody":false,"permissions":{"add":true,"delete":true,"edit":true,"search":true,"export":false,"import":false},"listFields":["username","Naam Speler","spelleider","speler_punten"],"maxPages":1,"showRows":true,"listGridLayout":3,"isUseHighlite":true,"isUseToolTips":true,"isInlineEdit":true,"isInlineAdd":true,"view":true,"isUseCK":false}},"global":{"shortTNames":{"speler":"speler","scenario":"scenario","speler_groep":"speler_groep"},"webRootPath":"","ext":"php","charSet":"utf-8","curretLang":"Dutch","debugMode":false,"googleMapsApiCode":"","popupPagesLayoutNames":{"login":"login_bootstrap","register":"register_bootstrap","remind":"remind_bootstrap"},"isMobile":false,"mobileDeteced":false,"s508":false,"mapProvider":0,"locale":{"dateFormat":"1","langName":"nl","ctryName":"NL","startWeekDay":"0","dateDelimiter":"-","is24hoursFormat":"1","leadingZero":"1","timeDelimiter":":","timePmLetter":"","timeAmLetter":""},"showDetailedError":true,"customErrorMessage":"","loginFormType":0,"idStartFrom":5}}; 
			</script>
<script language="JavaScript" src="include/RunnerAll.js"></script>
<script>Runner.util.ScriptLoader.addJS(['include/bootstrap/js/bootstrap.min.js']);
Runner.util.ScriptLoader.addJS(['include/jquery-ui/jquery-ui.min.js']);
Runner.util.ScriptLoader.addJS(['include/bootstrap/js/jquery.mousewheel.min.js']);
Runner.util.ScriptLoader.addJS(['include/bootstrap/js/jquery.mCustomScrollbar.min.js']);
Runner.util.ScriptLoader.addJS(['include/ResizeSensor/ResizeSensor.js']);
Runner.util.ScriptLoader.addJS(['include/ajaxsuggest.js']);
Runner.util.ScriptLoader.addJS(['include/jquery.inputhintbox.js']);
 Runner.util.ScriptLoader.load();</script>
	</body>
</html>
