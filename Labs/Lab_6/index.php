
<?php
    $phrase = "GoodMorningAfternoonEvening";
    $error_message = "";

    if (isset($_GET["user_phrase"])) {
        if ($_GET["user_phrase"] != "") {
            $user_input = $_GET["user_phrase"];

            if ($user_input === $phrase) {
                $query_data = http_build_query($_GET);
                header("Location: submission_tab.php?" . $query_data);
                exit();
            } else {
                $error_message = "The phrase you typed doesn't seem to match, please try again.";
            }
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Home Page</title>

        <link rel="stylesheet" href="./styling.css">
    </head>

    <body id="gradient">
        <header>
            <h1>A Quick Hololive-Related Survey</h1>
        </header>

        <main>
            <article>
                <h3>Select any names of talents that you like, or any of the names that really stick out to you:<br>
                    (or don't! That's an option too!)</h3>

                <form id="talent_questionnaire" method="GET" action="">
                    <label for="CM">Calliope Mori</label>
                    <input type="checkbox" id="CM" name="Calliope Mori" value="Calliope Mori"><br>

                    <label for="TK">Takanashi Kiara</label>
                    <input type="checkbox" id="TK" name="Takanashi Kiara" value="Takanashi Kiara"><br>

                    <label for="NI">Ninomae Ina'nis</label>
                    <input type="checkbox" id="NI" name="Ninomae Ina'nis" value="Ninomae Ina'nis"><br>

                    <label for="OK">Ouro Kronii</label>
                    <input type="checkbox" id="OK" name="Ouro Kronii" value="Ouro Kronii"><br>

                    <label for="HK">Hakos Baelz</label>
                    <input type="checkbox" id="HK" name="Hakos Baelz" value="Hakos Baelz"><br>

                    <label for="I">IRyS</label>
                    <input type="checkbox" id="I" name="IRyS" value="IRyS"><br>

                    <label for="NR">Nerissa Ravencroft</label>
                    <input type="checkbox" id="NR" name="Nerissa Ravencroft" value="Nerissa Ravencroft"><br>

                    <label for="SN">Shiori Novella</label>
                    <input type="checkbox" id="SN" name="Shiori Novella" value="Shiori Novella"><br>

                    <label for="KB">Koseki Bijou</label>
                    <input type="checkbox" id="KB" name="Koseki Bijou" value="Koseki Bijou"><br>

                    <label for="MA">Mococo Abyssguard</label>
                    <input type="checkbox" id="MA" name="Mococo Abyssguard" value="Mococo Abyssguard"><br>

                    <label for="FA">Fuwawa Abyssgaurd</label>
                    <input type="checkbox" id="FA" name="Fuwawa Abyssgaurd" value="Fuwawa Abyssgaurd"><br>

                    <label for="CI">Cecilia Immergreen</label>
                    <input type="checkbox" id="CI" name="Cecilia Immergreen" value="Cecilia Immergreen"><br>

                    <label for="GM">Gigi Murin</label>
                    <input type="checkbox" id="GM" name="Gigi Murin" value="Gigi Murin"><br>

                    <label for="ERB">Elizabeth Rose Bloodflame</label>
                    <input type="checkbox" id="ERB" name="Elizabeth Rose Bloodflame" value="Elizabeth Rose Bloodflame"><br>

                    <label for="RP">Raora Panthera</label>
                    <input type="checkbox" id="RP" name="Raora Panthera" value="Raora Panthera"><br>

                    <?php 
                        if ($error_message) {
                            echo "<br><span class=\"red\">$error_message</span><br>";
                        }   
                    ?>

                    <label for="user_phrase">As a formality, please enter the phrase: "<?=$phrase?>"</label>
                    <input type="text" id="user_phrase" name="user_phrase"><span class="red">*</span>

                    <p><input type="submit" value="Submit"></p>
                </form>
            </article>
        </main>
    </body>
</html>