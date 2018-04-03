<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
            
            <p class="header">Contact Us</p>

            <p>
                <strong>KONL Information Officer</strong><br>
                Richard Vancise RN BSN, MBA/HCM<br>
                Office: 502.350.5456<br>
                email : <a href="mailto:rjv@flaget.com">rjv@flaget.com</a>
            </p>

            <form name="inquiry" action="contact.php" method="post">
                <table class="table-condensed">
                    
                    <tr>
                        <td align="right"><span class="">Name:</span></td>
                        <td class=""><input type="text" name="realname" size="40" maxlength="50"></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="">E-mail:</span></td>
                        <td><input type="text" name="email" size="40" maxlength="50"></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="">Telephone:</span></td>
                        <td><input type="text" name="phone" size="12" maxlength="15"></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="">City:</span></td>
                        <td>
                            <input type="text" name="city" size="25" maxlength="50">
                            &nbsp;&nbsp;
                            <SELECT NAME="state">
                            <OPTION VALUE="State">State</OPTION>
                            <OPTION VALUE="AL">AL</OPTION>
                            <OPTION VALUE="AK">AK</OPTION>
                            <OPTION VALUE="AZ">AZ</OPTION>
                            <OPTION VALUE="AR">AR</OPTION>
                            <OPTION VALUE="CA">CA</OPTION>
                            <OPTION VALUE="CO">CO</OPTION>
                            <OPTION VALUE="CT">CT</OPTION>
                            <OPTION VALUE="DE">DE</OPTION>
                            <OPTION VALUE="DC">DC</OPTION>
                            <OPTION VALUE="FL">FL</OPTION>
                            <OPTION VALUE="GA">GA</OPTION>
                            <OPTION VALUE="HI">HI</OPTION>
                            <OPTION VALUE="ID">ID</OPTION>
                            <OPTION VALUE="IL">IL</OPTION>
                            <OPTION VALUE="IN">IN</OPTION>
                            <OPTION VALUE="IA">IA</OPTION>
                            <OPTION VALUE="KS">KS</OPTION>
                            <OPTION VALUE="KY">KY</OPTION>
                            <OPTION VALUE="LA">LA</OPTION>
                            <OPTION VALUE="ME">ME</OPTION>
                            <OPTION VALUE="MD">MD</OPTION>
                            <OPTION VALUE="MA">MA</OPTION>
                            <OPTION VALUE="MI">MI</OPTION>
                            <OPTION VALUE="MN">MN</OPTION>
                            <OPTION VALUE="MS">MS</OPTION>
                            <OPTION VALUE="MO">MO</OPTION>
                            <OPTION VALUE="MT">MT</OPTION>
                            <OPTION VALUE="NE">NE</OPTION>
                            <OPTION VALUE="NV">NV</OPTION>
                            <OPTION VALUE="NH">NH</OPTION>
                            <OPTION VALUE="NJ">NJ</OPTION>
                            <OPTION VALUE="NM">NM</OPTION>
                            <OPTION VALUE="NY">NY</OPTION>
                            <OPTION VALUE="NC">NC</OPTION>
                            <OPTION VALUE="ND">ND</OPTION>
                            <OPTION VALUE="OH">OH</OPTION>
                            <OPTION VALUE="OK">OK</OPTION>
                            <OPTION VALUE="OR">OR</OPTION>
                            <OPTION VALUE="PA">PA</OPTION>
                            <OPTION VALUE="RI">RI</OPTION>
                            <OPTION VALUE="SC">SC</OPTION>
                            <OPTION VALUE="SD">SD</OPTION>
                            <OPTION VALUE="TN">TN</OPTION>
                            <OPTION VALUE="TX">TX</OPTION>
                            <OPTION VALUE="UT">UT</OPTION>
                            <OPTION VALUE="VT">VT</OPTION>
                            <OPTION VALUE="VA">VA</OPTION>
                            <OPTION VALUE="WA">WA</OPTION>
                            <OPTION VALUE="WV">WV</OPTION>
                            <OPTION VALUE="WI">WI</OPTION>
                            <OPTION VALUE="WY">WY</OPTION>
                            <OPTION VALUE="OTHER">OTHER</OPTION>
                            </SELECT>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><span class="">Zip Code:</span></td>
                        <td><input type="text" name="zip_code" size="10" maxlength="10"></td>
                    </tr>
                </table>
                
                <br>
                <span class="">Questions or Comments:</span><br>
                <textarea cols="40" rows="5" name="questions_comments" wrap="virtual"></textarea>
                <br><br>
                
                <div class="g-recaptcha" data-sitekey="6LfAiEsUAAAAAFsZDXVq4BYH3lcjW3Y6OaEmTGHo"></div><br>
                <br>

                <input type="submit" value=" Submit ">
                &nbsp;&nbsp;
                <input type="Reset" value=" Clear Form ">
            </form>

            <p></p>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>