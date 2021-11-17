<body>
    <main>
        <h3>Liste des posts</h3>
        <table class="table">
            <thead>
                <tr>   
                    <th>#</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actif ?</th>
                    <th>Crée le</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $tableData = '';
                    foreach($postList as $postItem){
                        $tableData.="<tr>";
                        foreach ($postItem as $attr){
                            $tableData.="<td>";
                            $tableData.=$attr;
                            $tableData.="</td>";
                        }
                        $tableData.="<td><a href='index.php?action=comments-list&post_id=".$postItem["id"]."'>Voir</a></td>";
                        $tableData.="</tr>";
                    }
                    print_r($tableData);
                ?>
            </tbody>
        </table>
    </main>
<body>
