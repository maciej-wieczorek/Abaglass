<?php 
        $csvFile = file('images/phocagallery/images.csv');
        $data = [];
        foreach ($csvFile as $line) {
            $data[] = str_getcsv($line);
        }
        for ($i = 0; $i < 60; $i++)
        {
            echo $data[i];
        }
?>