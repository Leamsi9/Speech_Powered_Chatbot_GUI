<!DOCTYPE HTML>
<html>
<head>
    <title>
        Lucas Trotacielos
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/star_wars.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/text_chatbot.js"></script>
    <script type="text/javascript">
        var cbAutoSend = 'checked';
    </script>

</head>

<body>
<section class="container">
<div class="avatar_holder">
    <div class="bot_avatar">
        <img src="assets/Luke-face.jpg">
    </div>
</div>
<div id="responseHolder">
    <div id="responseContent">
    </div>
</div>
<div id="speechcontainer">
    <div id="info">Dale click al micrófono para hablar con Lucas</div>
    <div id="button_panel">
        <button id="btnMicrophone" type="button" value="microphone" onclick="microphoneClick()">
            <img id="start_img" src="assets/mic.gif" alt="Start"></button>
    </div>
    <div id="results">
        <span id="final_span" class="final"></span>
        <span id="interim_span" class="interim"></span>
        <p>
    </div>
</div>

<div id="formpanel">
    <form id="frmChat" action="#">
        <p>Escribe tu nombre y luego teclea tu mensaje o haz click en el micrófono para hablar con Lucas:</p>
        <table id="form_table">
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" id="txtUser" name="user" size="20" value=" "/>
                    <input type="hidden" name="send"/>
                </td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td><input type="text" name="message" id="txtMessage" size="80"/></td>
                <td colspan="2"><input type="submit" name="send" value="Send Value"/></td>
            </tr>
        </table>
    </form>
    <div class="autosend">
        <input type="checkbox"  name="autosend" value="checked" checked
               onclick="if (this.checked) {cbAutoSend = this.value} else { cbAutoSend = '' }"/> Autosend
    </div>
</div>
</section>
<script type="text/javascript" src="scripts/speech_chatbot.js"></script>
</body>
</html>

    

