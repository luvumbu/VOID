<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enregistreur Audio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
      text-align: center;
    }

    .container {
      max-width: 500px;
      margin: auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    button {
      padding: 10px 20px;
      margin: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button.start {
      background-color: #28a745;
      color: white;
    }

    button.stop {
      background-color: #dc3545;
      color: white;
    }

    audio {
      margin-top: 20px;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Enregistreur Audio</h1>
    <p>Cliquez sur "Démarrer" pour enregistrer et "Arrêter" pour sauvegarder.</p>
    <button class="start" onclick="startRecording()">Démarrer</button>
    <button class="stop" onclick="stopRecording()" disabled>Arrêter</button>
    <audio controls></audio>
  </div>

  <script>
    let mediaRecorder;
    let audioChunks = [];
    const startButton = document.querySelector('.start');
    const stopButton = document.querySelector('.stop');
    const audioElement = document.querySelector('audio');

    // Fonction pour démarrer l'enregistrement
    async function startRecording() {
      try {
        const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
        mediaRecorder = new MediaRecorder(stream);

        mediaRecorder.ondataavailable = (event) => {
          audioChunks.push(event.data);
        };

        mediaRecorder.onstop = () => {
          const audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
          audioChunks = [];
          const audioURL = URL.createObjectURL(audioBlob);
          audioElement.src = audioURL;

          // Téléchargement automatique du fichier
          const link = document.createElement('a');
          link.href = audioURL;
          link.download = 'enregistrement.webm';
          link.click();
        };

        mediaRecorder.start();
        startButton.disabled = true;
        stopButton.disabled = false;
      } catch (error) {
        console.error('Erreur lors de l’accès au microphone :', error);
        alert(`Impossible d’accéder au microphone. Détails : ${error.message}`);
      }
    }

    // Fonction pour arrêter l'enregistrement
    function stopRecording() {
      mediaRecorder.stop();
      startButton.disabled = false;
      stopButton.disabled = true;
    }
  </script>
</body>
</html>
