var text1 = document.getElementById('text1');
            var text2 = document.getElementById('text2'),
                checkBtn = document.getElementById('checkBtn'),
                courseRec = document.getElementById('courseRec');

var arrSlist =['collaborate', 'teamwork', 'develop','execute','update','maintain','related','experience'];
var arrHlist =['graphic', 'design', 'adobe', 'creative', 'indesign', 'illustrator', 'photoshop', 'dreamweaver', 'lightroom', 'html', 'css', 'mailchimp', 'shopify','web','digital', 'typography','newsletter', 'website'];
            
var firstarr = [],
    secarr = [],
    myobj = {},
    missingarr = [];

function matchJob(type){
    var secstr = text2.value.toLowerCase();
    var counter2;
    var arr = [],
        narr = [];

    if(type == 1){
        arr = arrSlist;
        narr = firstarr;
    } else if(type == 2){
        arr = arrHlist;
        narr = secarr;
    }

    for(var i=0; i< arr.length; i++){
        var re = new RegExp(arr[i], 'g');
        var matchWord = secstr.match(re);

        if(matchWord != null){

            narr.push(matchWord[0]);

            var obj = {
            keyword:arr[i],
            jobtimes:0,
            restimes:0
            };
            myobj[arr[i]] = obj;

            counter2 = matchWord.length;

            myobj[arr[i]].jobtimes = counter2;

            /*console.log(matchWord);*/


        } else {
            var ndiv = document.createElement('div');
            ndiv.innerHTML = "I'm sorry. Not single word is matched."
        }

    }
    console.log(narr, myobj);
}
            
function matchResume(newtype,obj){
    var parastr = text1.value.toLowerCase();    
    var counter;
    var narr = [];

    if(newtype == 1){
        narr = firstarr;
    } else if (newtype == 2){
        narr = secarr;
    }

    for (var j=0; j< narr.length; j++){
        var innerRe = new RegExp(narr[j], 'g');
        var innerMatch = parastr.match(innerRe);

        if(innerMatch != null){

            counter = innerMatch.length;

            myobj[narr[j]].restimes = counter;
            /*console.log(innerMatch);*/

        } else{
            counter = 0;
            myobj[narr[j]].restimes = counter;
            missingarr.push(narr[j]);
        }

    }
}
            
function createTable(){

    for(var key in myobj){
        var mTrow = document.createElement('TR');
        var mTdata1 = document.createElement('TD');
        var mTtext1 = document.createTextNode(myobj[key].keyword);
        var mTdata2 = document.createElement('TD');
        var mTtext2 = document.createTextNode(myobj[key].restimes);
        var mTdata3 = document.createElement('TD');
        var mTtext3 = document.createTextNode(myobj[key].jobtimes);

        mTdata1.appendChild(mTtext1);
        mTdata2.appendChild(mTtext2);
        mTdata3.appendChild(mTtext3);
        mTrow.appendChild(mTdata1);
        mTrow.appendChild(mTdata2);
        mTrow.appendChild(mTdata3);
        mTable.appendChild(mTrow);


    }    

}
            
matchBtn.addEventListener('click', function(){
    matchJob(1);
    matchResume(1);
    matchJob(2);
    matchResume(2);
    console.log(myobj);

    createTable();
    courseRec.innerHTML = "Missing skills are "+ missingarr;

});