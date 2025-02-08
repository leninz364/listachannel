
<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Channel List</title>
    <meta name="robots" content="noindex">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body{
            font-family: 'Open Sans',sans-serif;
        }
        .grlist-ul {
            margin: 10px 0 0 0;
            padding: 0;
            list-style: none;
            display: block;
        }
        .grlist-ul li {
            margin-bottom: 5px;
            background: #f8f8f8;
            border: 1px solid #e7e7e7;
            padding: 5px 10px;
        }
        .grlist-ul li div {
            margin: 10px;
        }
        .grlist-ul li>* {
            display: inline-block;
        }
        .tmpl_channel_box {
            display: block;
            font-weight: bold;
            border: 0 !important;
            -webkit-box-shadow: 1px 1px 4px 0 rgba(0,0,0,0.5);
            -moz-box-shadow: 1px 1px 4px 0 rgba(0,0,0,0.5);
            box-shadow: 1px 1px 4px 0 rgba(0,0,0,0.5);
        }
        .tmpl_channel_box:hover a.active {
            color: #fff;
        }
        .tmpl_channel_box a.active {
            color: #c04;
        }
        .tmpl_channel_box:hover a {
            color: #fff;
            text-decoration: none;
        }
        .tmpl_channel_box a {
            color: #333;
            display: block;
        }
        .tmpl_channel_box:hover {
            background: #679dc6;
            color: #fff;
            transition: all .5s ease;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
        }
        h3.title {
            font-family: 'Open Sans Condensed',sans-serif;
            font-weight: 300;
            overflow: hidden;
            text-align: center;
            padding: 5px 0;
            margin: 5px;
            text-transform: uppercase;
            clear: both;
        }
        h3.title:before {
            right: .5em;
            margin-left: -50%;
        }
        h3.title:before, h3.title:after {
            content: "";
            display: table;
            background-color: #333;
            display: inline-block;
            height: 1px;
            position: relative;
            vertical-align: middle;
            width: 50%;
        }
        h3.title:after {
            left: .5em;
            margin-right: -50%;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3 class="title">Groups</h3>
            <ul id="gr_pag1" class="grlist-ul"  >
                <?php foreach ($data->data->categories as $category):?>
                <li class="tmpl_channel_box">
                    <a style="padding: 5px 0" class="<?= ($category->id == $data->category_selected) ?'activ':''?>" href="<?=$url."?id=".$category->id?>">
                        <?=$category->title?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div  class="col-md-8">
            <h3 class="title">Channels</h3>
            <ul id="ch_list_pag" class="grlist-ul">
                <?php foreach ($data->data->channels as $channel):?>
                <li class="tmpl_channel_box">
                    <div style="margin: 2px 10px 2px 2px; width: 50px">
                        <?php if (strlen($channel->epgLogo)>3): ?>
                        <img width="50px" src="<?=$channel->epgLogo?>" />
                        <?php endif;?>
                    </div>
                    <div style="margin:2px;">
                        <div style="margin:2px;" class="ch_name"><?=$channel->name?></div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
