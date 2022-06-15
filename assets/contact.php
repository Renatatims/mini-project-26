<!DOCTYPE html>
</html>
    <head>
        <title>It's in the mail!</title>
        <link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"> 
        <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"> 
        <link rel="stylesheet" href="../css/main.css">
    </head>
     
    <body>
        <aside>
            <figure>
                <div id="myMugShotArea">
                    <img id="msa" src="../images/contact.jpg" alt="Contact Info" title="niffty contact icon"/>  
                </div>
		<figcaption></figcaption>
            </figure>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../thisSiteEnv/thisSiteEnv.html">About this site</a></li>
                    <li><a href="../about/about.html">About me</a></li>
                    <li><a href="../links/links.html">My Links</a></li>
                    <li><a href="../contact/contact.php">Contact</a></li>
		    <script src="./contact.js" defer></script>
                </ul>
            </nav>
        </aside>

        <main>
            <h1>Contact Me </h1>
            <p><strong>email:</strong> psmass@msn.com<p>
            <p>You may also contact me via LinkedIn messenger and contact associated contact information. </p>
<!---            <a href="#" class="cta">My Portfolio</a> -->
            <!-- EMAIL Form  -->

<form name="contactform" method="post" action="./send_form_email.php" onSubmit="return validateForm()">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email_address">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email_address" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="27" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class="std-button-blue" type="submit" value="Submit"> 
 </td>
</tr>
</table>
</form>
        </main>
        <script>
            (function(){
                var menu = document.querySelector
            })
        </script>
    </body>
</html>


