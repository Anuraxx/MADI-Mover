var id;
var request;

function generateReceipt(){
    $('.rcpt').css('display','block');
}
function closeReceipt(){
    $('.rcpt').css('display','none');
}

function checkAval(id){
    console.log(id);
    if(((document.getElementsByClassName(id)[0]).parentElement).getElementsByTagName('button')[0].textContent=='BOOK NOW'){
        generateReceipt();
        return;
    }
    $.get( "https://node-servr.herokuapp.com/getStatus?id="+id, function( data ) {
        console.log("------->"+data);
        
        if(data=='Available') $('.'+id).html(data).css("background-color", "lightgreen");
        else if(data=='Booked') $('.'+id).html(data).css("background-color", "#fb5f54");
        else $('.'+id).html(data).css("background-color", "#9e9e9e");

        if(data=='Available'){
            var temp1=document.getElementsByClassName(id)[0];
            (temp1.parentElement).getElementsByTagName('button')[0].innerText='BOOK NOW';
            var info={
                driverinfo:{
                    id:'D'+id,
                    name:'Yashwant Singh',
                    contact:'9876543210'
                },
                vehicleinfo:{
                    vid:id,
                    no:'DL A55 6060',
                    name:'Hyundai SX4',
                    fare:((temp1.parentElement).getElementsByTagName('p')[2]).getElementsByTagName('span')[0].textContent,
                    bookid:'',
                    loc:((temp1.parentElement).getElementsByTagName('p')[1]).getElementsByTagName('span')[0].textContent
                },
                bookingid:function(){ return (this.driverinfo.id)+(this.vehicleinfo.vid)+'1234';},
            }
            var dinfo=Object.values(info.driverinfo);
            var vinfo=Object.values(info.vehicleinfo);
            vinfo[4]=info.bookingid();
            var receiptcard=document.getElementsByClassName('info-wrapper')[0];
            for(var i=0;i<6;i++)
                (((receiptcard.firstElementChild).getElementsByTagName('ul')[i]).getElementsByTagName('li')[1]).firstElementChild.innerText=vinfo[i];
            
            for(var i=0;i<3;i++)
                (((receiptcard.lastElementChild).getElementsByTagName('ul')[i]).getElementsByTagName('li')[1]).firstElementChild.innerText=dinfo[i];
            
        }

        if(data=='pending'){
            sendInfo(id);
        }
    });
}

function sendInfo(id){
    console.log('sendInfo()');
    var url="https://node-servr.herokuapp.com/checkAvalability?id="+id;  
    
    if(window.XMLHttpRequest){  
        request=new XMLHttpRequest();  
    }  
    else if(window.ActiveXObject){  
        request=new ActiveXObject("Microsoft.XMLHTTP");  
    }  
  
    try{  
        //request.setRequestHeader("Access-Control-Allow-Origin", "*");
        request.onreadystatechange=getInfo;  
        request.open("GET",url,true);  
        request.send();  
    }catch(e){alert("Unable to connect to server");}  
}
  
function getInfo(){  
    if(request.readyState==4){  
        var val=request.responseText;  
        
        $(id).html(val);
    }  
}  