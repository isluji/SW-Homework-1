<html>
    <head>
        <title>List of project proposals</title>
        <meta charset="UTF-8"/>
        <link rel = "stylesheet" type = "text/css" href = "../style.css" />
    </head>

    <body>
    <?php
        $projects = simplexml_load_file('../data/projects.xml'); // Load XML file in a variable

        echo "<h1>List of project proposals</h1>";
        
        echo "<table border='medium'>";

        foreach ($projects->project as $project):
            $title = $project['title'];
            $budget = $project->budget;
            $duration = $project->duration;
            $objective = $project->objective;
            //$partners = $project->partner;
            //$workPackage = $project->workPackage;
            $country = $project->country;
            $email = $project->email;

            $color = "yellow";

            if ($budget > 15000) {
                $color = "orange";
            }

            echo "<tr> <th background-color=". $color . "> <strong>" . $title . "</strong>: " . $duration . " months, " . $budget . " €</th></tr>";
        endforeach;

        echo "</table>";
    ?>
    </body>
</html>