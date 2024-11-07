<?php include "head.php"; ?>

    <div class="content">
        <form class="big_form">
            <div class="c1 br">

                <fieldset>
                <legend>Biodata</legend>
                <label>First Name</label><br>
                <input type="text" placeholder="First Name"><br>
                <label>Surname</label><br>
                <input type="text" placeholder="Surname"><br>
                <label>Date of Birth</label><br>
                <input type="date"><br>
                <label>Gender</label><br>
                <input type="radio"><label>Male</label><br>
                <input type="radio"><label>Female</label><br>
                </fieldset>



                
            </div>

            <div class="c2 br">
                <label>Occupation</label><br>
                <select>
                    <option>-- Select occupation --</option>
                    <option>Plumber</option>
                    <option>Engineer</option>
                    <option>IT and computing</option>
                </select><br>
    
                <label>Currency</label><br>
                <select>
                    <option>-- Select Currency --</option>
                    <option>UGX</option>
                    <option>USD</option>
                    <option>Euro</option>
                    <option>Pound</option>
                    <option>Yen</option>
                </select><br>
            </div>

            <div class="c3">
                <label>Address</label><br>
                <input type="text"><br>
                <label>Next of Kin</label><br>
                <input type="text"><br>
                <label>Contact</label><br>
                <input type="text"><br>
                <input type="submit">
            </div>
        </form>
    </div>

<?php include "footer.php"; ?>