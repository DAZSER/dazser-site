<style>
body {
		text-align:center;
		background:#999;
		}
</style>
<body>
<div id="main" align="center">
    <img src="../images/logo.jpg" width="301" height="146"><br>
    <br> 
<form ACTION="/centralscripts/FormMail.pl" METHOD="POST" onSubmit="return formCheck(this);">    <input type="hidden" name="recipient" value="glitch1501@yahoo.com">
<input type="hidden" name="redirect" value="qualitythanks.php">
<input type="hidden" name="subject" value="Quality Survey Response">
<br>
<label>Please rate your Jani-King experience: 
<select name="select">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10" selected>10</option>
</select>
</label>
  <p>
    <label>
    <input type="submit" name="submit" value="Submit">
    </label>
  </p>
  </form>
</div>
</body>