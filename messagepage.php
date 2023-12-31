<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <!--Bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">

    <style>
        /* Style for message input box */
        .message-input {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            padding: 15px;
        }
    </style>

</head>
<body style="padding: 15px; opacity:75%; background-image: url(https://www.ilovewallpaper.com/images/buzzy-bees-wallpaper-white-p8721-35735_medium.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    
    <div class="container card chat-app" style="background-color: #ffe066; padding: 15px;min-height: 100vh;">
        <h3 style="font-family: cursive; padding: 20px;"> Conversation </h3>
        
        <div class="container card chat-app" id="chatspcace" style="background-color: #c8babd; padding: 55px;min-height: 80vh">
            <div class="chat-message clearfix">

                <ul class="m-b-0">
                    <?php
                                            include_once('database_connection.php');
                                           
                                            $a=1;
                                            $stmt = $conn->prepare(
                                                    
                    "SELECT chat, timestamp
                    FROM chat_message
                    WHERE to_id =2 and from_id =1 or from_id=2 and to_id=1
                    ;");
                                    $stmt->execute();
                                    $chats = $stmt->fetchAll();
                                    foreach ($chats as $chat) {
                                       
                                      
                                        
                                    ?>
                                        <li class="clearfix" style="padding: 10px; border: 1px solid #000;">
                <div class="message-data">
                    <span class="message-data-time"><?php echo $chat['timestamp']; ?></span>
                </div>
                <div class="message my-message"><?php echo $chat['chat']; ?></div>                                    
            </li>
                                    <?php
                                    }
                                    ?>
                                            
                                                                              
                                                   
                                                </ul>
            </div>
        </div>
    </div>


    <div class="message-input">
        <div class="input-group mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="msg" placeholder="Type something.." aria-label="Recipient's message with two button addons">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">More</button>
                <ul class="dropdown-menu outline-primary" style="padding: 2px;">
                    <li><a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"> Camera</i></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"> Image</i></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <a href="javascript:void(0);" class="btn btn-outline-danger"><i class="fa fa-music"> Music</i></a>
                    <li><hr class="dropdown-divider"></li>
                    <li><a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-file-pdf-o"> File</i></a></li>
                  </ul>
                <button class="btn btn-success fa fa-send" type="button" onclick="printmsg()">  Send</button>
            </div>                
        </div>
    </div>

    <script>
        
        function printmsg(){
            
        }
    </script>
</body>
</html>
