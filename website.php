<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="design.css">
    </head>
    <body>
        <?php
        if (($_SESSION["credentials"] !== 'teacher') AND ($_SESSION["credentials"] !== 'pupil')){
            header("location: index.php");
            exit;
        }
        ?>
        <div class="header">
            <h1>Lumen</h1>
            <p>St Aloysius College English Department</p>
        </div>

        <form>
            <div class="topnav">
                <a href="/example_essays.php">Example Essays</a> 
                <a href="https://www.schoology.com/" target="_blank">Schoology</a>
                <a href="https://www.bbc.com/education/subjects/zt3rkqt" target="_blank">BBC Bitesize</a>
                <a href="http://scottishbooktrust.com/writing/opportunities-for-writers/young-writers" target="_blank">Writing Competitions</a>
                <a href="https://www.staloysius.org/" style="float:right" target="_blank">St Aloysius College</a>
            </div>
        </form>

        <div class="row">

            <div class="leftcolumn">
                <div class="card">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Mar 7, 2018</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                    <p>In his poem ‘To a Skylark’, Percy Bysshe Shelley describes the bird of the title as being ‘like a poet hidden / in the light of thought’. This idea, of light as a metaphor for the creative process, inspired the name for this website, as it captures, so simply, so much of the essence of writing. Any piece of original writing, while it may take influence and inspiration from a number of sources, comes fundamentally from the thoughts and thought processes of its author; when done well, the piece or writing illuminates those original thoughts, providing clarity, order and radiance. A light may also help to guide, and at its best, writing can help to guide us to greater understanding of, and empathy with, an important issue or a person’s feelings or experiences. Finally, Shelley’s original image conjures the thought of a light as a place of sanctuary, where the poet or writer can take refuge in the process of creating, giving form and fluency to his or her ideas and emotions. </p>
                </div>

            </div>

            <div class="rightcolumn">
                <div class="card">
                    <h2>About Martin MacInnes</h2>
                    <img src="/images/martin macinnes.jpg" width="150" height="200">
                    <p>Martin MacInnes was born in Scotland. He has an MA from the University of York, has read at international science and literature festivals, and is the winner of a Scottish Book Trust New Writers Award and the 2014 Manchester Fiction Prize. He lives in Edinburgh where he wrote his first novel Infinite Ground.</p>
                </div>

                <div class="card">
                    <h3>Popular Post</h3>
                    <div class="fakeimg"><p>Image</p></div>
                </div>

                <div class="card">
                    <h3>Schools Social Media</h3>
                    <a href="https://www.facebook.com/stalsglasgow/" target="_blank">Facebook</a><br>
                    <br>
                    <a href="https://twitter.com/StAlsGlasgow?lang=en-gb" target="_blank">Twitter</a>
                </div>

            </div>
        </div>

        <div class="footer">
            <h3>Website Designed and Created by Aaron Savage</h3>
        </div>        
    </body>
</html>