<?php 
    $metaDescription = "Cincinnati area computer and electronics repair by Nerd Team Awesome. Contact us for a repair quote!";
    $pageTitle = "Contact";
    require_once 'inc/header.php'; 
?>

<div id="bodyWrap">
    <div id="aboutWrap">
        <div id="aboutImg">
            <div class="imgWrap"><img src="./img/contact.jpg" width="170" alt="Contact Us!" /></div>
        </div>
        <div id="about">
            <h2 class="italic">Contact Us!</h2><br />
                If you'd like to set up a time to get you computer fixed, need a technology consultation, or just want to ask us a few questions 
                please use the methods below to get in contact with us. We'll respond ASAP!
        </div>
        <div class="clear"></div>
    </div>
    <div class="bodyBar"></div>
    <div class="colWrap">
        <div class="col">
            <h4 class="italic">Phone Us:</h4><br /><br />
            Jason Varney<br />
            513.846.3849<br /><br />
            Fran Varney<br />
            513.240.9911<br />
        </div>
        <div class="col">
            <h4 class="italic">E-mail Us:</h4><br /><br />
            <form id="frmContact" method="post" action="php/process.php">
                <table width="350">
                    <th>
                        Contact Info:&nbsp;
                    </th>
                    <tr>
                        <td>First Name:&nbsp;</td>
                        <td><input type="text" name="txtFirst" id="txtFirst" value="" /></td>
                    </tr>
                    <tr>
                        <td>Last Name:&nbsp;</td>
                        <td><input type="text" name="txtLast" id="txtLast" value="" /></td>
                    </tr>
                    <tr>
                        <td>Phone:&nbsp;</td>
                        <td><input type="text" name="txtPhone" id="txtPhone" value="" /></td>
                    </tr>
                    <tr>
                        <td>Email:&nbsp;</td>
                        <td><input type="text" name="txtEmail" id="txtEmail" value="" /></td>
                    </tr>
                    <tr>
                        <td>Contact Method:&nbsp;</td>
                        <td>
                            <input type="radio" name="radContact" id="radContact" value="Phone" />&nbsp;Phone
                            <input type="radio" name="radContact" id="radContact" value="Email" />&nbsp;Email
                        </td>
                    </tr>
                    <th>
                        <br /><br />
                        Device Info:&nbsp;
                    </th>
                    <tr>
                        <td>Device Name/Serial #:&nbsp;<br /><br /></td>
                        <td><input type="text" name="txtSerial" id="txtSerial" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">Describe the problem or service you are seeking:</td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="txtDescribe" id="txtDescribe" cols="36"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" />
                            <input type="reset" name="btnClear" id="btnClear" value="Clear" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php require_once 'inc/footer.php'; ?>
