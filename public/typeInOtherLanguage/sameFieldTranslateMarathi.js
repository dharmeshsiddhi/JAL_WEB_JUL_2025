function sameFieldLanguageConversion(objectData) {
    objectData.source_ids.forEach(function(value, index) {
      let myData = document.getElementById(value);
      myData.addEventListener("keydown", function(e) {
        myData.focus(); //sets focus to element
        var val = myData.value; //store the value of the element
        myData.value = ""; //clear the value of the element
        myData.value = val; //set that value back.
        convertToMarathiForSameInput(myData, e);
      });
      myData.addEventListener("blur", function(e) {
        checkCorrespondanceForSameInput(myData);
      });
    });
  }
  let baseUrlForSameInput = "https://inputtools.google.com/request?text=";
  let optionsForSameInput =
    "&itc=mr-t-i0-und&num=13&cp=0&cs=1&ie=utf-8&oe=utf-8&app=demopage";
  function convertToMarathiForSameInput(source, event) {
    let sourceData = source.value;
    if (sourceData === "" && event.keyCode === 32) {  
      event.preventDefault();
      return false;
    }
    if (sourceData[sourceData.length - 1] === " " && event.keyCode === 32) {
      event.preventDefault();
      return false;
    }
  
    if (event.keyCode === 32) {    //32 for space
      let marathiLastWord = null;
  
      let sourceWordsArr = sourceData.split(" ");
      let sourceLastWord = sourceWordsArr.splice(-1);
      let lastChar = sourceData[sourceData.length];
      if (sourceData != "") {
        fetch(baseUrlForSameInput + sourceLastWord + optionsForSameInput)
          .then(res => res.json())
          .then(data => {
            marathiLastWord = data[1][0][1][0];
  
            sourceWordsArr.push(marathiLastWord);
            let sourceValue = sourceWordsArr.join(" ");
            source.value = sourceValue+" ";
          })
          .catch(error => console.log(error));
      }
    }
    if (event.keyCode === 8) {   //8 for backspace
      let sourceData = source.value;
      if (sourceData != "") {
        let sourceWordsArr = sourceData.split(" ");
        sourceWordsArr.splice(sourceWordsArr.length - 1, 1);
        let sourceValue = sourceWordsArr.join(" ");
        source.value = sourceValue;
      }
      event.preventDefault();
      return false;
    }
    if (
      event.keyCode === 37 ||
      event.keyCode === 38 ||
      event.keyCode === 39 ||
      event.keyCode === 40
    ) {
      alert("Sorry, Keys not allowed for this component");
      event.preventDefault();
      return false;
    }
  }
  function checkCorrespondanceForSameInput(source) {
    let sourceData = source.value;
    if (sourceData != "") {
      let sourceWordsArr = sourceData.split(" ");
      for (let i = 0; i < sourceWordsArr.length; i++) {
        if (sourceWordsArr[i] == "") {
          sourceWordsArr.splice(i, 1);
        }
      }
    }
  }
  //developed by sanket
  
  
  /*var google.elements.transliteration.LanguageCode = {
      ENGLISH: 'en',
      AMHARIC: 'am',
      ARABIC: 'ar',
      BENGALI: 'bn',
      CHINESE: 'zh',
      GREEK: 'el',
      GUJARATI: 'gu',
      HINDI: 'hi',
      KANNADA: 'kn',
      MALAYALAM: 'ml',
      MARATHI: 'mr',
      NEPALI: 'ne',
      ORIYA: 'or',
      PERSIAN: 'fa',
      PUNJABI: 'pa',
      RUSSIAN: 'ru',
      SANSKRIT: 'sa',
      SINHALESE: 'si',
      SERBIAN: 'sr',
      TAMIL: 'ta',
      TELUGU: 'te',
      TIGRINYA: 'ti',
      URDU: 'ur'
  };*/
  