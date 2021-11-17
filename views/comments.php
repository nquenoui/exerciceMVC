<body>
    <main>
        <h2><?=$title;?></h2>
        <h3><?=$description;?></h3>
        <button type="button" class="btn btn-primary" onclick="window.location.href = 'index.php';">Retour au menu</button>
        <table class="table">
            <thead>
                <tr>   
                    <th>#</th>
                    <th>Description</th>
                    <th>Crée le</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tableData = "";
                    foreach($commsList as $commItem){
                        $tableData.="<tr>";
                        foreach ($commItem as $key=>$attr){
                            $tableData.="<td>";
                            $tableData.=$attr;
                            $tableData.="</td>";
                        }
                        $tableData.="</tr>";
                    }
                    if(count($commsList) == 0){
                        $tableData.="<p>Pas de commentaires pour ce post</p>";
                    }
                    print_r($tableData);
                ?>
            </tbody>
        </table>
    </main>
<body>
