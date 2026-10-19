var nav_menu = document.getElementById("nav-menu");
function Show(){
    nav_menu.classList.add("show-menu");
}

function Hide(){
    nav_menu.classList.remove("show-menu");
}

window.philips = window.philips || {};
philips.speechToText = (() => {
    const SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
    const SpeechGrammarList = window.SpeechGrammarList || webkitSpeechGrammarList;

    // DOM elements
    const $searchText = document.querySelector('.input-field');
    const $microphone = document.querySelector('.input-field__microphone');
    const $button = document.querySelector('.input-field__button');
    /*
    * @description Set up all the proper variables / setting for SpeechRecognition.
    * @returns {object} - SpeechRecognitions 'recognition' object.
    * @example startListening();
    */

    const setUpSpeechRecognition = () => {
        // Products
        const products = [
        'airfryer',
        'avent',
        'blender',
        'erzatsteile',
        'hue',
        'lumea',
        'oneblade',
        'ontkalker',
        'padhouder',
        'senseo',
        'sonicare',
        'speedpro',
        'steamer',
        'toothbrush',
        'tv',
        'waterreservoir'
        ];

        // Speech Recognition
        const grammar = `#JSGF V1.0; grammar names; public <name> = ${products.join(' | ')} ;`;
        const recognition = new SpeechRecognition();
        const speechRecognitionList = new SpeechGrammarList();

        speechRecognitionList.addFromString(grammar, 1);
        recognition.grammars = speechRecognitionList;
        recognition.lang = 'en-GB';
        recognition.interimResults = true;
        recognition.maxAlternatives = 1;
        return recognition;
    };

    /*
    * @description Start listening for user input.
    * @returns {void} - This function doesn't return anything.
    * @example startListening();
    */
    const startListening = () => {
        recognition = setUpSpeechRecognition();

        recognition.start();

        recognition.onresult = (event) => {
        const last = event.results.length - 1;
        const product = event.results[last][0].transcript;

        document.querySelector('#js-voice-output').setAttribute('value', product);

        // console.log(`Result received: ${product}.`);
        // console.log(`Confidence: ${event.results[0][0].confidence}`);
        // console.log(event);
        };

        recognition.onend = () => {
        $microphone.classList.remove('input-field__microphone--active');
        };

        recognition.onspeechend = () => {
        recognition.stop();
        };

        recognition.onnomatch = () => {
        console.log('I didn\'t recognise that.');
        };

        recognition.onerror = (event) => {
        console.log(`Error occurred in recognition: ${event.error}`);
        };
    };


    /*
    * @description Initialize the Speech to Text function.
    * @returns {void} - This function doesn't return anything.
    * @example initialize();
    */
    const initialize = () => {
        $microphone.classList.remove('input-field__microphone--hidden');
        $microphone.addEventListener('click', () => {
        $microphone.classList.add('input-field__microphone--active');
        // console.log('Ready to receive your command.');
        startListening();
        });

        
    };

    if (SpeechRecognition && SpeechGrammarList) {
        document.addEventListener('DOMContentLoaded', () => {
        initialize();
        });
    }
})();