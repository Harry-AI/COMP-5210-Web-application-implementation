function speak(texttospeech){
      if ('speechSynthesis' in window) {

      var synthesis = window.speechSynthesis;

      // Get the first `en` language voice in the list
      var voice = synthesis.getVoices().filter(function(voice) {
        return voice.lang === 'en';
      })[0];

      // Create an utterance object
      var utterance = new SpeechSynthesisUtterance(texttospeech);

      // Set utterance properties
      utterance.voice = voice;
      utterance.pitch = 1.5;
      utterance.rate = 1.25;
      utterance.volume = 0.8;

      // Speak the utterance
      synthesis.speak(utterance);

    } else {
      console.log('Text-to-speech not supported.');
    }
}
function voice(){
      $.getJSON("jsonData.json", function(data) {
       data.forEach(function(obj) { speak(obj.item); });
    });
}



