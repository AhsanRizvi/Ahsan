<div class="wrapper">
    <header>Style Details</header>
    <form method="post" id="style_details" name="style_details">
        <div class="dbl-field">
            <div class="field">
                <input type="text" name="schedule" placeholder="Schedule"> <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="field">
                <input type="number" min="1" maxlength="2" max="72" name="team" placeholder="Team (Module)"> <i
                    class='fas fa-users'></i>
            </div>
        </div>


        <div class="dbl-field">
            <div class="field">
                <input type="date" name="date_planning" placeholder="Date (Planning)">
            </div>
            <div class="field">
                <input type="text" name="color" placeholder="Color"> <i class="fas fa-palette"></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <input type="text" name="style" placeholder="Style"> <i class="fas fa-vest"></i>
            </div>
            <div class="field">
                <input type="text" name="name_planning" placeholder="Name (planning)"> <i class='fas fa-user'></i>
            </div>
        </div>

        <div class="dbl-field">
            <div class="dd">
                <select name="section" id='section' class="dd">
                    <option value="1">Section 1</option>
                    <option value="2">Section 2</option>
                    <option value="3">Section 3</option>
                    <option value="4">Section 4</option>
                    <option value="5">Section 5</option>
                    <option value="6">Section 6</option>
                    <option value="7">Amazon PPZ</option>
                    <option value="8">Pad Print Sec 01</option>
                    <option value="9">Pad Print Sec 02</option>
                    <option value="10">Pad Print sec 03</option>
                    <option value="11">Short Jobs</option>
                    <option value="12">Section 11</option>
                    <option value="13">Section 12</option>
                    <option value="14">Section 13</option>
                    <option value="15">Section 14</option>
                    <option value="16">Section 15</option>
                    <option value="17">Section 16</option>
                </select>
            </div>
        </div>

        <div class="button-area">
            <button type="button" onclick="submit_style_form()" name="submitsd">Submit </button> <span></span>
        </div> <br>
    </form>
</div>