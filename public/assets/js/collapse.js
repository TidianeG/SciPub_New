
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
/*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});