<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrap" style="width:800px;margin:0 auto;">
    <form method="POST" action="insert.php">
    <div class="form-group">
        <label>書名</label>
        <input type="text" class="form-control" placeholder="書名" name="name">
    </div>
    <div class="form-group">
        <label>参考URL</label>
        <input type="text" class="form-control" placeholder="参考URL" name="url">
    </div>
    <div class="form-group">
        <label for="exampleTextarea">書評</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
    </form>
    <div class="list-group" style="margin-top: 20px;">
    <a href="http://localhost/sample07/kadai/select.php" class="list-group-item active">
    履歴一覧
    </a>
    </div>
</div>
</body>
</html>