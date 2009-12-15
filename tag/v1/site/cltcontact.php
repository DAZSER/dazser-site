<style>
label,input {
	width: 150px;
	float: left;
	margin-bottom: 10px;
}

label {
	text-align: right;
	margin-right:10px;
}

br {
	clear: left;
}

#main{
	padding-top:15px;
	padding:10px;}
	
input{border: 1px solid #999; }
textarea{border: 1px solid #999; }

#submit a:link div {
	display: none;
}
#submit a:visited div {
	display: block;
}
.style1 {font-size: medium;font-weight:bold;}
.style3 {color: #0066FF}
</style>
<body>
<script language="JavaScript">
<!--

/***********************************************
* Required field(s) validation v1.10- By NavSurf
* Visit Nav Surf at http://navsurf.com
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

function formCheck(formobj){
	// Enter name of mandatory fields
	var fieldRequired = Array("First Name", "Last Name", "Email");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("First Name", "Last Name", "Email");
	// dialog message
	var alertMsg = "Please complete the following fields:\n";
	
	var l_Msg = alertMsg.length;
	
	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];
		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}

	if (alertMsg.length == l_Msg){
		return true;
	}else{
		alert(alertMsg);
		return false;
	}
}
// -->
</script>
<div id="main" align="center">
<div align="left">
<span class="style1">F</span>ill out the information below to be contacted by a Jani-King Representative.<br />
<br>
</div>
<form ACTION="/centralscripts/FormMail.pl" METHOD="POST" onSubmit="return formCheck(this);">
<input type="hidden" name="recipient" value="director.clt@dazser.com">
<input type="hidden" name="redirect" value="thank.php">

  <table width="489" border="0" cellpadding="0" cellspacing="5">
      <tr>
        <td valign="top"><div align="right">First Name:</div></td>
        <td colspan="2" valign="top"><input id="First_Name" name="First Name" tabindex="1"/>
          <span class="style3">*</span> </td>
        <td valign="top"><div align="right"><span class="style3">*</span> indicates required field </div></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">Last Name:</div></td>
        <td colspan="3" valign="top"><input id="Last_Name" name="Last Name" tabindex="2"/>
        <span class="style3">*</span> </td>
      </tr>
      <tr>
        <td valign="top"><div align="right">Email Address:</div></td>
        <td colspan="3" valign="top"><input type="text" id="Email" name="email" tabindex="3"/>
        <span class="style3">*</span></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">Phone Number:</div></td>
        <td colspan="3" valign="top"><input id="Phone_Number" name="Phone Number" tabindex="4"/></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">Street Address:</div></td>
        <td width="156" valign="top"><input id="Street_Address" name="Street Address" tabindex="5"/></td>
        <td width="34" valign="top"><div align="right">State:</div></td>
        <td width="165"><label><span class="oneField">
          <select id="select" name="State" tabindex="7">
            <option value="">Please select</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC" selected>North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </span></label></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">City:</div></td>
        <td valign="top">
        <input name="City" type="text" id="City" tabindex="6"></td>
        <td valign="top"><div align="right">Zip:</div></td>
        <td><label>
        <input type="text" name="Zip" tabindex="8">
        </label></td>
      </tr>
      <tr>
        <td width="136">&nbsp;</td>
        <td colspan="3"><p>I would like someone to contact me about:<br>
          <br />

            <input name="Area" type="radio" value="Commercial Cleaning Services" style="width:15px;border:none;" tabindex="9">
            Commercial Cleaning Services <br>
            <input name="Area" type="radio" value="Franchise Information" style="width:15px;border:none;" tabindex="10">
        Franchise Information</p>        </td>
      </tr>
      <tr>
        <td valign="top"><div align="right">Comments:</div></td>
        <td colspan="3"><textarea name="Comments" rows="4" cols="21" style="width:300px;" tabindex="11"></textarea></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td colspan="3"><p>
          <input type="submit" name="submit" value="Submit" style="width:60px;" tabindex="12"/>
          <input type="reset" name="reset" value="Reset" style="width:60px;" tabindex="13"/>
        </p>
        <p><br>
          Please only click once, and wait for the confirmation page. </p>        </td>
      </tr>
  </table>
</form>
</div>
</body>