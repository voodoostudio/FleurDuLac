<form name="formPicker" id="formPicker" action="https://sb.ghix.net/default.aspx?default.aspx" method="get" target="_blank">
    <input type="hidden" name="view" value="Superbooking1" />
    <input type="hidden" name="action" value="List" />
    <input type="hidden" name="Template" value="Template" />

    <!-- PUT YOUR HOTEL ID AS VALUE -->
    <input type="hidden" name="HotelID" id="HotelID" value="2082760" />

    <!-- PUT LANGUAGE ID AS VALUE
            1	English
            2	Deutsch
            3	Italiano
            4	Français
            5	Español
            6	Portuguese
            7	Русский
            8	Traditional Chinese
            9	Japanese
            10	Arabic
            11	Nederlands
            12	Simplified Chinese
            13	Hindi
            14	Bulgarian
            15	Romanian
    -->
    <input type="hidden" name="Language" value="4" />

    <!-- PUT DATE AS VALUE (format must be dd.mm.yyyy) -->
    <input type="text" id="tdate" name="tdate" value="<?php echo date("d.m.Y"); ?>" />

    <!-- SELECT NIGHTS -->
    <select name="tnights">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>

    <!-- SUBMIT BUTTON -->
    <input type="submit" value="Book Now" />
</form>