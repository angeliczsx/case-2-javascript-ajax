<?php
require_once 'layout.php';
require_once '../controllers/ChatController.php';
$controller = new ChatController();

$pengirim = isset($_GET['pengirim']) ? $_GET['pengirim'] : '';
$penerima = isset($_GET['penerima']) ? $_GET['penerima'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pengirim']) && isset($_POST['penerima']) && isset($_POST['pesan'])) {
    $controller->kirimPesan();
    header('Location: ' . $_SERVER['PHP_SELF'] . '?pengirim=' . $pengirim . '&penerima=' . $penerima);
    exit();
}

$pesan = $controller->model->getPesan($pengirim, $penerima);
?>
<!-- views/chat.php -->
<!-- ... -->
<script>
    var lastMessageId = 0;
    var pengirim = '<?php echo $pengirim; ?>';
    var penerima = '<?php echo $penerima; ?>';

    function getNewMessages() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_new_messages.php?pengirim=' + pengirim + '&penerima=' + penerima + '&lastId=' + lastMessageId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var messages = JSON.parse(xhr.responseText);
                for (var i = 0; i < messages.length; i++) {
                    var message = messages[i];
                    lastMessageId = Math.max(lastMessageId, message.id);
                    addMessageToChat(message.pengirim, message.pesan, message.waktu);
                }
            }
        };
        xhr.send();
    }

    function addMessageToChat(pengirim, pesan, waktu) {
        var chatBody = document.querySelector('.chat-body');
        var pesanElement = document.createElement('div');
        pesanElement.classList.add('pesan');
        pesanElement.innerHTML = `
            <strong>${pengirim}</strong>
            <p>${pesan}</p>
            <small>${waktu}</small>
        `;
        chatBody.appendChild(pesanElement);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    setInterval(getNewMessages, 500); 
</script>