<x-layout>
    
<h1 align="center">Student Registration Form</h1>

<div id="app">
    <form action="database/register.php" method="POST" class="form">
        <table align="center" border="0">
            <tr>
                <td><label for="name">Name of the Applicant</label></td>
            </tr>
            <tr>
                <td><input type="text" name="first_name" id="" placeholder="First"> </td>
                <td><input type="text" name="last_name" id="" placeholder="Last"></td>
            </tr>

            <tr>
                <td><br></td>
            </tr>

            <tr>
                <td><label for="birthDate">Date of Birth</label></td> 
            </tr>
            
            <tr>
                <td colspan="2"><input type="date" name="birth_date" id="" style="width:379px;"></td>
            </tr>
            
            
            <tr><td><label for="gender">Gender</label></td></tr>
            <tr>
                <td><input type="radio" name="gender" id="male" required checked>Male</td>
                <td><input type="radio" name="gender" id="female" >Female</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>

            <tr>
                <td><label for="address">Address</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" style="width:379px;" name="street_address" id="" placeholder="Street Address"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="text" name="street_address_line_two" id="" placeholder="Street Address Line 2" style="width:379px;"> </td>
            </tr>

            <tr>
                <td><input type="text" name="city" id="" placeholder="City"></td>
                <td><input type="text" name="region" id="" placeholder="Region"></td>
            </tr>

            <tr>
                <td><input type="text" name="postal" id="" placeholder="Postal / Zip Code"></td>
                <td><select name="statuss" id="">
                    <option value="" id="" selected disabled>Marital Status</option>
                    <option value="single" id="single">Single</option>
                    <option value="married" id="married">Married</option>
                </select></td>
            </tr>

            <tr>
                <td><input type="submit" value="Submit" ></td>
            </tr>

            <tr>
                <td><a href="list.php">Employee List</a></td>
            </tr>
        </table>
        
    </form>
    </div>
    <h1 align="center">Baquing, Aaron Joseph C.</h1>
</x-layout>