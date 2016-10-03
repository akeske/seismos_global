<<<<<<< HEAD

<div id='cssmenu'>
<ul>
	<li class='has-sub'><a href='#'><span>1st&nbsp;utility</span></a>
	<ul>
 		<li class=''><a href='#' id="gridmarkesrlink" onclick="hidegridmarkers()"><span>Hide grid markers</span></a>
			<input type="hidden" id="gridmakerstext" value="0"></input>
		</li>
		<li><a href="#" id="hidecounters" onclick="removeLabels()">Show counters</a>
			<input type="hidden" id="hidecounterstext" value="0"></input>
		</li>
		<li>---------------------------------------------------------------</li>
		<li><a href="#" id="hidea1" onclick="hidemarkers1()">Hide markers</a>
			<input type="hidden" id="hide1" value="0"></input>
		</li>
		
		<!--
						<li><a href="#" id="sgmline1" onclick="selectTool1(6)">Sgm Line</a></li>
						<table cellpadding="2" border="0"> <tr>
						<td>Distance:</td>
						<td align="left"> <input type="text" id="distsgmLine1" value="" size="5"/> </td>
						</tr> </table>
						-->
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line1" onclick="selectTool1(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine1" name="distLine1" value="" size="5"/></td>
			</tr>
			</table>
		</li> 
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line11" onclick="selectTool1(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine11" name="distLine11" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver1" onclick="selectTool1(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer1"name="fibVer1" value="<?php echo $_SESSION['fibVer1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer1" name="distVer1" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer1" id="checkVer1" <?php if(isset($_SESSION['checkVer1'])) echo "checked='checked'"; ?> value="checkVer1"><label for="checkVer1">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor1" onclick="selectTool1(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor1"name="fibHor1"  value="<?php echo $_SESSION['fibHor1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor1"name="distHor1" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side1" onclick="selectTool1(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide1"name="fibSide1"  value="<?php echo $_SESSION['fibSide1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide1"name="distSide1" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir1" onclick="selectTool1(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle1"name="fibCircle1"  value="<?php echo $_SESSION['fibCircle1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle1" name="distCircle1" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool1(4)">Clear all</a></li>
	</ul>
   </li>


   
   
   <li class='has-sub'><a href='#'><span>2nd&nbsp;utility</span></a>
	<ul>
		<li><a href="#" id="hidea2" onclick="hidemarkers2()">Hide markers</a>
			<input type="hidden" id="hide2" value="0"></input>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line2" onclick="selectTool2(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine2" name="distLine2" size="5"/></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line21" onclick="selectTool2(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine21" name="distLine21" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver2" onclick="selectTool2(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer2" name="fibVer2" value="<?php echo $_SESSION['fibVer2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer2" name="distVer2" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer2" id="checkVer2" <?php if(isset($_SESSION['checkVer2'])) echo "checked='checked'"; ?>value="checkVer2"><label for="checkVer2">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor2" onclick="selectTool2(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor2" name="fibHor2" value="<?php echo $_SESSION['fibHor2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor2"  name="distHor2" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side2" onclick="selectTool2(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide2" name="fibSide2"  value="<?php echo $_SESSION['fibSide2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide2" name="distSide2" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir2" onclick="selectTool2(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle2"name="fibCircle2"  value="<?php echo $_SESSION['fibCircle2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle2" name="distCircle2" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool2(4)">Clear all</a></li>
	</ul>
   </li>
   
   
   
   <li class='has-sub'><a href='#'><span>3rd&nbsp;utility</span></a>
	<ul>
		<li><a href="#" id="hidea3" onclick="hidemarkers3()">Hide markers</a>
			<input type="hidden" id="hide3" value="0"></input>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line3" onclick="selectTool3(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine3" name="distLine3" size="5"/></td>
			</tr>
			</table>
		</li>   	
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line31" onclick="selectTool3(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine31" name="distLine31" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver3" onclick="selectTool3(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer3" name="fibVer3" value="<?php echo $_SESSION['fibVer3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer3" name="distVer3" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer3" id="checkVer3"<?php if(isset($_SESSION['checkVer3'])) echo "checked='checked'"; ?> value="checkVer3"><label for="checkVer3">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor3" onclick="selectTool3(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor3"name="fibHor3"  value="<?php echo $_SESSION['fibHor3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor3" name="distHor3" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side3" onclick="selectTool3(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide3"name="fibSide3"  value="<?php echo $_SESSION['fibSide3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide3"name="distSide3" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir3" onclick="selectTool3(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle3"name="fibCircle3"  value="<?php echo $_SESSION['fibCircle3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle3" name="distCircle3" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool3(4)">Clear all</a></li>
	</ul>
	</li>
	
	
	
   <li class='has-sub'><a href='#'><span>4th&nbsp;utility</span></a>
	<ul>
		<li><a href="#" id="hidea4" onclick="hidemarkers4()">Hide markers</a>
			<input type="hidden" id="hide4" value="0"></input>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line4" onclick="selectTool4(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine4" name="distLine4" size="5"/></td>
			</tr>
			</table>
		</li> 
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line41" onclick="selectTool4(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine41" name="distLine41" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver4" onclick="selectTool4(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer4" name="fibVer4" value="<?php echo $_SESSION['fibVer4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer4" name="distVer4" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer4" id="checkVer4" <?php if(isset($_SESSION['checkVer4'])) echo "checked='checked'"; ?> value="checkVer4"><label for="checkVer4">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor4" onclick="selectTool4(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor4" name="fibHor4" value="<?php echo $_SESSION['fibHor4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor4" name="distHor4" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side4" onclick="selectTool4(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide4"name="fibSide4"  value="<?php echo $_SESSION['fibSide4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide4"name="distSide4" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir4" onclick="selectTool4(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle4" name="fibCircle4" value="<?php echo $_SESSION['fibCircle4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle4" name="distCircle4" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool4(4)">Clear all</a></li>
	</ul>
   </li>
   
   
	<?php
	include("inc/database.php");
	$rows1 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM memory WHERE memory=1"));
	$rows2 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM memory WHERE memory=2"));
	$rows3 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM memory WHERE memory=3"));
	?>
	<li ><a href='#' id="memory1"><span>Mem 1</span></a>
		<ul style="width: 150px;">
			<lil style="width: 150px;">
				<a href="#" id="save1" onclick="save(1)" width="200">Save</a>
			</li>
			<li style="width: 150px;">
				<a href="#" id="load1" onclick="load1(1)" >  Load </a>
				</li>
				<input type="hidden" id="lat1" value="0"></input>
				<input type="hidden" id="lng1" value="0"></input>
				<input type="hidden" id="lat2" value="0"></input>
				<input type="hidden" id="lng2" value="0"></input>
				<input type="hidden" id="type" value="0"></input>
				<input type="hidden" id="memory" value="0"></input>
			</li>
			<li style="width: 150px;">
				<a href="#" id="delete1" onclick="delete1(1)"><font color="red">Delete</font></a>
			</li>
		</ul>
	</li>
   
   <li class=''><a href='#' id="memory2"><span>Mem 2</span></a>
		<ul style="width: 150px;">
			<l style="width: 150px;"i>
				<a href="#" id="save2" onclick="save(2)">Save</a>
			</li>
			<li style="width: 150px;">
				<a href="#" id="load2" onclick="load1(2)">  Load </a>
				</li>
			</li>
			<li style="width: 150px;">
				<a href="#" id="delete2" onclick="delete1(2)"><font color="red">Delete</font></a>
			</li>
		</ul>
	</li>
	
	<li class=''><a href='#' id="memory3"><span>Mem 3</span></a>
		<ul style="width: 150px;"
			<li style="width: 150px;">
				<a href="#" id="save3" onclick="save(3)">Save</a>
			</li>
			<li style="width: 150px;">
				<a href="#" id="load3" onclick="load1(3)"> Load </a>
				</li>
			</li>
			<li style="width: 150px;">
				<a href="#" id="delete3" onclick="delete1(3)"><font color="red">Delete</font></a>
			</li>
		</ul>
	</li>
	
	<li class=''><a href='#' id="geodesic" onclick="geodesic()">GD</a>
	<!--		<input type="checkbox" name="geodesic" id="geodesic" <?php if(isset($_SESSION['geodesic'])) echo "checked='checked'"; ?> value="geodesic"> -->
			
		<input type="hidden" id="geodesicHidden" value="1"></input>
	</li>
	
	<li class=''>
		<a href='#' id="showmarkers" onclick="markersShowHide()"><span>Hide</span></a>
		<input type="hidden" id="showmarkersHidden" value="0"></input>
	</li>
	<li class=''><a href='#' id="prevmarker" onclick="prevMarker()"><span>Prev</span></a></li>
	<li class=''><a href='#' id="nextmarker" onclick="nextMarker()"><span>Next</span></a></li>
	
<!--
   <li class='has-sub last'>
	<div class="select1" >Select utility</div>
	<div class="marker1Tip1" >Add <b>1st</b> marker</div>
	<div class="marker1Tip2" >Add <b>2nd</b> marker</div>
	<div class="marker1Drag" >Drag</div>
	</li>
-->
</ul>
</div>

<?php
if($rows1!=0){ ?>
		<script>
			$('#load1').css('color','green')
		</script>
<?php } ?>

<?php
if($rows2!=0){ ?>
		<script>
			$('#load2').css('color','green')
		</script>
<?php } ?>

<?php
if($rows3!=0){ ?>
		<script>
			$('#load3').css('color','green')
		</script>
=======

<div id='cssmenu'>
<ul>
	<li class='has-sub'><a href='#'><span>1st&nbsp;utility</span></a>
	<ul>
 		<li class=''><a href='#' id="gridmarkesrlink" onclick="hidegridmarkers()"><span>Hide grid markers</span></a>
			<input type="hidden" id="gridmakerstext" value="0"></input>
		</li>
		<li><a href="#" id="hidecounters" onclick="removeLabels()">Show counters</a>
			<input type="hidden" id="hidecounterstext" value="0"></input>
		</li>
		<li>
			<table>
			<tr>
				<td width="150"><a href="#" id="predictionsDisplay" onclick="predictionsDisplay()">Show&nbsp;predictions</a></td>
				<input type="hidden" id="predShowHide" value="1"></input>
				<td><div id="predInfo">empty</div></td>
				<td>From:&nbsp;<input type="text" id="fromPred" name="fromPred" value="<?php echo $_SESSION['fromPred']; ?>" size="3"/></td>
				<td>To:&nbsp;<input type="text" id="toPred" name="toPred" value="<?php echo $_SESSION['toPred']; ?>" size="3"/></td>
			</tr>
			</table>
		</li>
		<li>---------------------------------------------------------------</li>
		<li><a href="#" id="hidea1" onclick="hidemarkers1()">Hide markers</a>
			<input type="hidden" id="hide1" value="0"></input>
		</li>
		
		<!--
						<li><a href="#" id="sgmline1" onclick="selectTool1(6)">Sgm Line</a></li>
						<table cellpadding="2" border="0"> <tr>
						<td>Distance:</td>
						<td align="left"> <input type="text" id="distsgmLine1" value="" size="5"/> </td>
						</tr> </table>
						-->
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line1" onclick="selectTool1(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine1" name="distLine1" value="" size="5"/></td>
			</tr>
			</table>
		</li> 
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line11" onclick="selectTool1(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine11" name="distLine11" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver1" onclick="selectTool1(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer1"name="fibVer1" value="<?php echo $_SESSION['fibVer1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer1" name="distVer1" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer1" id="checkVer1" <?php if(isset($_SESSION['checkVer1'])) echo "checked='checked'"; ?> value="checkVer1"><label for="checkVer1">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor1" onclick="selectTool1(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor1"name="fibHor1"  value="<?php echo $_SESSION['fibHor1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor1"name="distHor1" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side1" onclick="selectTool1(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide1"name="fibSide1"  value="<?php echo $_SESSION['fibSide1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide1"name="distSide1" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir1" onclick="selectTool1(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle1"name="fibCircle1"  value="<?php echo $_SESSION['fibCircle1']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle1" name="distCircle1" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool1(4)">Clear all</a></li>
	</ul>
   </li>


   
   
   <li class='has-sub'><a href='#'><span>2nd&nbsp;utility</span></a>
	<ul>
		<li><a href="#" id="hidea2" onclick="hidemarkers2()">Hide markers</a>
			<input type="hidden" id="hide2" value="0"></input>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line2" onclick="selectTool2(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine2" name="distLine2" size="5"/></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line21" onclick="selectTool2(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine21" name="distLine21" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver2" onclick="selectTool2(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer2" name="fibVer2" value="<?php echo $_SESSION['fibVer2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer2" name="distVer2" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer2" id="checkVer2" <?php if(isset($_SESSION['checkVer2'])) echo "checked='checked'"; ?>value="checkVer2"><label for="checkVer2">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor2" onclick="selectTool2(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor2" name="fibHor2" value="<?php echo $_SESSION['fibHor2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor2"  name="distHor2" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side2" onclick="selectTool2(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide2" name="fibSide2"  value="<?php echo $_SESSION['fibSide2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide2" name="distSide2" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir2" onclick="selectTool2(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle2"name="fibCircle2"  value="<?php echo $_SESSION['fibCircle2']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle2" name="distCircle2" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool2(4)">Clear all</a></li>
	</ul>
   </li>
   
   
   
   <li class='has-sub'><a href='#'><span>3rd&nbsp;utility</span></a>
	<ul>
		<li><a href="#" id="hidea3" onclick="hidemarkers3()">Hide markers</a>
			<input type="hidden" id="hide3" value="0"></input>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line3" onclick="selectTool3(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine3" name="distLine3" size="5"/></td>
			</tr>
			</table>
		</li>   	
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line31" onclick="selectTool3(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine31" name="distLine31" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver3" onclick="selectTool3(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer3" name="fibVer3" value="<?php echo $_SESSION['fibVer3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer3" name="distVer3" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer3" id="checkVer3"<?php if(isset($_SESSION['checkVer3'])) echo "checked='checked'"; ?> value="checkVer3"><label for="checkVer3">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor3" onclick="selectTool3(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor3"name="fibHor3"  value="<?php echo $_SESSION['fibHor3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor3" name="distHor3" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side3" onclick="selectTool3(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide3"name="fibSide3"  value="<?php echo $_SESSION['fibSide3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide3"name="distSide3" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir3" onclick="selectTool3(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle3"name="fibCircle3"  value="<?php echo $_SESSION['fibCircle3']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle3" name="distCircle3" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool3(4)">Clear all</a></li>
	</ul>
	</li>
	
	
	
   <li class='has-sub'><a href='#'><span>4th&nbsp;utility</span></a>
	<ul>
		<li><a href="#" id="hidea4" onclick="hidemarkers4()">Hide markers</a>
			<input type="hidden" id="hide4" value="0"></input>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line4" onclick="selectTool4(5)"><span>Str&nbsp;Line 1</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine4" name="distLine4" size="5"/></td>
			</tr>
			</table>
		</li> 
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#'id="line41" onclick="selectTool4(7)"><span>Str&nbsp;Line 2</span></a>	</td>
				<td>Distance:&nbsp;<input type="text" id="distLine41" name="distLine41" size="5"/></td>
			</tr>
			</table>
		</li>
	   	<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="ver4" onclick="selectTool4(2)"><span>Vertical&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibVer4" name="fibVer4" value="<?php echo $_SESSION['fibVer4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distVer4" name="distVer4" value="" size="5"/> </td>
				<td><input type="checkbox" name="checkVer4" id="checkVer4" <?php if(isset($_SESSION['checkVer4'])) echo "checked='checked'"; ?> value="checkVer4"><label for="checkVer4">fall&nbsp;back</label></td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="hor4" onclick="selectTool4(3)"><span>Horizontal&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibHor4" name="fibHor4" value="<?php echo $_SESSION['fibHor4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distHor4" name="distHor4" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="side4" onclick="selectTool4(8)"><span>Side&nbsp;lines</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibSide4"name="fibSide4"  value="<?php echo $_SESSION['fibSide4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distSide4"name="distSide4" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li>
			<table>
			<tr>
				<td width="130"> <a href='#' id="cir4" onclick="selectTool4(1)"><span>Circles</span></a>	</td>
				<td>Numbers:&nbsp;<input type="text" id="fibCircle4" name="fibCircle4" value="<?php echo $_SESSION['fibCircle4']; ?>" size="14"/></td>
				<td>Distance:&nbsp;<input type="text" id="distCircle4" name="distCircle4" value="" size="5"/> </td>
			</tr>
			</table>
		</li>
		<li><a href="#" onclick="selectTool4(4)">Clear all</a></li>
	</ul>
   </li>
   
   
	<?php
	include("inc/database.php");
	$rows1 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM memory WHERE memory=1"));
	$rows2 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM memory WHERE memory=2"));
	$rows3 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM memory WHERE memory=3"));
	?>
	<li ><a href='#' id="memory1"><span>Mem 1</span></a>
		<ul style="width: 150px;">
			<lil style="width: 150px;">
				<a href="#" id="save1" onclick="save(1)" width="200">Save</a>
			</li>
			<li style="width: 150px;">
				<a href="#" id="load1" onclick="load1(1)" >  Load </a>
				</li>
				<input type="hidden" id="lat1" value="0"></input>
				<input type="hidden" id="lng1" value="0"></input>
				<input type="hidden" id="lat2" value="0"></input>
				<input type="hidden" id="lng2" value="0"></input>
				<input type="hidden" id="type" value="0"></input>
				<input type="hidden" id="memory" value="0"></input>
			</li>
			<li style="width: 150px;">
				<a href="#" id="delete1" onclick="delete1(1)"><font color="red">Delete</font></a>
			</li>
		</ul>
	</li>
   
   <li class=''><a href='#' id="memory2"><span>Mem 2</span></a>
		<ul style="width: 150px;">
			<l style="width: 150px;"i>
				<a href="#" id="save2" onclick="save(2)">Save</a>
			</li>
			<li style="width: 150px;">
				<a href="#" id="load2" onclick="load1(2)">  Load </a>
				</li>
			</li>
			<li style="width: 150px;">
				<a href="#" id="delete2" onclick="delete1(2)"><font color="red">Delete</font></a>
			</li>
		</ul>
	</li>
	
	<li class=''><a href='#' id="memory3"><span>Mem 3</span></a>
		<ul style="width: 150px;"
			<li style="width: 150px;">
				<a href="#" id="save3" onclick="save(3)">Save</a>
			</li>
			<li style="width: 150px;">
				<a href="#" id="load3" onclick="load1(3)"> Load </a>
				</li>
			</li>
			<li style="width: 150px;">
				<a href="#" id="delete3" onclick="delete1(3)"><font color="red">Delete</font></a>
			</li>
		</ul>
	</li>
	
	<li class=''><a href='#' id="geodesic" onclick="geodesic()">GD</a>
	<!--		<input type="checkbox" name="geodesic" id="geodesic" <?php if(isset($_SESSION['geodesic'])) echo "checked='checked'"; ?> value="geodesic"> -->
			
		<input type="hidden" id="geodesicHidden" value="1"></input>
	</li>
	
	<li class=''>
		<a href='#' id="showmarkers" onclick="markersShowHide()"><span>Hide</span></a>
		<input type="hidden" id="showmarkersHidden" value="0"></input>
	</li>
	<li class=''><a href='#' id="prevmarker" onclick="prevMarker()"><span>Prev</span></a></li>
	<li class=''><a href='#' id="nextmarker" onclick="nextMarker()"><span>Next</span></a></li>
	
<!--
   <li class='has-sub last'>
	<div class="select1" >Select utility</div>
	<div class="marker1Tip1" >Add <b>1st</b> marker</div>
	<div class="marker1Tip2" >Add <b>2nd</b> marker</div>
	<div class="marker1Drag" >Drag</div>
	</li>
-->
</ul>
</div>

<?php
if($rows1!=0){ ?>
		<script>
			$('#load1').css('color','green')
		</script>
<?php } ?>

<?php
if($rows2!=0){ ?>
		<script>
			$('#load2').css('color','green')
		</script>
<?php } ?>

<?php
if($rows3!=0){ ?>
		<script>
			$('#load3').css('color','green')
		</script>
>>>>>>> 4a4a7b38593ff7aee6ff1fb8f0b4cb1b76124bc6
<?php } ?>