<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="HTML Template, site template, seo, marketing, creative, corporate, modern, multipurpose, one page, business, responsive, minimal, saas, startup">
	
    <title>Online Chatbot in PHP | CampCodes</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,   
        body {
            height: auto;
            width: auto;
        }

        ::selection {
            color: #fff;
            background: #007bff;
        }

        ::-webkit-scrollbar {
            width: 3px;
            border-radius: 25px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #ddd;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #ccc;
        }

        .wrapper {
            width: auto;
            background: #fff;
            border-radius: 1px;
            border: 1px solid lightgrey;
            border-top: 0px;
            margin-right: 0px;
            width: auto;
            height: auto;
        }

        .wrapper .title {
            background: #d0d0d0;
            color: #000;
            font-size: 20px;
            font-weight: 500;
            line-height: 60px;
            text-align: center;
            border-bottom: 1px solid #d0d0d0;
            border-radius: 0 0 0 0;
            width: auto;
        }

        .wrapper .form {
            padding: 20px 20px;
            min-height: 430px;
            max-height: auto;
            overflow-y: auto;
            width: 962px;
        }

        .wrapper .form .inbox {
            width: 100%;
            display: flex;
            align-items: baseline;
            width: auto;
        }

        .wrapper .form .user-inbox {
            justify-content: flex-end;
            margin: 1px 0;
        }

        .wrapper .form .inbox .icon {
            height: 40px;
            width: 40px;
            color: #fff;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            font-size: 18px;
            background: #007bff;
        }

        .wrapper .form .inbox .msg-header {
            max-width:auto;
            margin-left: 0px;
        }

        .form .inbox .msg-header p {
            color: #000;
            background: #ebebeb;
            border-radius: 10px;
            padding: 8px 8px;
            font-size: 14px;
            word-break: break-all;
        }

        .form .user-inbox .msg-header p {
            color: #333;
            background: #efefef;
        }

        .wrapper .typing-field {
            display: flex;
            height: 50px;
            width: 100%;
            align-items: center;
            justify-content: space-evenly;
            background: #efefef;
            border-top: 1px solid #d9d9d9;
            border-radius: 0 0 5px 5px;
        }

        .wrapper .typing-field .input-data {
            height: 40px;
            width: 590px;
            position: relative;
        }

        .wrapper .typing-field .input-data input {
            height: 100%;
            width: 100%;
            outline: none;
            border: 1px solid transparent;
            padding: 0 0 0 15px;
            border-radius: 3px;
            font-size: 15px;
            background: #fff;
            transition: all 0.3s ease;
        }

        .typing-field .input-data input:focus {
            border-color: rgba(0, 123, 255, 0.8);
        }

        .input-data input::placeholder {
            color: #999999;
            transition: all 0.3s ease;
        }

        .input-data input:focus::placeholder {
            color: #bfbfbf;
        }

        .wrapper .typing-field .input-data button {
            position: absolute;
            right: 5px;
            top: 50%;
            height: 30px;
            width: 65px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            outline: none;
            opacity: 0;
            pointer-events: none;
            border-radius: 3px;
            background: #007bff;
            border: 1px solid #007bff;
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }

        .wrapper .typing-field .input-data input:valid~button {
            opacity: 1;
            pointer-events: auto;
        }

        .typing-field .input-data button:hover {
            background: #006fef;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="title"><img src="./assets/images/demo/modern-agency/logo/chatbot.png" style="height: 30px; width: auto; position: absolute; top: 3%; transform: translateY(-3%); left: 16px; margin-left: 40px;"></img>  Empicom Online</div>
        <div class="form">
            <div class="bot-inbox inbox">
           
                <div class="msg-header">
               
                    <p>Welcome to HR Portal online assistance. What can i help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $("#send-btn").on("click", function() {
            $value = $("#data").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);
            $("#data").val('');

            // start ajax code
            $.ajax({
                url: 'message.php',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    // Check if the result is not equal to what was expected
                    if (result.trim() === "not_equal") {
                        $replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>Could you please ask again?</p></div></div>';
                    } else {
                        $replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>' + result + '</p></div></div>';
                    }
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    });
</script>


</body>

</html>


