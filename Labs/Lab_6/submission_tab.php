<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Submission Page</title>

        <link rel="stylesheet" href="./styling.css">
    </head>

    <body id="solid">
        <header>
            <h1>Results Page</h1>
        </header>

        <main>
            <p>It looks like you said you're a fan of:</p>
            <span class="white">
                <?php
                    $choose_count = 0;
                    $max_count = 15;
                    $EN_talents = $_GET;

                    if (!$EN_talents) {
                        echo "Not a big fan of any of them, hm?";
                    } else {
                        foreach ($EN_talents as $name => $talent) {
                            if ($talent != "GoodMorningAfternoonEvening") {
                                echo format($talent);
                                $choose_count++;
                            }
                        }

                        echo "<br>Wow you like $choose_count/$max_count talents in the English branch!<br>";

                        if (in_array("Ninomae Ina'nis", $EN_talents) || in_array("Cecilia Immergreen", $EN_talents) 
                        || in_array("Nerissa Ravencroft", $EN_talents) || in_array("Shiori Novella", $EN_talents)) {
                            echo "Hey, at least one of my favorites is in your list, too! :)<br>";
                        }
                    }

                    // Creates the "proper" list item format for how I want to diplay list items.
                    function format($name) {
                        return "- " . $name . "<br>";
                    }        
                ?>
            </span>
        </main>

    </body>
</html>