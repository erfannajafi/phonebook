<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    
    <link rel="stylesheet" href="<?= asset_url(); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= asset_url(); ?>css/all.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m-5 p-5">
            <?php if($alreadyExists): ?>
                <span class="text-warning"><?=$message;?></span>
            <?php else: ?> 
                    <span class="text-<?=$success ? 'success' : 'danger' ;?>"><?= $message ?></span>
            <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col m-5 p-5">
                <a href="<?=site_url();?>">Go Back</a>
            </div>
        </div>
    </div>
    
</body>
</html>