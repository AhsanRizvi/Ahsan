<div class="wrapper">
    <header>Line Handovering</header>
    <form id='line_ho' name='line_ho' action="#">
        <div class="dbl-field1">
            <div class="field">
                <input type="text" name="schedule" placeholder="Schedule"> <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="field">
                <input type="number" min="1" max="72" name="team" placeholder="Team (Module)"> <i
                    class='fas fa-users'></i>
            </div>
            <div class="button-area">
                <button type="button" onclick="find_line_ho()">Find</button> <span></span>
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="date_HO"> Date [Production - Line Handovering] :</lable>
            </div>
            <div class="field">
                <input type="date" name="date_HO" id="Date_HO">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="open_time_HO"> Open time :</lable>
            </div>
            <div class="field">
                <input type="time" name="open_time_HO" id="Open_time_HO">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="name_HO"> Name :</lable>
            </div>
            <div class="field">
                <input type="text" name="name_HO" placeholder="Mr. Ahsan"> <i class='fas fa-user'></i>
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="act_HO_time"> Actual Handover Time [by IE] :</lable>
            </div>
            <div class="field">
                <input type="time" name="act_HO_time" id="act_HO_time">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="name_HO1"> Name :</lable>
            </div>
            <div class="field">
                <input type="text" name="name_HO1" placeholder="Mr. Ahsan"> <i class='fas fa-user'></i>
            </div>
        </div>

        <div class="message">
            <textarea placeholder="Remark (Line handovering)" name="remark_LHO"></textarea> <i
                class="material-icons"></i>
        </div><br>
        <div class="button-area">
            <button type="button" onclick="submit_line_ho()">Save</button> <span></span>
        </div> <br>
    </form>
</div>