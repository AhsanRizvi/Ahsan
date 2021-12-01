<div class="wrapper">
    <header>Feeding</header>
    <form id='feeding' name='feeding' action="#">
        <div class="dbl-field1">
            <div class="field">
                <input type="text" name="schedule" placeholder="Schedule"> <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="field">
                <input type="number" min="1" max="72" name="team" placeholder="Team (Module)"> <i
                    class='fas fa-users'></i>
            </div>
            <div class="button-area">
                <button type="button" onclick="find_feeding()">Find</button> <span></span>
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="feeding_start_date"> Feeding start Date :</lable>
            </div>
            <div class="field">
                <input type="date" name="feeding_start_date" id="feeding_start_date">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="feeding_start_time"> Feeding start Time :</lable>
            </div>
            <div class="field">
                <input type="time" name="feeding_start_time" id="feeding_start_time">
            </div>
        </div>
        <h6>
            <center> Machine Resetting</center>
        </h6>
        <div class="five-field">
            <div class="field">
                <select id='section' class="dd" name="mcr1">
                    <option value="1">SN</option>
                    <option value="2">OL</option>
                    <option value="3">ZZ</option>
                    <option value="4">BT</option>
                    <option value="5">FLRC</option>
                    <option value="6">FLLC</option>
                    <option value="7">Ring</option>
                    <option value="8">BND</option>
                    <option value="9">FS</option>
                    <option value="10">HS</option>
                </select>
            </div>
            <div class="field">
                <input type="text" name="mcr1_mech" placeholder="Mech">
            </div>
            <div class="field">
                <input type="text" name="mcr1_time" placeholder="Mins">
            </div>
            <div class="field">
                <input type="text" name="mcr1_tech" placeholder="Tech">
            </div>
            <div class="field">
                <input type="text" name="mcr1_tech_mins" placeholder="Mins">
            </div>
        </div>
        <div class="five-field">
            <div class="field">
                <select id='section' class="dd" name="mcr2">
                    <option value="1">SN</option>
                    <option value="2">OL</option>
                    <option value="3">ZZ</option>
                    <option value="4">BT</option>
                    <option value="5">FLRC</option>
                    <option value="6">FLLC</option>
                    <option value="7">Ring</option>
                    <option value="8">BND</option>
                    <option value="9">FS</option>
                    <option value="10">HS</option>
                </select>
            </div>
            <div class="field">
                <input type="text" name="mcr2_mech" placeholder="Mech">
            </div>
            <div class="field">
                <input type="text" name="mcr2_time" placeholder="Mins">
            </div>
            <div class="field">
                <input type="text" name="mcr2_tech" placeholder="Tech">
            </div>
            <div class="field">
                <input type="text" name="mcr2_tech_mins" placeholder="Mins">
            </div>
        </div>

        <div class="five-field">
            <div class="field">
                <select id='section' class="dd" name="mcr3">
                    <option value="1">SN</option>
                    <option value="2">OL</option>
                    <option value="3">ZZ</option>
                    <option value="4">BT</option>
                    <option value="5">FLRC</option>
                    <option value="6">FLLC</option>
                    <option value="7">Ring</option>
                    <option value="8">BND</option>
                    <option value="9">FS</option>
                    <option value="10">HS</option>
                </select>
            </div>
            <div class="field">
                <input type="text" name="mcr3_mech" placeholder="Mech">
            </div>
            <div class="field">
                <input type="text" name="mcr3_time" placeholder="Mins">
            </div>
            <div class="field">
                <input type="text" name="mcr3_tech" placeholder="Tech">
            </div>
            <div class="field">
                <input type="text" name="mcr3_tech_mins" placeholder="Mins">
            </div>
        </div>

        <div class="five-field">
            <div class="field">
                <select id='section' class="dd" name="mcr4">
                    <option value="1">SN</option>
                    <option value="2">OL</option>
                    <option value="3">ZZ</option>
                    <option value="4">BT</option>
                    <option value="5">FLRC</option>
                    <option value="6">FLLC</option>
                    <option value="7">Ring</option>
                    <option value="8">BND</option>
                    <option value="9">FS</option>
                    <option value="10">HS</option>
                </select>
            </div>
            <div class="field">
                <input type="text" name="mcr4_mech" placeholder="Mech">
            </div>
            <div class="field">
                <input type="text" name="mcr4_time" placeholder="Mins">
            </div>
            <div class="field">
                <input type="text" name="mcr4_tech" placeholder="Tech">
            </div>
            <div class="field">
                <input type="text" name="mcr4_tech_mins" placeholder="Mins">
            </div>

        </div>
        <div class="five-field">
            <div class="field">
                <select id='section' class="dd" name="mcr5">
                    <option value="1">SN</option>
                    <option value="2">OL</option>
                    <option value="3">ZZ</option>
                    <option value="4">BT</option>
                    <option value="5">FLRC</option>
                    <option value="6">FLLC</option>
                    <option value="7">Ring</option>
                    <option value="8">BND</option>
                    <option value="9">FS</option>
                    <option value="10">HS</option>
                </select>
            </div>
            <div class="field">
                <input type="text" name="mcr5_mech" placeholder="Mech">
            </div>
            <div class="field">
                <input type="text" name="mcr5_time" placeholder="Mins">
            </div>
            <div class="field">
                <input type="text" name="mcr5_tech" placeholder="Tech">
            </div>
            <div class="field">
                <input type="text" name="mcr5_tech_mins" placeholder="Mins">
            </div>
        </div>
        <br>

        <div class="dbl-field">
            <div class="field">
                <lable for="feeding_end_date"> Feeding end Date :</lable>
            </div>
            <div class="field">
                <input type="date" name="feeding_end_date" id="feeding_end_date">
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <lable for="feeding_end_time"> Feeding end Time :</lable>
            </div>
            <div class="field">
                <input type="time" name="feeding_end_time" id="feeding_end_time">
            </div>
        </div>

        <div class="sngl-field">
            <div class="field">
                <input type="text" name="feeding_mach_eng" placeholder="Machine Eng"> <i class='fas fa-user'></i>
            </div>
        </div>

        <div class="sngl-field">
            <div class="field">
                <input type="text" name="feeding_tech_eng" placeholder="Technician"> <i class='fas fa-user'></i>
            </div>
        </div>
        <div class="button-area">
            <button type="button" onclick="submit_feeding()">Save & Submit</button> <span></span>
        </div> <br>
    </form>
</div>