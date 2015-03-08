<!DOCTYPE html>
<html>
    <head>
        <title>TecInASec</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="main_form_container">
            <div class="form">
                <form action="search.php">
                    <input type="text" name="searchString" class="form_search">
                    <label>Search</label>
                    <input type="text" pattern="[0-9]*" name="minPrice" class="form_price">
                    <input type="text" pattern="[0-9]*" name="maxPrice" class="form_price">
                    <label>Price</label>
                    <div tabindex="0" class="onclick-menu">
                        <ul class="onclick-menu-content">
                            <li><button onclick="alert('click 1')">Look, mom</button></li>
                            <li><button onclick="alert('click 2')">no JavaScript!</button></li>
                            <li><button onclick="alert('click 3')">Pretty nice, right?</button></li>
                        </ul>
                    </div>
                    <button type="submit" class="form_submit">></button>
                </form>
            </div>
        </div>
        <footer>
            <ul>
                <li>Sean</li>
                <li>Charlie</li>
                <li>Laurynas</li>
                <li>Valentinas</li>
                <li>Dale</li>
            </ul>
        </footer>
    </body>
</html>