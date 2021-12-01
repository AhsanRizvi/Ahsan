<div class="wrapper">
    <header>IE (70% Acheivement)</header>
    <form id='ie' name='ie' action="#">
        <div class="dbl-field1">
            <div class="field">
                <input type="text" name="schedule" placeholder="Schedule"> <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="field">
                <input type="number" min="1" max="72" name="team" placeholder="Team (Module)"> <i
                    class='fas fa-users'></i>
            </div>
            <div class="button-area">
                <button type="button" onclick="find_ie()">Find</button> <span></span>
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="ie_start_date"> Start Date :</lable>
            </div>
            <div class="field">
                <input type="date" name="ie_start_date" id="ie_start_date">
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="ie_start_time"> Start Time :</lable>
            </div>
            <div class="field">
                <input type="time" name="ie_start_time" id="ie_start_time">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="ie_end_date"> End Date :</lable>
            </div>
            <div class="field">
                <input type="date" name="ie_end_date" id="ie_end_date">
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="ie_end_time"> End Time :</lable>
            </div>
            <div class="field">
                <input type="time" name="ie_end_time" id="ie_end_time">
            </div>
        </div>

        <h6>
            <center>TGT Achieved & handed-over to Production</center>
        </h6>
        <div class="dbl-field">
            <div class="field">
                <input type="text" name="ach_ieo" placeholder="Industrial End"> <i class='fas fa-user'></i>
            </div>
            <div class="field">
                <input type="text" name="ach_pex" placeholder="Production EX"> <i class='fas fa-user'></i>
            </div>
        </div>

        <div class="button-area">
            <button type="button" onclick="submit_ie()">Save & Submit</button> <span></span>
        </div> <br>
    </form>
</div>