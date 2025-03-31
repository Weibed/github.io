<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Strings</title>
        <meta charset="UTF-8">
        <link href="lab.css" rel="stylesheet">
    </head>

    <body>
        <h1>Using Arrays, Strings, Sorting, and Loops</h1>
        <form name = "franklin" method="POST" action="results.php">
            <p> Chose one or more of the following string deconstruction methods.</p>
            <p>
            <label>
                <input type="checkbox" name="chkWordAlphaSort">
                Word Alphabetical Sort
            </label>
            <label>
                <input type="radio" name="radWordAlphaSortDirection"
                    value="ascending" checked = "checked">Ascending
            </label>
            <label>
                <input type="radio" name="radWordAlphaSortDirection"
                    value="descending">Descending
            </label><br>
            <label>
                <input type="checkbox" name="chkWordFreqSort">
                Word Frequency Sort 
            </label>
            <label>
                <input type="radio" name="radWordFreqSortDirection"
                    value="ascending" checked = "checked">Ascending
            </label>
            <label>
                <input type="radio" name="radWordFreqSortDirection"
                    value="descending">Descending
            </label><br>
            
            <label>
                <input type="checkbox" name="chkCharacterCount">
                Character Count
            </label>
            </p>

            <p> Enter the text you want evaluated: </p>
            <p>
                <textarea cols="40" rows="5" name="txtParagraph">The quick, brown fox jumps over the lazy dog.</textarea>
            </p>

            <input type="hidden" name="hdnName" value="David Weibel">

            <p>
                <input type="submit" name="btnSubmit" value="Submit">
            </p>



        </form>
        <br />
        <?php include("footer.inc.php");?>
        <br /><br />
        <small>Version 1.00.01</small>
    </body>
</html>