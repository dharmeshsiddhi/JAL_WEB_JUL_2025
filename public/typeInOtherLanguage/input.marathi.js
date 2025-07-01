function typeInOtherLanguage(objectData) {
  $(objectData.arr_input_ids).each(function(index, value) {
    let myData = document.getElementById(value);
    myData.addEventListener("input", convertToMarathi);
  });
}
let baseUrl = "https://inputtools.google.com/request?text=";
let options =
  "&itc=mr-t-i0-und&num=13&cp=0&cs=1&ie=utf-8&oe=utf-8&app=demopage";
function convertToMarathi(e) {
  let marathiLastWord = null;
  let value = e.target.value;
  let inputWords = value.split(" ");
  let lastWord = inputWords.splice(-2);
  let lastChar = value[value.length - 1];
  if (lastChar == " ") {
    fetch(baseUrl + lastWord + options)
      .then(res => res.json())
      .then(data => {
        marathiLastWord = data[1][0][1][0];
        let inputData = value.split(" ");
        let exceptLast = [];
        inputData.filter((v, i, a) => {
          i < a.length - 2 && exceptLast.push(v);
        });
        let exceptLastString = exceptLast.join(" ");
        if (exceptLastString != "") {
          let convertedValue = exceptLastString + " " + marathiLastWord + " ";
          // convertedValue = convertedValue.replace(/[,]+/, "");
          convertedValue = convertedValue.replace(undefined, "");
          this.value = convertedValue;
        } else {
          let convertedValue = marathiLastWord + " ";
          // convertedValue = convertedValue.replace(/[,]+/, "");
          convertedValue = convertedValue.replace(undefined, "");
          this.value = convertedValue;
        }
      })
      .catch(error => console.log(error));
  }
}
