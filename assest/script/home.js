$(document).ready(function(){

    window.alert("hey!");

    $('#search_select_type').change(function(){

        window.alert("hey!");

        //clear display
        $("#search_compagny_div").css("display", "none");
        $("#search_internship_div").css("display", "none");
        $("#search_pilot_div").css("display", "none");
        $("#search_delegate_div").css("display", "none");
        $("#search_student_div").css("display", "none");

        //display attributes of the choosen category
        if($('#search_select_type option:selected').text()=="Student"){
            $("#search_student_div").css("display", "block");
        }
        if($('#search_select_type option:selected').text()=="Delegate"){
            $("#search_delegate_div").css("display", "block");
        }
        if($('#search_select_type option:selected').text()=="Pilot"){
            $("#search_pilot_div").css("display", "block");
        }
        if($('#search_select_type option:selected').text()=="Internship"){
            $("#search_internship_div").css("display", "block");
        }
        if($('#search_select_type option:selected').text()=="Compagny"){
            $("#search_compagny_div").css("display", "block");
        }
        
        

    
        
    });
    







});