<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Form Demo</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="Robert M. Erickson">

        <meta name='description' content="Example of a Form">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Course: 142 Section: 418 Student: raduarte --><!-- begin including libraries lib / ../../../../bin --><!-- make Database connections --><!-- Database connections comlete --><!-- class module --><!-- end class module --><!-- student module --><!-- end student module --><!-- libraries complete--><link rel="stylesheet" href="//rerickso.w3.uvm.edu/Blackboard-live/cs142/assignments//form.css" type="text/css" media="screen">
        
        <link rel="stylesheet" href="custom.css" type="text/css" media="screen">
        <!-- 
        <link rel="stylesheet" href="//rerickso.w3.uvm.edu/Blackboard-live/cs142/assignments//print.css" type="text/css" media="print">
        <link rel="alternate stylesheet" href="//rerickso.w3.uvm.edu/Blackboard-live/cs142/assignments//form2.css" type="text/css" title="alternate" media="screen">
        -->
    </head>
<body id="form"><h2>Please join our group</h2>
        
            <!-- notice we are sending the form to itself 
            
            Notice each input tag has a php echo that prints out our variable. 
            This is how we set the default values for each element
            
            CHANGES NEEDED MAke sure the variable names match the variables you 
            Initialized on the first few lines -->

        <p class="heading">Please fill out the following registration form. <span class='required'></span></p>

        <form action="/Blackboard-live/cs142/assignments/form.php" 
              method="post"
              id="frmRegister">

            <fieldset class="text">
                <legend>Contact Information</legend>

                <p>
                    <label for="txtFirstName" class="required text-field">First&nbsp;Name</label>
                    <input type="text" id="txtFirstName" name="txtFirstName" 
                                               value="" 
                           tabindex="502" maxlength="25" placeholder="enter your first name" autofocus onfocus="this.select()" required>
                </p>

                <p>
                    <label for="txtLastName" class="required text-field">Last&nbsp;Name</label>
                    <input type="text" id="txtLastName" name="txtLastName" 
                                               value="" 
                           tabindex="512" maxlength="25" placeholder="enter your last name"  onfocus="this.select()" >
                </p>

                <p>
                    <label for="txtEmail" class="required text-field">Email</label>
                    <input type="email" id="txtEmail" name="txtEmail" 
                                               value=""
                           tabindex="522" maxlength="45" placeholder="enter a valid email address" onfocus="this.select()" >
                </p>

                <p>
                    <label for="txtMisc" class="required text-field">Misc&nbsp;value</label>
                    <input type="text" id="txtMisc" name="txtMisc" 
                                               value=""
                           tabindex="532" maxlength="3" placeholder="enter a valid whole number 0 to 100" onfocus="this.select()" >

            </fieldset>					

            <fieldset class="checkbox ">
                <legend>Do you like (choose at least one and check all that apply):</legend>

                <p>
                    <label class="check-field"><input type="checkbox" id="chkHiking" name="chkHiking" value="Hiking" tabindex="542" 
                                                       checked="checked" >
                        Hiking</label>
                </p>

                <p>
                    <label class="check-field"><input type="checkbox" id="chkKayaking" name="chkKayaking" value="Kayaking" tabindex="562" 
                                                      >
                        Kayaking</label>
                </p>

                <p>
                    <label class="check-field"><input type="checkbox" id="chkMtnBike" name="chkMtnBike" value="Mtn Biking" tabindex="564" 
                                                      > 
                        Mtn&nbsp;Biking</label>
                </p>

                <p>
                    <label class="check-field"><input type="checkbox" id="chkSkiing" name="chkSkiing" value="Skiing" tabindex="568" 
                                                      > 
                        Skiing</label>
                </p>

            </fieldset>

            <fieldset class="radio ">
                <legend>What is your gender?</legend>
                <p>    
                    <label class="radio-field"><input type="radio" id="radGenderFemale" name="radGender" value="Female" tabindex="572" 
                                                      >
                        Female</label>
                </p>
                <p>
                    <label class="radio-field"><input type="radio" id="radGenderMale" name="radGender" value="Male" tabindex="574" 
                                                       checked="checked" >
                        Male</label>
                </p>

                 <p>
                    <label class="radio-field"><input type="radio" id="radGenderPrefer" name="radGender" value="Prefer" tabindex="574" 
                                                      >
                        Prefer not to say</label>
                </p>
            </fieldset>

            <fieldset  class="listbox ">		
                <legend>What is your Favorite Mountain</legend>
                <p>

                    <select id="lstMountains" name="lstMountains" tabindex="592" size="1">
                        <option value="Haystack Mountain" >Haystack Mountain</option>
                        <option value="Camels Hump" >Camels Hump</option>
                        <option value="Laraway Mountain"  selected="selected" >Laraway Mountain</option>
                    </select>
                </p>

            </fieldset>

            <fieldset class="textarea">
                <legend>Your feedback is important to us</legend>

                <p>             
                    <label for="txtComments" class="required">Comments</label>
                    <textarea id="txtComments" name="txtComments" 
                                                  tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

            <input type="hidden" name="hidUrl" value="//rerickso.w3.uvm.edu/Blackboard-live/cs142/assignments/">
            <input type="hidden" name="hidStyle" value="form.css">
            <input type="hidden" name="hidStyle2" value="form2.css">

            <fieldset class="buttons">
                <legend></legend>				
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="982" class="button">
            </fieldset>					
        </form>
        </body>
</html>