<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form" action="datapost.php" method="POST">
        <h2 class="form-title">Employee and Visitors</br></br>Covid-19 Form</h2>

        <div class="form-group">
            <label for="First_Name" class="form-label">First_Name</label>
            <input type="text" id="First_Name" name="First_Name" class="form-input">
            <label for="Last_Name" class="form-label">Last_Name</label>
            <input type="text" id="Last_Name" name="Last_Name" class="form-input">
        </div>

        <div class="form-group">
            <p>1.Has the individual washed his/her hands or used antiseptic?</p>
            <input type="radio" id="Hand_Antiseptic" name="Hand_Antiseptic">
            <label for="Hand_Antiseptic">Yes</label><br>
            <input type="radio" id="Hand_Antiseptic" name="Hand_Antiseptic">
            <label for="Hand_Antiseptic">No(Please ask them to do)</label><br>

            <p>2. Which of the following symptoms does the individual have?</p>
            <input type="checkbox" id="Symptoms" name="Symptoms">
            <label for="Fever">Fever</label>
            <input type="checkbox" id="Symptoms" name="Symptoms">
            <label for="Cold">Cold</label>
            <input type="checkbox" id="Symptoms" name="Symptoms">
            <label for="Shortness_of_Breath">Shortness of Breath</label>
            <input type="checkbox" id="Symptoms" name="Symptoms">
            <label for="Chest_Pain">Persistent pain in the chest</label>
        </div>

        <div class="form-group">
            <p>3. For employees - check the temperature and enter the result.</p>
            <input type="number" id="Temperature" name="Temperature" class="form-input">
            <label for="Temperature">°C</label>
        </div>

        <div class="form-group">
            <p>4. Has the individual contacted with people that were infected, suspected or diagnosed with COVID-19?</p>
            <input type="radio" id="Contact" name="Contact">
            <label for="Contact">Yes</label><br>
            <input type="radio" id="Contact" name="Contact">
            <label for="Contact">No</label><br>
        </div>

        <div class="form-group">
            <label for="Additional_Notes" class="form-label">5.Additional_Notes</label>
            <textarea id="Additional_Notes" name="Additional_Notes" class="form-input"></textarea>
        </div>

        <div class="a">
                <p>Remind and ask individuals to:<br>
                1. Wash their hands or use antiseptics<br>
                2. Not shake hands or contact physically<br>
                3. Wear facemasks in the building<br>
            </p>
        </div>

        <button type="submit" class="form-button">Submit</button>
    </form>
</body>

</html>