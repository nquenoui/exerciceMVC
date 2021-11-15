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
                <?=$tableData;?>
            </tbody>
        </table>
    </main>
<body>
