 //*********************************************


//Codes for convert voice to text.

 var recognition = new webkitSpeechRecognition();
            recognition.lang="ar-GB";

            recognition.onresult = function(event){
                console.log(event);
                document.getElementById("convert_text").value = 
                     event.results[0][0].transcript; 
                }
                recognition.start();