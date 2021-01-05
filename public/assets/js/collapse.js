
for (let i=1;i<=8;i++){
    let question = document.getElementById("question"+i)
    question.addEventListener('click', function(){
        if(document.getElementById('faq'+i).style.display==="none"){
            for(let j=1;j<=8;j++){
                document.getElementById('faq'+j).style.display="none";
            }
    
            document.getElementById('faq'+i).style.display="block";
        }
        else{
            for(let j=1;j<=8;j++){
                document.getElementById('faq'+j).style.display="none";
            }
        }
        
    })
}