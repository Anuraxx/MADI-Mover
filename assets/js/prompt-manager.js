function setStatus(response){
    var query=window.location.search.substring(1);

    if(response=='accept'){
        $('.button-wrapper').html('Thanks for responding!!');
        var url="https://node-servr.herokuapp.com/prompt?"+query+"&status=Available";
        console.log(url);
         $.get(url,(status)=>{
            
        }); 

    }else{
        $('.button-wrapper').html('Thanks for responding!!');
        var url="https://node-servr.herokuapp.com/prompt?"+query+"&status=Booked";
        $.get(url,(status)=>{
            
        });    
    }
}