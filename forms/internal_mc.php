<div class="wrapper">
    <header>Internal Machine Setting</header>
    <form id='internal_mc' name='internal_mc' action="#">
        <div class="dbl-field1">
            <div class="field">
                <input type="text" name="schedule" placeholder="Schedule"> <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="field">
                <input type="number" min="1" max="72" name="team" placeholder="Team (Module)"> <i
                    class='fas fa-users'></i>
            </div>
            <div class="button-area">
                <button type="button" onclick="find_imcl()">Find</button> <span></span>
            </div>
        </div>

        <div class="trpl-field">
            <div class="field">
                <select class="dd" name="imc1">
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
                <input type="text" name="nos1" placeholder="No's"> <i class="fas fa-sort-numeric-up"></i>
            </div>
            <div class="field">
                <input type="text" name="imc1_time" placeholder="Mins"> <i class="far fa-clock"></i>
            </div>
        </div>

        <div class="trpl-field">
            <div class="field">
                <select class="dd" name="imc2">
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
                <input type="text" name="nos2" placeholder="No's"> <i class="fas fa-sort-numeric-up"></i>
            </div>
            <div class="field">
                <input type="text" name="imc2_time" placeholder="Mins"> <i class="far fa-clock"></i>
            </div>
        </div>

        <div class="trpl-field">
            <div class="field">
                <select class="dd" name="imc3">
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
                <input type="text" name="nos3" placeholder="No's"> <i class="fas fa-sort-numeric-up"></i>
            </div>
            <div class="field">
                <input type="text" name="imc3_time" placeholder="Mins"> <i class="far fa-clock"></i>
            </div>
        </div>

        <div class="trpl-field">
            <div class="field">
                <select class="dd" name="imc4">
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
                <input type="text" name="nos4" placeholder="No's"> <i class="fas fa-sort-numeric-up"></i>
            </div>
            <div class="field">
                <input type="text" name="imc4_time" placeholder="Mins"> <i class="far fa-clock"></i>
            </div>
        </div>

        <div class="trpl-field">
            <div class="field">
                <select class="dd" name="imc5">
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
                <input type="text" name="nos5" placeholder="No's"> <i class="fas fa-sort-numeric-up"></i>
            </div>
            <div class="field">
                <input type="text" name="imc5_time" placeholder="Mins"> <i class="far fa-clock"></i>
            </div>
        </div> <br>
        <div class="dbl-field">
            <div class="field">
                <lable for="mcs_start_time">Machine setting Start time :</lable>
            </div>
            <div class="field">
                <input type="time" name="mcs_start_time" id="mcs_start_time">
            </div>
        </div>
        <div class="dbl-field">

            <div class="field">
                <lable for="mcs_end_time"> Machine Setting End Time :</lable>
            </div>
            <div class="field">
                <input type="time" name="mcs_end_time" id="mcs_end_time">
            </div>
        </div>

        <div class="dbl-field">
            <div class="field">
                <lable for="needle_ho_strt_time"> Needle Handover Start Time : </lable>
            </div>
            <div class="field">
                <input type="time" name="needle_ho_start_time" id="mcs_end_time">
            </div>
        </div>


        <div class="dbl-field">
            <div class="field">
                <lable for="needle_ho_end_time"> Needle Handover End time :</lable>
            </div>
            <div class="field">
                <input type="time" name="needle_ho_end_time" id="needle_ho_end_time">
            </div>
        </div>
        <h6>
            <center> Machine setting End and line take-over for Bulk </center>
        </h6>
        <div class="dbl-field">
            <div class="field">
                <input type="text" name="name_ind_eng" placeholder="Industrial Eng"><i class='fas fa-user'></i>
            </div>
            <div class="field">
                <input type="text" name="name_mach_eng" placeholder="Machine Eng"><i class='fas fa-user'></i>
            </div>
        </div>
        <div class="message">
            <textarea placeholder="Remark (Internal Machine Setting)" name="remark_imc"></textarea> <i
                class="material-icons"></i>
        </div> <br>
        <div class="button-area">
            <button type="button" onclick="submit_internal_mc()">Save</button> <span></span>
        </div> <br>
    </form>
</div>