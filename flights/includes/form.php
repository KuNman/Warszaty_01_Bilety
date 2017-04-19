
<div id="content">
    <h1><?php include 'includes/visits.php'; ?></h1>
        <?php include 'includes/airports.php'; ?>
    <h1>Szczegóły lotu
    <form action="pdf.php" method="post" autocomplete="on">
        <p>
            <label for="from" > Z :
                <p>
                <select name="from">
        <?php
        $name = array_column($airports, 'name');
        foreach ($name as $value) {
           echo "<option name=" . $value . '" '. '">' . $value . "</option>";
        }
        ?> 
        </p>
        </select>
        </label> 
        </p>
        <p>
            <label for="to" > Do :
                <p>
                <select name="to">
        <?php
        $name = array_column($airports, 'name');
        foreach ($name as $value) {
           echo "<option name=" . $value . '" '. '">' . $value . "</option>";
        }
        ?>
        </p>
        </select>
        </label> 
        </p>
        <p>
            <label for ="datetime-day" > Dzień wylotu :
            <input type="number" name="year" min="2017" max="2050" step="1" placeholder="rok"/>
            <input type="number" name="month" min="1" max="12" step="1" placeholder="miesiąc"/>
            <input type="number" name="day" min="1" max="31" step="1"placeholder="dzień"/>
        </p>
        <p>
            <label for ="datetime-hour" > Godzina wylotu :
            <input type="time" name="time" />
        </p>
        <p>
            <label for ="lenghthrs" > Długość lotu :
            <input type="number" name="lenghthrs" min="0" step="1" />
        </p>
        <p>
            <label for ="price" > Cena :
            <input type="number" name="price" min="0" step="0.01" />
        </p>
        
            <input type="submit" value=" Rezerwuj! " />

    </form>
</div>
</body> 
