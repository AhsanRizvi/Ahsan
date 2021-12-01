<div class="wrapper">
    <header>Lay-out</header>
    <form id='layout' name='layout' action="#">
        <div class="dbl-field1">
            <div class="field">
                <input type="text" name="schedule" placeholder="Schedule"> <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="field">
                <input type="number" min="1" max="72" name="team" placeholder="Team (Module)"> <i
                    class='fas fa-users'></i>
            </div>
            <div class="button-area">
                <button type="button" onclick="find_layout()">Find</button> <span></span>
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="date_lto"> Line Take-over Date : </lable>
            </div>
            <div class="field">
                <input type="date" name="date_lto" id="date_lto">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="time_lto"> Line Take-over Time : </lable>
            </div>
            <div class="field">
                <input type="time" name="time_lto" id="time_lto">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="name_lto1"> Name : </lable>
            </div>
            <div class="field">
                <input type="text" name="name_lto1" placeholder="Mr. Ahsan"> <i class='fas fa-user'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="lo_finished_time"> Lay-out finished Time : </lable>
            </div>
            <div class="field">
                <input type="time" name="lo_finished_time" id="lo_finished_time">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="name_lto2"> Name : </lable>
            </div>
            <div class="field">
                <input type="text" name="name_lto2" placeholder="Mr.Ahsan"> <i class='fas fa-user'></i>
            </div>
        </div>

        <div class="message">
            <textarea placeholder="Remark (Lay-out)" name="remark_layout"></textarea> <i class="material-icons"></i>
        </div> <br>
        <div class="button-area">
            <button type="button" onclick="submit_layout()">Save</button> <span></span>
        </div> <br>
    </form>
</div>